<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categorie;
use Illuminate\Support\Arr;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeCategories = [
    'Sneakers',
    'Running Shoes',
    'Formal Shoes',
    'Casual Shoes',
    'Loafers',
    'Sandals',
    'Flip Flops',
    'Boots',
    'High Heels',
    'Sports Shoes',
    'Slippers',
    'Walking Shoes',
    'Canvas Shoes',
    'Slip-Ons',
    'Training Shoes',
    'Hiking Boots',
    'Derby Shoes',
    'Oxfords',
    'Moccasins',
    'Ballet Flats'
];

        foreach($shoeCategories as $shoeCategorie) {
            $category=new Categorie();
            $category->category_name=$shoeCategorie;
           $category->save(); 
        }
    }
}
