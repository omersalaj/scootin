<?php

namespace App\Models;

use App\Enum\PointStatusEnum;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Support\Facades\DB;

class Point extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'lat',
        'lng',
        'status'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'id',
        'scooter_id'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'status' => PointStatusEnum::class,
    ];

    /**
     * This Mutator interact with the Points' updated_at field.
     *
     * @return Attribute
     * @noinspection PhpUnused
     */
    protected function updatedAt(): Attribute
    {
        return Attribute::make(
            get: static fn ($value) => Carbon::createFromTimeStamp(strtotime($value))->diffForHumans(),
            // Setter actually not needed
            set: static fn ($value) => strtolower($value),
        );
    }


    /**
     * Get the post that owns the comment.
     *
     * @return BelongsTo
     */
    public function scooter(): BelongsTo
    {
        return $this->belongsTo(Scooter::class);
    }

    /**
     * Determines whenever current point is marked as Free
     *
     * @return bool
     * @noinspection PhpUnused
     */
    public function isFree(): bool
    {
        return $this->status === PointStatusEnum::Free;
    }

    /**
     * Determines whenever current point is marked as Free
     *
     * @return bool
     * @noinspection PhpUnused
     */
    public function isOccupied(): bool
    {
        return $this->status === PointStatusEnum::Occupied;
    }

    /**
     * Check if current point is inside rectangle formed by two given points
     *
     * @param Point $north_west
     * @param Point $south_east
     * @return bool
     * @noinspection PhpUnused
     */
    public function isInsideRectangle(Point $north_west, Point $south_east): bool
    {
        return (bool)DB::select("SELECT ST_CONTAINS(ST_GEOMFROMTEXT(
        'POLYGON((
             $north_west->lng $north_west->lat,
             $north_west->lng $south_east->lat,
             $south_east->lng $south_east->lat,
             $south_east->lng $north_west->lat,
             $north_west->lng $north_west->lat
         ))'
        ),POINT($this->lng,$this->lat)) as contains")[0]->contains;
    }

    /**
     * When trip begin, we set the status of the Point as Occupied
     *
     * @param PointStatusEnum $new_status
     * @return Point
     */
    public function setPointStatus(PointStatusEnum $new_status): static
    {
        $this->status = $new_status;
        return $this;
    }

    /**
     * Create new Point with given Latitude & Longitude
     *
     * @param float $lat
     * @param float $lng
     * @return Point
     */
    public static function createPoint(float $lat, float $lng): Point
    {
        $point = new Point();
        $point->lat = $lat;
        $point->lng = $lng;

        return $point;
    }
}
