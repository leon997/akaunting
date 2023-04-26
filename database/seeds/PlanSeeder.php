<?php

namespace Database\Seeds;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Plan;

class PlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $plans = [
            [
                'name' => 'Basic',
                'slug' => 'basic',
                'stripe_plan' => 'price_1Mw7iRKaKNvt1MSKAaECrIus',
                'price' => 5,
                'description' => 'Basic'
            ],
            [
                'name' => 'Premium',
                'slug' => 'premium',
                'stripe_plan' => 'price_1Mw7ieKaKNvt1MSKMAosPTH6',
                'price' => 9,
                'description' => 'Premium'
            ]
        ];

        foreach ($plans as $plan) {
            Plan::create($plan);
        }
    }
}
