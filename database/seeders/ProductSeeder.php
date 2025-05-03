<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
            'title'=>'Lakeside Camping at Pawna',
            'description'=>'Adventure Geek - Explore the Unexplored, Mumbai',
            'event_date_from'=>'2024-11-25',
            'event_date_to'=>'2024-11-25',
            'time_from'=>'08:00:00',
            'time_to'=>'19:30:00',
            'rating'=>'14',
            'price'=>'1400',
            'category_id'=>6,
            'country_id'=>1,
            'photo'=>'images/img1.jpg'
            ],
            [
            'title'=>'Sound Of Christmas  2023',
            'description'=>'Bal Gandharva Rang Mandir, Mumbai',
            'event_date_from'=>'2024-1-02',
            'event_date_to'=>'2024-1-04',
            'time_from'=>'06:30:00',
            'time_to'=>'21:30:00',
            'rating'=>'16',
            'price'=>'499',
            'category_id'=>3,
            'country_id'=>1,
            'photo'=>'images/img1.jpg'
            ],
            [
            'title'=>'Meet the Royal College of Art in Mumbai 2023',
            'description'=>'Sofitel Mumbai BKC, Mumbaii',
            'event_date_from'=>'2024-1-02',
            'event_date_to'=>'2024-02-02',
            'time_from'=>'10:00:00',
            'time_to'=>'17:00:00',
            'rating'=>'16',
            'price'=>'0',
            'category_id'=>2,
            'country_id'=>1,
            'photo'=>'images/img1.jpg'
            ],
            [
            'title'=>'Global Engineering Education Expo 2023',
            'description'=>'The St. Regis, Mumbai',
            'event_date_from'=>'2024-12-03',
            'event_date_to'=>'2025-01-03',
            'time_from'=>'10:00:00',
            'time_to'=>'21:30:00',
            'rating'=>'48',
            'price'=>'0',
            'category_id'=>2,
            'country_id'=>1,
            'photo'=>'images/img1.jpg'
            ],
            [
            'title'=>'Cricket Business Meetup',
            'description'=>'Play The Turf, Malad, Mumbai',
            'event_date_from'=>'2024-12-08',
            'event_date_to'=>NULL,
            'time_from'=>'06:30:00',
            'time_to'=>'21:30:00',
            'rating'=>'16',
            'price'=>'399',
            'category_id'=>4,
            'country_id'=>1,
            'photo'=>'images/img1.jpg'
            ],
            [
            'title'=>"Valentine's Day Sail on a Yacht in Mumbai",
            'description'=>'Mumbai',
            'event_date_from'=>'2024-02-14',
            'event_date_to'=>NULL,
            'time_from'=>'07:00:00',
            'time_to'=>'19:00:00',
            'rating'=>'16',
            'price'=>'2999',
            'category_id'=>6,
            'country_id'=>1,
            'photo'=>'images/img1.jpg'
            ],
        ]);
    }
}
