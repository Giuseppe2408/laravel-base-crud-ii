<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Comic;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 10; $i++) { 
            $comic = new Comic();
            $comic->title = $faker->name();
            $comic->description = $faker->text();
            $comic->thumb = $faker->image();
            $comic->price = rand(1,100);
            $comic->series = $faker->name();
            $comic->sale_date = $faker->date();
            $comic->type = $faker->name();
            $comic->save();
        }
        
    }
}
