<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Coordinate implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     * @return bool
     */
    public function passes($attribute, $value): bool
    {
        $regex = "/^([+\-])?(?:90(?:\.0{1,6})?|(?:\d|[1-8]\d)(?:\.\d{1,6})?)$/";
        return preg_match($regex, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return __('The :attribute must be of type Latitude or Longitude.');
    }
}
