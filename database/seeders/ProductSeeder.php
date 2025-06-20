<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeProductNames = [
    'Nike Air Max 270', 'Adidas Ultraboost 22', 'Puma RS-X3', 'Reebok Nano X3', 'New Balance 574 Core',
    'ASICS Gel-Kayano 30', 'Under Armour Charged Pursuit', 'Jordan Retro 6', 'Vans Old Skool Classic', 'Converse Chuck Taylor All Star',
    'Skechers D’Lites Memory Foam', 'Fila Disruptor II Premium', 'Brooks Ghost 15', 'Saucony Ride 16', 'Hoka One One Clifton 9',
    'Mizuno Wave Rider 27', 'Salomon Speedcross 6', 'Merrell Moab 3', 'Timberland Classic 6-Inch', 'Lotto Vertigo Run',
    'Diadora Heritage Equipe', 'Campus Nitro Boost', 'Red Tape Flexon', 'HRX Ignite Pro', 'Bata Power Jogger',
    'Woodland Trekker Lite', 'Relaxo MaxGrip', 'Liberty Freedomwalk', 'Lee Cooper Urban Move', 'Sparx SM-245',
    'Allen Solly FitWalk', 'Clarks Un Rio Strap', 'Crocs Literide Pacer', 'Steve Madden Cliff', 'K-Swiss Court Express',
    'DC Shoes Kalis Vulc', 'On Cloudmonster', 'Columbia Vitesse Trail', 'North Face Vectiv Exploris', 'Peter England ActiveFlex',
    'Louis Philippe Pace', 'Pavers England CozySlip', 'Hush Puppies Bounce Plus', 'Cat Footwear Excavator LT', 'Gucci Ace Leather Sneaker',
    'Balenciaga Triple S', 'Prada Cloudbust Thunder', 'Versace Chain Reaction', 'Yeezy Boost 350 V2', 'Off-White Vulcanized Low',
    'Lacoste Powercourt', 'Tommy Hilfiger Harlow', 'Diesel S-KB Low', 'Zara Sporty Lace-Ups', 'H&M Mesh Trainers',
    'Superga 2750 Cotu Classic', 'Birkenstock Arizona Eva', 'Cole Haan GrandPro Rally', 'Dr. Martens 1460 Pascal', 'Johnston & Murphy XC4',
    'Keen Targhee III', 'Ugg Neumel', 'Toms Alpargata Rope', 'Croft & Barrow ActiveFlex', 'Geox Nebula Y',
    'ECCO Soft 7 Runner', 'Aldo Glennon Sneaker', 'Bugatti Evo Lace Up', 'Bershka Chunky Soles', 'Calvin Klein Brodie',
    'Champion Zone 93', 'Erke Vigor Alpha', 'Guess Bexx Sneakers', 'Jack & Jones JFW Runner', 'Kenneth Cole Riley',
    'Levi’s Court Master', 'Marks & Spencer Flexi Comfort', 'Moschino Speed Sock', 'Nautica Glide', 'Next Retro Runner',
    'Pepe Jeans Bop Basic', 'Quiksilver Rivi Slide', 'Ralph Lauren Train 90', 'River Island Mono Slip', 'Sketch London Propel',
    'Stradivarius Knit Sneakers', 'Ted Baker Torsdi', 'Topman SportRunner', 'Umbro Speciali Pro', 'Valentino Bounce',
    'Wrangler Leather Trek', 'Reebok Zig Kinetica', 'Nike Revolution 6', 'Adidas EQ21 Run', 'Puma Deviate Nitro', 
    'New Balance Fresh Foam Roav', 'ASICS Novablast 3', 'Under Armour HOVR Sonic', 'Jordan Luka 2', 'Vans Sk8-Hi MTE', 
    'Converse Run Star Hike', 'Skechers Arch Fit', 'Crocs Echo Clog', 'Clarks Step Urban Mix', 'Red Chief Durable Trek'
];

        $faker=Faker::create();
        foreach ($shoeProductNames as $shoeProductName) {
            $product=new Product();
            $product->product_name=$shoeProductName;
            $product->brand_id=rand(1, 99);
            $product->category_id=rand(1, 20);
            $product->colour_id=rand(1, 100);
            $product->size_id=rand(1, 55);
            $product->weartype_id=rand(1,20);
            $product->price=rand(400, 100000);
            $product->image_url=$faker->imageUrl;
            $product->description=$faker->paragraph;
            $product->save();
        }

    }
}
