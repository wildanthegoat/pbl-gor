<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class TimeBetween implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        //
    }

    public function passes($attribute, $value)
    {
        $pickupDate = Carbon::parse($value);
        $pickupTime = Carbon::createFromTime($pickupDate->hour, $pickupDate->minute, $pickupDate->second);
        //jam buka
        $earliestTime = Carbon::createFromTimeString('09:00:00');
        $lastTime = Carbon::createFromTimeString('22:00:00');

        return $pickupTime ->between($earliestTime, $lastTime) ? true : false;
    }

    public function message()
    {
        return 'Please choose Time between 09:00 - 22:00';
    }
}
