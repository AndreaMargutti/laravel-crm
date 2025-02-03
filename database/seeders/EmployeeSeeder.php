<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Enterprise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $enterprises = Enterprise::all()->pluck('id');

        //
        for ($i = 0; $i <=20; $i++) {
            $newEmploye = new Employee();
            $newEmploye->enterprise_id = $faker->randomElement($enterprises);
            $newEmploye->first_name = $faker->word();
            $newEmploye->last_name = $faker->word();
            $newEmploye->phone_number = $faker->randomNumber(8, true);
            $newEmploye->email = $faker->email();
            $newEmploye->save();
        };
    }
}