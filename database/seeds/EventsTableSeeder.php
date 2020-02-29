<?php

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::truncate();

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            Event::create([
                'event_name' => $faker->unique()->word(),
                'description' => $faker->sentence(),
            ]);
        }
    }
    }
