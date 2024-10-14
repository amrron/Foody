<?php

namespace App\Models;

use Illuminate\Support\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FoodRecord extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [
        'id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function getTanggalWaktuAttribute()
    {
        return Carbon::parse($this->waktu)->format('Y/m/d');
    }
}
