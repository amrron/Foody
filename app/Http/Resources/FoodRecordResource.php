<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FoodRecordResource extends JsonResource
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
            'nama' => $this->name,
            'jumlah' => $this->jumlah,
            'waktu' => $this->waktu,
            'karbohidrat' => $this->karbohidrat,
            'protein' => $this->protein,
            'lemak' => $this->lemak,
            'gula' => $this->gula,
            'garam' => $this->garam,
        ];
    }
}
