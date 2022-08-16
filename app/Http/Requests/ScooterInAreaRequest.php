<?php

namespace App\Http\Requests;

use App\Enum\PointStatusEnum;
use App\Rules\Coordinate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Enum;
use JetBrains\PhpStorm\ArrayShape;

class ScooterInAreaRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(
        [
            'lat_north_west' => "array",
            'lng_north_west' => "array",
            'lat_south_east' => "array",
            'lng_south_east' => "array",
            'status' => "string[]"
        ]
    )]
    public function rules(): array
    {
        return [
            'lat_north_west' => ['required', new Coordinate()],
            'lng_north_west' => ['required', new Coordinate()],
            'lat_south_east' => ['required', new Coordinate()],
            'lng_south_east' => ['required', new Coordinate()],
            'status' => ['string', new Enum(PointStatusEnum::class)],
        ];
    }
}
