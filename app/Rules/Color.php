<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Color implements Rule
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
        $value = trim($value, '#');
        return ctype_xdigit($value) && strlen($value) === 6;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message(): string
    {
        return __('The :attribute must be in #HEX format.');
    }
}
