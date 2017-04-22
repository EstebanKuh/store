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
        $numOfProviders = 5;
        $numOfSellers = 3;
        
        factory(Category::class,$numOfCategories)->create();
        factory(Seller::class,$numOfSellers)->create();
            
        $category_ids = App\Category::all('id')->pluck('id')->toArray();
        $providers = factory(Provider::class,$numOfProviders)->create();
        
        foreach($providers as $provider){
            $category_id = random_int( 0, count($category_ids));
            factory(Product::class)
                ->create([
                    'provider_id' => $provider->id,
                    'category_id' => $category_id
                ])
                -> each {
                    function ($product){
                        $product ->sellers()->sync(
                            App\Seller::all()->random(2)
                        );
                    }
                };
        }
    }
}
