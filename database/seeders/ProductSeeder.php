<?php

namespace Database\Seeders;

// use Database\Factories\BrandFactory;
// use Database\Factories\Product;
use App\Models\Brand;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		Product::factory()
            ->count(20)
            ->create();
    }
}
