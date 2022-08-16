<?php

namespace App\Http\Requests;

use App\Rules\Color;
use Illuminate\Foundation\Http\FormRequest;
use JetBrains\PhpStorm\ArrayShape;

class ScooterPostRequest extends FormRequest
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
    #[ArrayShape(['name' => "string", 'description' => "string", 'color' => "\App\Rules\Color[]"])]
    public function rules(): array
    {
        return [
            'name' => 'required|max:255',
            'description' => 'max:500',
            'color' => [new Color()],
        ];
    }
}
