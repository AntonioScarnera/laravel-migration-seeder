<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Destination;


class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 20; $i++){
            $newDestination = new Destination();
    
            $newDestination->country = $faker->countryCode();
            $newDestination->locality = $faker->city();
            $newDestination->price = $faker->randomFloat(2, 40, 100000);
            $newDestination->image = $faker->imageUrl(360, 360, 'city', true);
            $newDestination->description = $faker->paragraph(5, true);
    
            $newDestination->save();
    }
    }
}
