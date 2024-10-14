<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use Illuminate\Support\Carbon;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, HasUuids, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'jenis_kelamin',
        'tanggal_lahir',
        'aktivitas',
        'role',
        'gambar'
    ];

    public function bmi() {
        return $this->hasMany(Bmi::class);
    }

    public function foodRecords() {
        return $this->hasMany(FoodRecord::class);
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
    
    public function getTinggiBadanAttribute() {
        return $this->bmi->last()->tinggi_badan;
    }

    public function getBeratBadanAttribute() {
        return $this->bmi->last()->berat_badan;
    }

    public function getUsiaAttribute(){
        return Carbon::parse($this->tanggal_lahir)->age;
    }
}
