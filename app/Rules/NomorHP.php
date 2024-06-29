<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class NomorHP implements ValidationRule
{
    protected $min;

    public function __construct($min = 8)
    {
        $this->min = $min;
    }

    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        // Check if the value is numeric and has the minimum length
        if (!is_numeric($value) || strlen($value) < $this->min) {
            $fail("No Hp must be a valid phone number with at least {$this->min} digits.");
        }
    }
}
