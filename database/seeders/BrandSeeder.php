<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Brand;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $shoeBrands = [
    'Nike', 'Adidas', 'Puma', 'Reebok', 'New Balance', 'ASICS', 'Under Armour', 'Fila', 'Converse', 'Skechers',
    'Vans', 'Jordan', 'Brooks', 'Saucony', 'Hoka One One', 'Mizuno', 'Salomon', 'Merrell', 'Timberland', 'Lotto',
    'Diadora', 'Columbia', 'North Face', 'Crocs', 'Steve Madden', 'Clarks', 'K-Swiss', 'DC Shoes', 'On Running', 'Bata',
    'Allen Solly', 'Woodland', 'Red Tape', 'Sparx', 'Campus', 'Liberty', 'Relaxo', 'Peter England', 'Lee Cooper', 'HRX',
    'Louis Philippe', 'Pavers England', 'Hush Puppies', 'Cat Footwear', 'Dolce & Gabbana', 'Gucci', 'Prada', 'Balenciaga', 'Versace',
    'Yeezy', 'Off-White', 'Saint Laurent', 'Chanel', 'Lacoste', 'Tommy Hilfiger', 'Diesel', 'Zara', 'H&M', 'Pull & Bear',
    'Superga', 'Birkenstock', 'Cole Haan', 'Dr. Martens', 'Johnston & Murphy', 'Keen', 'Ugg', 'Toms', 'Croft & Barrow', 'Geox',
    'ECCO', 'Aldo', 'Steve & Barry’s', 'Bershka', 'Bugatti', 'Bottega Veneta', 'Calvin Klein', 'Champion', 'Erke', 'Fila Disruptor',
    'Guess', 'Hollister', 'Jack & Jones', 'Kenneth Cole', 'Levi’s', 'Marks & Spencer', 'Moschino', 'Nautica', 'Next', 'Pepe Jeans',
    'Quiksilver', 'Ralph Lauren', 'River Island', 'Sketch London', 'Stradivarius', 'Ted Baker', 'Topman', 'Umbro', 'Valentino', 'Wrangler'
];
        foreach ($shoeBrands as $shoeBrand) { {
            $brand=new Brand;
            $brand->brand_name=$shoeBrand;
            $brand->save();
        }
    }
    }
}
