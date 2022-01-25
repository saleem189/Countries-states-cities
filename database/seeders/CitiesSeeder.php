<?php

namespace Database\Seeders;

use App\Models\cities;
use Illuminate\Database\Seeder;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $cities = [
            [
                'city_id' => 1,
                'state_id'=> 16,
                'city_name' => 'Amlabad'
                
            ],
             [
                'city_id' => 2,
                'state_id'=> 16,
                'city_name' => 'Bandh Dih'
                
            ],
            [
                'city_id' => 3,
                'state_id'=> 16,
                'city_name' => 'Bandhgora'
                
            ],
            [
                'city_id' => 4,
                'state_id'=> 16,
                'city_name' => 'Bhojudih'
                
            ],
            [
                'city_id' => 5,
                'state_id'=> 16,
                'city_name' => 'Bokaro Steel City'
                
            ],
            [
                'city_id' => 16,
                'state_id'=> 16,
                'city_name' => 'Chandrapura'
                
            ],
            [
                'city_id' => 7,
                'state_id'=> 16,
                'city_name' => 'Chas'
                
            ],
            [
                'city_id' => 8,
                'state_id'=> 16,
                'city_name' => 'Chira Chas'
                
            ],
             [
                'city_id' => 9,
                'state_id'=> 16,
                'city_name' => 'Dugda'
                
            ],
             [
                'city_id' => 10,
                'state_id'=> 16,
                'city_name' => 'Dungaditand'
                
            ],
             [
                'city_id' => 11,
                'state_id'=> 16,
                'city_name' => 'Gomia'
                
            ],
             [
                'city_id' => 12,
                'state_id'=> 16,
                'city_name' => 'Jaridih Bazar'
                
            ],
           
            [
                'city_id' => 13,
                'state_id'=> 16,
                'city_name' => 'Jena'
                
            ],
           
            [
                'city_id' => 14,
                'state_id'=> 16,
                'city_name' => 'Kurpania'
                
            ],
             [
                'city_id' => 15,
                'state_id'=> 16,
                'city_name' => 'Lalpania'
                
            ],
             [
                'city_id' => 101,
                'state_id'=> 16,
                'city_name' => 'Phusro'
                
            ],
             [
                'city_id' => 17,
                'state_id'=> 16,
                'city_name' => 'Sijhua'
                
            ],
             [
                'city_id' => 18,
                'state_id'=> 16,
                'city_name' => 'Tenu'
                
            ],
           [
                'city_id' => 19,
                'state_id'=> 1,
                'city_name' => 'bombuflat'
                
            ],
            [
                'city_id' => 20,
                'state_id'=> 1,
                'city_name' => 'Garacharma'
                
            ],
            [
                'city_id' => 21,
                'state_id'=> 1,
                'city_name' => 'Port Blair'
                
            ],
            [
                'city_id' => 22,
                'state_id'=> 1,
                'city_name' => 'Rangat'
                
            ],
             [
                'city_id' => 23,
                'state_id'=> 2,
                'city_name' => 'Addanki'
                
            ],
            [
                'city_id' => 24,
                'state_id'=> 2,
                'city_name' => 'Adivivaram'
                
            ],
            [
                'city_id' => 25,
                'state_id'=> 2,
                'city_name' => 'Adoni'
                
            ],
            [
                'city_id' => 26,
                'state_id'=> 2,
                'city_name' => 'Aganampudi'
                
            ],
             [
                'city_id' => 27,
                'state_id'=> 2,
                'city_name' => 'Ajjaram'
                
            ],
             [
                'city_id' => 28,
                'state_id'=> 2,
                'city_name' => 'Akividu'
                
            ],
             [
                'city_id' => 29,
                'state_id'=> 2,
                'city_name' => 'Akkarampalle'
                
            ],
             [
                'city_id' => 30,
                'state_id'=> 2,
                'city_name' => 'Akkayapalle'
                
            ],
             [
                'city_id' => 31,
                'state_id'=> 2,
                'city_name' => 'Akkireddipalem'
                
            ],
             [
                'city_id' =>32,
                'state_id'=> 2,
                'city_name' => 'Alampur'
                
            ],
             [
                'city_id' => 33,
                'state_id'=> 2,
                'city_name' => 'Amalapuram'
                
            ],    
        ];

   

        cities::insert($cities);
        

    }
}
