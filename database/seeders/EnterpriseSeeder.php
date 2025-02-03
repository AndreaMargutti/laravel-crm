<?php

namespace Database\Seeders;

use App\Models\Enterprise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Generator as Faker;

class EnterpriseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        //
        for($i = 0; $i <= 10; $i++) {
            $newEnterprise = new Enterprise();
            $newEnterprise->name = $faker->word();
            $newEnterprise->logos = $faker->imageUrl();
            $newEnterprise->pIva = $faker->randomNumber(6, true);
            $newEnterprise->save();
        }
    }
}
