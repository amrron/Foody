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

    public function getRataRataBmiAttribute() {
        return $this->bmi->avg('bmi');
    }

    public function getUsiaAttribute(){
        return Carbon::parse($this->tanggal_lahir)->age;
    }

    public function getDailyKarbohidratAttribute() {
        return $this->foodRecords->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->karbohidrat; });
    }

    public function getDailyProteinAttribute() {
        return $this->foodRecords->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->protein; });
    }

    public function getDailyGaramAttribute() {
        return $this->foodRecords->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->garam; });
    }

    public function getDailyGulaAttribute() {
        return $this->foodRecords->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->gula; });
    }

    public function getDailyLemakAttribute() {
        return $this->foodRecords->where('waktu', '>=', date('Y-m-d'))->sum(function ($catatan){ return $catatan->jumlah * $catatan->lemak; });
    }

    public function getTotalKarbohidratAttribute() {
        return $this->foodRecords->sum(function ($catatan){ return $catatan->jumlah * $catatan->karbohidrat; });
    }

    public function getTotalProteinAttribute() {
        return $this->foodRecords->sum(function ($catatan){ return $catatan->jumlah * $catatan->protein; });
    }

    public function getTotalGaramAttribute() {
        return $this->foodRecords->sum(function ($catatan){ return $catatan->jumlah * $catatan->garam; });
    }

    public function getTotalGulaAttribute() {
        return $this->foodRecords->sum(function ($catatan){ return $catatan->jumlah * $catatan->gula; });
    }

    public function getTotalLemakAttribute() {
        return $this->foodRecords->sum(function ($catatan){ return $catatan->jumlah * $catatan->lemak; });
    }

    public function getKebutuhanKaloriAttribute() {
        $aktivitas = floatval($this->aktivitas);
        $kesehatan = 1;

        $kebutuhankalori = ((10 * $this->beratBadan) + (6.25 * $this->tinggiBadan) - (5 * $this->usia) + ($this->jenis_kelamin == "Laki-laki" ? 5 : -161)) * $aktivitas * $kesehatan;
    
        $kebutuhankalori = 0;
        if ($this->jenis_kelamin == "Laki-laki"){
            // $kebutuhankalori = (88.4 + 13.4 * $this->beratBadan) + (4.8 * $this->tinggiBadan) - (5.68 * $this->usia);
            $kebutuhankalori = 66.5 + (13.7 * $this->beratBadan) + (5.003 * $this->tinggiBadan) - (6.75 * $this->usia);
        } else {
            // $kebutuhankalori = (447.6 + 9.25 * $this->beratBadan) + (3.10 * $this->tinggiBadan) - (4.33 * $this->usia);
            $kebutuhankalori = 655.1 + (9.563 * $this->beratBadan) + (1.850 + $this->tinggiBadan) - (4.676 * $this->usia);
        }

        $kebutuhankalori *= $aktivitas;

        return round($kebutuhankalori, 2);
    }

    public function getBatasKarbohidratAttribute() {
        // Jika 55% kebutuahan kalori berasal dari karbodirat, 1 gram karbohidart 4 kalori
        return round($this->kebutuhanKalori * 0.55 / 4);
    }

    public function getBatasProteinAttribute() {
        // Jika 15% kebutuahan kalori berasal dari protein, 1 gram protein 4 kalori
        return round($this->kebutuhanKalori * 0.15 / 4);
    }

    public function getBatasGaramAttribute() {
        $batas = 5;
        $usia = $this->usia;

        if($usia < 1){
            $batas = 1;
        } 
        if ($usia >= 1 && $usia <= 3){
            $batas = 2;
        }
        if ($usia >= 4 && $usia <= 6){
            $batas = 3;
        }
        if ($usia >= 7 && $usia <= 10){
            $batas = 5;
        } 
        if ($usia > 10) {
            $batas = 5;
        }

        return $batas;
    }

    public function getBatasGulaAttribute() {
        $batas = 50;
        $usia = $this->usia;

        if($usia < 1){
            $batas = 1;
        } 
        if ($usia >= 1 && $usia <= 3){
            $batas = 25;
        }
        if ($usia >= 4 && $usia <= 6){
            $batas = 19;
        }
        if ($usia >= 7 && $usia <= 10){
            $batas = 24;
        } 
        if ($usia >= 11 && $usia <= 18) {
            $batas = 30;
        }
        if ($usia > 18) {
            $batas = 50;
        }

        return $batas;
    }

    public function getBatasLemakAttribute() {
        // Jika 30% kebutuahan kalori berasal dari protein, 1 gram protein 4 kalori
        return round($this->kebutuhanKalori * 0.30 / 9);
    }

    public function getKeteranganAktivitasAttribute(){
        $keterangan = [
            "1.200" => "Tidak aktif (tidak berolahraga sama sekali)",
            "1.375" => "Cukup aktif (berolahraga 1-3x seminggu)",
            "1.550" => "Aktif (berolahraga 3-5x seminggu)",
            "1.725" => "Sangat aktif (berolahraga atau 6-7x seminggu)"
        ];

        return $keterangan[$this->aktivitas];
    }
}
