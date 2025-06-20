<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Arr;
use App\Models\Weartype;

class WeartypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wearerTypes = [
    'Men',
    'Women',
    'Unisex',
    'Boys',
    'Girls',
    'Kids',
    'Toddlers',
    'Infants',
    'Youth',
    'Adults',
    'Seniors',
    'Athletes',
    'Runners',
    'Hikers',
    'Dancers',
    'Workers',
    'Students',
    'Professionals',
    'Casual Wearers',
    'Fashion Enthusiasts'
];

        foreach($wearerTypes as $wearerType) {
            $weartype=new Weartype;
            $weartype->weartype_name=$wearerType;
            $weartype->save();
        }
    }
}
