<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @property mixed $uuid
 * @property mixed $name
 * @property mixed $color
 * @property mixed $description
 * @property mixed $updated_at
 * @property mixed $latestPoint
 */
class ScooterResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param Request $request
     * @return array
     */
    #[ArrayShape(['uuid' => "mixed", 'type' => "mixed", 'attributes' => "array", 'latest_point' => "mixed"])]
    public function toArray($request): array
    {
        return [
            'uuid' => $this->uuid,
            'type' => $this::class,
            'attributes' => [
                'name' => $this->name,
                'color' => $this->color,
                'description' => $this->description,
                'updated_at' => $this->updated_at,
            ],
            'latest_point' => $this->latestPoint
        ];
    }
}
