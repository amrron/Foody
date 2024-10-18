<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BmiResourece extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'berat_badan' => $this->berat_badan,
            'tinggi_badan' => $this->tinggi_badan,
            'nilai_bmi' => $this->bmi,
            'kategori' => $this->kategori['status'],
            'warna' => $this->kategori['color'],
            'warna_tebal' => $this->kategori['strongColor']
        ];
    }
}
