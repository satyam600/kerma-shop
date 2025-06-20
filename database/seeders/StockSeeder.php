<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stock;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class StockSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i<=105; $i++) {
            $stock=new Stock;
            $stock->product_id=$i;
            $stock->quantity=rand(1, 500);
            $stock->save();
        }
    }
}
