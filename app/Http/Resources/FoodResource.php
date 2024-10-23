<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id ?? null,
            'nama' => $this->nama,
            'deskripsi' => $this->deskripsi,
            'slug' => $this->slug,
            'gambar' => $this->gambar ?? "https://img.freepik.com/premium-vector/circular-arrangement-various-food-items-flat-cartoon-style_1092570-4604.jpg",
            'karbohidrat' => $this->karbohidrat,
            'protein' => $this->protein,
            'lemak' => $this->lemak,
            'gula' => $this->gula,
            'garam' => $this->garam,
        ];
    }
}
