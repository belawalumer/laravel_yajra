<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // factory(App\Customer::class, 10000)->create();
        $faker = Faker::create();
        $data = [];
        for ($i = 0; $i < 500000; $i++)
        {
            $data[] = [
                'name' => $faker->name,
                'email' => $faker->email,
            ];
        }
        $chunks = array_chunk($data, 10000);
        foreach($chunks as $chunk)
        {
            App\Customer::insert($chunk);
        }
    }
}