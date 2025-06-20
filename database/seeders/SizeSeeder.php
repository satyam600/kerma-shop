<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Size;
use Illuminate\Support\Arr;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeSizes = [
    '5', '5.5', '6', '6.5', '7', '7.5', '8', '8.5', '9', '9.5',
    '10', '10.5', '11', '11.5', '12', '12.5', '13', '13.5', '14', '15',
    'XS', 'S', 'M', 'L', 'XL',
    'EU 35', 'EU 36', 'EU 37', 'EU 38', 'EU 39',
    'EU 40', 'EU 41', 'EU 42', 'EU 43', 'EU 44',
    'UK 3', 'UK 4', 'UK 5', 'UK 6', 'UK 7',
    'UK 8', 'UK 9', 'UK 10', 'UK 11', 'UK 12',
    'Kids 1', 'Kids 2', 'Kids 3', 'Kids 4', 'Kids 5',
    'Toddler 5', 'Toddler 6', 'Toddler 7', 'Toddler 8', 'Toddler 9'
];

        foreach($shoeSizes as $shoeSize) {
            $size=new Size;
            $size->size_name=$shoeSize;
            $size->save();
        }
    }
}
