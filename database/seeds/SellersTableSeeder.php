<?php

use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numOfSellers = 3;        
        factory(App\Seller::class,$numOfSellers)
            ->create()
            ->each(
                function($seller){
                    $seller->products()->sync(
                        App\Product::all()->random(5)
                    );
                }
            );
        
    }
}
