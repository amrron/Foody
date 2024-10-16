<?php

namespace Database\Seeders;

use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscription1month = Subscription::create([
            'name' => '1 Bulan',
            'duration' => 30,
            'price' => 15000,
            'description' => 'Langganan selama 1 bulan / 30 Hari'
        ]);

        $subscription3month = Subscription::create([
            'name' => '3 Bulan',
            'duration' => 90,
            'price' => 35000,
            'description' => 'Langganan selama 3 bulan / 90 Hari'
        ]);

        $subscription6month = Subscription::create([
            'name' => '6 Bulan',
            'duration' => 180,
            'price' => 80000,
            'description' => 'Langganan selama 3 bulan / 90 Hari'
        ]);
    }
}
