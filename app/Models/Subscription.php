<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory, HasUuids;

    protected $guarded = [
        'id'
    ];

    public function transactions()
    {
        return $this->hasMany(Transaction::class);
    }
}
