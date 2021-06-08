<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Sport;

class SportSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
      for ($i=0; $i < 10; $i++) {
        $sport = new Sport();

        $sport->name = $faker->word();
        $sport->description = $faker->text();
        $sport->governing_body = $faker->word();
        $sport->team_members = $faker->numberBetween(0, 30);
        $sport->equipment = $faker->text();
        $sport->olympic = $faker->boolean();

        $sport->save();
      }
    }
}
