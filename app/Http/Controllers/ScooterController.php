<?php

namespace App\Http\Controllers;

use App\Enum\PointStatusEnum;
use App\Http\Requests\ScooterInAreaRequest;
use App\Http\Requests\ScooterPostRequest;
use App\Http\Requests\ScooterUpdateRequest;
use App\Http\Resources\ScooterResource;
use App\Models\Point;
use App\Models\Scooter;
use Illuminate\Database\Eloquent\Collection;

class ScooterController extends Controller
{
    /**
     * Scooter: Get All
     * @return Collection
     */
    public function index(): Collection
    {
        return Scooter::all();
    }

    /**
     * Scooter: Create New
     * @param ScooterPostRequest $request
     * @return Scooter
     */
    public function store(ScooterPostRequest $request): Scooter
    {
        $data = $request->validated();
        return Scooter::create($data);
    }

    /**
     * Scooter: Show
     * @param int $id
     * @return ScooterResource
     */
    public function show(int $id): ScooterResource
    {
        return new ScooterResource(Scooter::findOrFail($id));
    }

    /**
     * Scooter: Update existing
     * @param ScooterUpdateRequest $request
     * @param int $id
     * @return Scooter
     */
    public function update(ScooterUpdateRequest $request, int $id): Scooter
    {
        $data = $request->validated();
        $scooter = Scooter::findorfail($id);
        $scooter->update($data);
        return $scooter;
    }

    /**
     * Scooter: Delete existing
     *
     * @param int $id
     * @return int
     */
    public function destroy(int $id): int
    {
        return Scooter::destroy($id);
    }

    /**
     * Scooter: Search LIKE name
     *
     * @param string $name
     * @return Collection
     */
    public function search(string $name): Collection
    {
        return Scooter::whereLike('name', $name)->get();
    }

    /** Scooter: Search in area by status
     * @param ScooterInAreaRequest $request
     * @return array
     */
    public function inArea(ScooterInAreaRequest $request): array
    {
        // Validate passed data and create 2 points from given lat lng
        $data = $request->validated();
        $north_west = Point::createPoint($data['lat_north_west'], $data['lng_north_west']);
        $south_east = Point::createPoint($data['lat_south_east'], $data['lng_south_east']);

        $status = PointStatusEnum::Free;
        if ((string)@$data['status'] === PointStatusEnum::Occupied->value) {
            $status = PointStatusEnum::Occupied;
        }
        return Scooter::isInArea($north_west, $south_east, $status);
    }
}
