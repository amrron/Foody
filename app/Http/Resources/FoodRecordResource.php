<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

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
            'waktu' => Carbon::parse($this->waktu)->format('H:i'),
            'karbohidrat' => $this->karbohidrat * $this->jumlah,
            'protein' => $this->protein * $this->jumlah,
            'lemak' => $this->lemak * $this->jumlah,
            'gula' => $this->gula * $this->jumlah,
            'garam' => $this->garam * $this->jumlah,
        ];
    }
}
