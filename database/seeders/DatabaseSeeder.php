<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\UserrSeeder;
use Database\Seeders\BrandSeeder;
use Database\Seeders\CategorieSeeder;
use Database\Seeders\ColourSeeder;
use Database\Seeders\DiscountSeeder;
use Database\Seeders\WeartypeSeeder;
use Database\Seeders\SizeSeeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\SaleSeeder;
use Database\Seeders\StockSeeder;
// use Database\Seeders\
// use Database\Seeders\
// use Database\Seeders\

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // $this->call([
        //     UserrSeeder::class
        // ]);
        // $this->call([
        //     BrandSeeder::class
        // ]);
        // $this->call([
        //     CategorieSeeder::class
        // ]);
        // $this->call([
        //     ColourSeeder::class
        // ]);
        // $this->call([
        //     DiscountSeeder::class
        // ]);
        // $this->call([
        //     WeartypeSeeder::class
        // ]);
        // $this->call([
        //     SizeSeeder::class
        // ]);
        // $this->call([
        //     ProductSeeder::class
        // ]);
        // $this->call([
        //     SaleSeeder::class
        // ]);
        $this->call([
            StockSeeder::class
        ]);
        // $this->call([
        //     CategorieSeeder::class
        // ]);
        // $this->call([
        //     CategorieSeeder::class
        // ]);
    }
}
