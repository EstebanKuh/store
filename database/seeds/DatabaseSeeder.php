<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(SellersTableSeeder::class);
       /* $this->call(ProvidersTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(SellersTableSeeder::class);*/
    }
}
