<?php

namespace App\Models;

use App\Enum\PointStatusEnum;
use App\Events\TripBeganEvent;
use App\Events\TripEndedEvent;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Support\Facades\DB;

class Scooter extends Model
{
    use HasFactory;
    use HasUuid;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'color',
        'description'
    ];

    /**
     * The relationships that should always be loaded.
     *
     * @var array
     */
    protected $with = ['latestPoint'];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = ['distance_traveled'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = ['id', 'points'];

    /**
     * Get all points for the Scooter (traveling history).
     *
     * @return HasMany
     */
    public function points(): HasMany
    {
        return $this->hasMany(Point::class);
    }

    /**
     * Get the current location of the Scooter
     *
     * @return HasOne
     * @noinspection PhpUnused
     */
    public function latestPoint(): HasOne
    {
        return $this->hasOne(Point::class)->latest();
    }

    /**
     * This is attribute that appends for distance_traveled
     *
     * @return int
     * @noinspection PhpUnused
     */
    public function getDistanceTraveledAttribute(): int
    {
        // Get all stop points of this scooter
        $points = $this->points;
        $distance = 0;

        // Loop through all points of scooter
        foreach ($points as $i => $iValue) {
            // Check if there is next point available
            if (!isset($points[$i + 1])) {
                break;
            }

            // Get current and next Points' latitude and longitude, so we can calculate distance
            $start = " POINT($iValue->lng, $iValue->lat) ";
            $stop = " POINT({$points[$i+1]->lng}, {$points[$i+1]->lat}) ";

            // Calculate distance between 2 Points and convert to MegaMeters (1000km = 1Mm, 1000m = 1km)
            $distance += DB::select("SELECT ST_Distance_Sphere($start, $stop) / 1000 / 1000 AS Mm")[0]->Mm;
        }
        return $distance;
    }

    /**
     * Where like scope
     *
     * @param $query
     * @param $column
     * @param $value
     * @return mixed
     * @noinspection PhpUnused
     */
    public function scopeWhereLike($query, $column, $value): mixed
    {
        return $query->where($column, 'LIKE', '%' . $value . '%');
    }

    /**
     * Or where like scope
     *
     * @param $query
     * @param $column
     * @param $value
     * @return mixed
     * @noinspection PhpUnused
     */
    public function scopeOrWhereLike($query, $column, $value): mixed
    {
        return $query->orWhere($column, 'LIKE', '%' . $value . '%');
    }

    /**
     * Mark current point as trip start and send broadcast message
     *
     * @param float $lat
     * @param float $lng
     * @return $this
     * @noinspection PhpUnused
     */
    public function tripBegan(float $lat, float $lng): Scooter
    {

        // Save current Point
        $this->savePoint(PointStatusEnum::Occupied, $lat, $lng);

        // Broadcast the even that the trip of this Scooter has begun.
        TripBeganEvent::broadcast($this);

        return $this;
    }

    /**
     * Mark current point as trip end and send broadcast message
     *
     * @param float $lat
     * @param float $lng
     * @return $this
     */
    public function tripEnded(float $lat, float $lng): Scooter
    {
        // Save current Point
        $this->savePoint(PointStatusEnum::Free, $lat, $lng);

        // Broadcast the even that the trip of this Scooter has ended.
        TripEndedEvent::broadcast($this);

        return $this;
    }

    /**
     * Save position from given lat and lng
     *
     * @param PointStatusEnum $status
     * @param float $lat
     * @param float $lng
     * @return void
     */
    private function savePoint(PointStatusEnum $status, float $lat, float $lng): void
    {
        // Create point from lat & long and set status as Occupied
        $point = Point::createPoint($lat, $lng);
        $point->setPointStatus($status);

        // Save the changes into Database
        $this->points()->save($point);
    }

    /**
     * Search the scooter in rectangular area
     *
     * @param Point $north_west
     * @param Point $south_east
     * @param PointStatusEnum $status
     * @return array
     */
    public static function isInArea(Point $north_west, Point $south_east, PointStatusEnum $status): array
    {
        $response = [];
        // TODO Fetch with target status first, then go loop with foreach
        foreach (self::all() as $item) {
            /** @var Point $point */
            $point = $item->latestPoint;
            if (
                $point?->status === $status &&
                $point?->isInsideRectangle($north_west, $south_east)
            ) {
                $response[] = $item;
            }
        }
        return $response;
    }
}
