<?php

namespace App\Http\Requests;

use App\Rules\Coordinate;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class PointPostRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

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
    #[ArrayShape(['lat' => "array", 'lng' => "array"])]
    public function rules(): array
    {
        return [
            'lat' => ['required', new Coordinate()],
            'lng' => ['required', new Coordinate()],
        ];
    }
}
