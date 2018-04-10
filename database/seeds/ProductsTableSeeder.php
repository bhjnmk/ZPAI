<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <4; $i++) {
            $product = new \App\Products();
            $product->category = $i;
            $product->title = 'Product' . $i;
            $product->description = $i . 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse finibus est id elit accumsan sodales. Quisque fermentum rhoncus mi, eget.';
            $product->img = $i;
            $product->save();
        }
    }
}
