<?php

namespace App\Rules;

use Carbon\Carbon;
use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class DateBetween implements ValidationRule
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
    // Mengubah nilai input menjadi objek tanggal Carbon
    $pickupDate = Carbon::parse($value);
    // Mendapatkan tanggal saat ini (awal hari ini)
    $now = Carbon::now()->startOfDay();
    // Menghitung tanggal satu bulan dari sekarang (akhir hari)
    $lastDate = Carbon::now()->addMonth()->endOfDay();

    // Memeriksa apakah tanggal pickup adalah hari ini atau di masa depan dan dalam satu bulan ke depan
    return $pickupDate->gte($now) && $pickupDate->lte($lastDate);
}


    public function message()
    {
        return 'Please choose the date between a month from now';
    }
}
