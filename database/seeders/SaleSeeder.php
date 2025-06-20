<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Sale;
use Faker\Factory as Faker;
use Illuminate\Support\Arr;

class SaleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $saleNames = [
    'Mega Shoe Sale', 'Footwear Frenzy', 'Sneaker Splash', 'Step Into Style', 'Heel Deals',
    'Walk Into Savings', 'Sole Fest', 'Runway Rush', 'Lace-Up Loot', 'Stride Sale',
    'Shoe Carnival', 'Kickoff Clearance', 'Sneaker Steals', 'Sandal Season Sale', 'FitFeet Fest',
    'Shoe Storm', 'Fashion Footsteps', 'Run For Deals', 'Footwear Fiesta', 'Step It Up Sale',
    'Flip Flop Frenzy', 'Boot Bonanza', 'Sneaker Festival', 'Stride & Save', 'Step Sale Extravaganza',
    'Clear the Rack', 'Perfect Pair Sale', 'Hot Heels Offer', 'Comfort Sole Sale', 'Running Rush Sale',
    'The Great Shoe Drop', 'Step Sale Madness', 'Happy Feet Event', 'Lace-Up & Go Sale', 'Walk More Pay Less',
    'Flat Out Footwear Sale', 'Fresh Kicks Fair', 'Daily Shoe Deal', 'Sneaker of the Day', 'Heels & Deals',
    'ShoeBox Savings', 'The Sole Event', 'Feet First Sale', 'Weekend Walkaway Sale', 'The Big Shoe Blowout',
    'Monthly Solemate Sale', 'Buy 1 Walk 2 Sale', 'Step Into Summer', 'Autumn Sole Fest', 'Black Sole Friday',
    'Cyber Shoe Week', 'Spring In Your Step Sale', 'The Heel Deal', 'Sole Sensation', 'Quick Step Sale',
    'Tread Lightly Sale', 'Ultimate Kickoff', 'Kicks & Deals Fest', 'Style Your Step', 'Winter Walk Sale',
    'Comfort Carnival', 'Heels & Hustle Sale', 'Smart Shoes Save', 'Durable Deals', 'Elite Sole Event',
    'Shoe Bazaar', 'Walk Right Sale', 'Happy Step Hour', 'Rainy Sole Sale', 'Festival Footwear Fiesta',
    'Limited Time Sole', 'Premium Pair Sale', 'Casual Kicks Campaign', 'Lux Sole Launch', 'Stride Season Sale',
    'Foot Forward Festival', 'Laced-Up Luxury', 'Every Step Sale', 'Grip & Go Offer', 'Wanderlust Walk Sale',
    'Toes in Style', 'Walk & Win Offer', 'Glam Walk Days', 'Best Foot Forward Sale', 'Sneaker Pop Deal',
    'Fresh Pairs Fair', 'Stomp the Price', 'Shoe Rack Rumble', 'Outsole Offers', 'Super Sole Sunday',
    'All-Day Arch Deals', 'The Daily Kick Deal', 'Urban Footwear Sale', 'Sporty Sole Season', 'Work Shoe Weekend',
    'Runners’ Delight', 'Style Sole Showdown', 'Fashion Sole Finds', 'Lace Drop Deals', 'Kicks Unlimited Sale'
];

        
        $faker=Faker::create();
        foreach($saleNames as $saleName) {
            $sale=new Sale;
            $sale->sale_name=$saleName;	
            $sale->user_id=rand(1,109);	
            $sale->product_id=rand(1,105);	
            $sale->discount_id=rand(1,30);
            $sale->qulity=$faker->sentence;
            $price=rand(400, 100000);
            $sale->actual_price=$price;
            $discount=rand(1,50);	
            $sale->sale_price=$price*($discount/100);
            $sale->save();
        }
    }
}
