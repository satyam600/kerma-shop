<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Discount;
use Illuminate\Support\Arr;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $discountCoupons = [
    'WELCOME10',
    'FIRSTBUY15',
    'SHOES20',
    'FESTIVE25',
    'SUMMER30',
    'WINTER15',
    'FLASH50',
    'SUPERDEAL10',
    'MEGASALE20',
    'SAVE5',
    'NEWUSER50',
    'EXTRA40',
    'BLACKFRIDAY30',
    'CYBERMONDAY20',
    'BIGBRAND10',
    'LIMITED25',
    'LOYALTY15',
    'FREESHIP',
    'WEEKEND20',
    'STYLEUP15',
    'APPONLY10',
    'BUYMORE20',
    'COMEBACK15',
    'DIWALI30',
    'XMAS25',
    'HOLI20',
    'EID15',
    'MONSOON10',
    'YEAREND40',
    'GETLUCKY10'
];

        foreach($discountCoupons as $discountCoupon) {
            $discount=new Discount;
            $discount->discount_name=$discountCoupon;
            $discount->percentage=rand(1,100);
            $discount->save();
        }
    }
}
