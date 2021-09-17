<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as FakerFactory;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
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
                'first_name'=>$faker->firstNameMale,
                'last_name'=>$faker->lastName,
                'middle_name'=>'anhht',
                'email'=>$faker->email ,
                'avatar'=>$faker->image,
                'username'=>$faker->lastName,
                'password'=>'$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi' ,
                'address'=>$faker->address ,
            ];
            DB::table('users')->insert($data); // tạo dữ liệu fake vào db
        }

}
}