<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return[
            "id" => $this->id,
            "name" => $this->name,
            "email" => $this->email,
            "jenis_kelamin" => $this->jenis_kelamin,
            "usia" => $this->usia,
            "berat_badan" => $this->berat_badan,
            "tanggla_lahir" => $this->tanggal_lahir,
            "tinggi_badan" => $this->tinggi_badan,
            "gambar" => $this->gambar ? asset('/storage') . '/' . $this->gambar : null,
            "verified" => $this->hasVerifiedEmail()
        ];
    }
}
