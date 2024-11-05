<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ReleaseResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "version" => $this->version,
            "url" => $this->url,
            "changelog" => $this->changelog,
            "release_date" => $this->created_at->format('Y-m-d')
        ];
    }
}
