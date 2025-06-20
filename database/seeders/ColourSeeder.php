<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Colour;
use Illuminate\Support\Arr;

class ColourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeColors = [
    'Black', 'White', 'Grey', 'Red', 'Blue', 'Navy', 'Green', 'Olive', 'Brown', 'Tan',
    'Beige', 'Cream', 'Maroon', 'Burgundy', 'Pink', 'Purple', 'Yellow', 'Orange', 'Mustard', 'Cyan',
    'Turquoise', 'Teal', 'Mint', 'Lavender', 'Coral', 'Peach', 'Khaki', 'Charcoal', 'Ivory', 'Off White',
    'Sky Blue', 'Royal Blue', 'Forest Green', 'Lime Green', 'Dark Green', 'Sea Green', 'Steel Blue', 'Slate Grey', 'Ash', 'Taupe',
    'Gold', 'Silver', 'Copper', 'Bronze', 'Rose Gold', 'Gunmetal', 'Rust', 'Mahogany', 'Sand', 'Smoke Grey',
    'Midnight Blue', 'Stone', 'Plum', 'Blush', 'Fuchsia', 'Denim Blue', 'Ice Blue', 'Pearl White', 'Graphite', 'Neon Green',
    'Neon Pink', 'Neon Yellow', 'Neon Orange', 'Cherry Red', 'Crimson', 'Scarlet', 'Indigo', 'Azure', 'Lilac', 'Amethyst',
    'Mocha', 'Espresso', 'Cocoa', 'Chestnut', 'Walnut', 'Dusty Rose', 'Wine', 'Burnt Orange', 'Brick Red', 'Clay',
    'Charcoal Black', 'Frost White', 'Deep Blue', 'Petrol Blue', 'Dove Grey', 'Jet Black', 'Cloud Grey', 'Sunflower', 'Aqua Blue', 'Mint Green',
    'Oatmeal', 'Caramel', 'Vanilla', 'Sage Green', 'Denim', 'Matte Black', 'Glossy Red', 'Stone Grey', 'Ice Grey', 'Chalk White'
];

        foreach($shoeColors as $shoeColor) {
            $color=new Colour;
            $color->colour_name=$shoeColor;
        $color->save();
        }
    }
}
