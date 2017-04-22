<?php

use Illuminate\Database\Seeder;

class ProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $numOfProviders = 5;
        
        
        $providers = factory(Provider::class,$numOfProviders)->create();
        
        foreach($providers as $provider){
            factory(Product::class)
                ->create()
        }
        
    }
}
