<?php

namespace Database\Seeders;

use App\Models\ProductPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_pages')->truncate();

        ProductPage::create([
            'image' => asset('assets/images/pexels-tom-fisk-54704522.png'),
        ]);
    }
}
