<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = FakerFactory::create();
        for ($i=0 ; $i < 10 ; $i++ ) { 
            $data = [ // các cột cần fake dữ liệu
                'title'=>$faker->word,
                'content'=>$faker->text($maxNbChars = 200)   ,
                'user_id'=>$faker->numberBetween($min = 2, $max = 9),
                'access'=>$faker->numberBetween($min = 0, $max = 1),
                'release_date'=>$faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'image'=>$faker->image,
            ];
            DB::table('users')->insert($data); // tạo dữ liệu fake vào db
        }
    }
}

