<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SummaryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'rata_rata_bmi' => $this->rataRataBmi,
            'aktivitas' => floatval($this->aktivitas),
            'total_karbohidrat' => floatval($this->totalKarbohidrat),
            'total_protein' => floatval($this->totalProtein),
            'total_garam' => floatval($this->totalGaram),
            'total_gula' => floatval($this->totalGula),
            'total_lemak' => floatval($this->totalLemak),
            'batas_karbohidrat' => floatval($this->batasKarbohidrat),
            'batas_protein' => floatval($this->batasProtein),
            'batas_lemak' => floatval($this->batasLemak),
            'batas_garam' => floatval($this->batasGaram),
            'batas_gula' => floatval($this->batasGula),
            'daily_karbohidrat' => floatval($this->dailyKarbohidrat),
            'daily_protein' => floatval($this->dailyProtein),
            'daily_garam' => floatval($this->dailyGaram),
            'daily_gula' => floatval($this->dailyGula),
            'daily_lemak' => floatval($this->dailyLemak),
            'kebutuhan_kalori' => floatval($this->kebutuhanKalori),
            'progres_kalori' => floatval($this->progresKalori)
        ];
    }
}
