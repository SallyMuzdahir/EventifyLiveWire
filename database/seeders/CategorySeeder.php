<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            ['name'=> 'Entertainment','slug'=>'Entertainment','photo'=>'images/img1.jpg'],
            ['name'=> 'Educational & Business','slug'=>'Educational_Business','photo'=>'images/img2.jpg'],
            ['name'=> 'Cultural & Arts','slug'=>'Cultural_Arts','photo'=>'images/img3.jpg'],
            ['name'=> 'Sports & Fitness','slug'=>'Sports_Fitness','photo'=>'images/img4.jpg'],
            ['name'=> 'Technology & Innovation','slug'=>'Technolog_Innovation','photo'=>'images/img5.jpg'],
            ['name'=> 'Travel & Adventure','slug'=>'Travel_Adventure','photo'=>'images/img1.jpg'],


        ]);
    }
}
