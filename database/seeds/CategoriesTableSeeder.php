<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numOfCategories = 10;
        $numOfProviders = 15;
        $numOfSellers = 3;
        
        factory(App\Category::class,$numOfCategories)->create();
            
        $category_ids = App\Category::all('id')->pluck('id')->toArray();
        $providers = factory(App\Provider::class,$numOfProviders)->create();
        
        foreach($providers as $provider){
            $category_id = random_int( 1, count($category_ids));
            factory(App\Product::class)
                ->create([
                    'provider_id' => $provider->id,
                    'category_id' => $category_id
                ]);
        }
    
    
        factory(App\Seller::class,$numOfSellers)
            ->create()
            ->each(
                function($seller){
                    $seller->products()->sync(
                        App\Product::all()->random(2)
                    );
                }
            );
        
        
    }
}
