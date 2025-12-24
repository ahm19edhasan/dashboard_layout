<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->truncate();

        Category::query()->create([
            'category_name' => 'Mobiles',
        ]);

        Category::query()->create([
            'category_name' => 'Tvs',
        ]);

        Category::query()->create([
            'category_name' => 'Clothes',
        ]);
        Category::query()->create([
            'category_name' => 'T-shirt',
            'parent_id' => 3,
        ]);

        Category::query()->create([
            'category_name' => 'jeans',
            'parent_id' => 3,
        ]);

        Category::query()->create([
            'category_name' => 'Samsung S22',
            'parent_id' => 1,
        ]);

        Category::query()->create([
            'category_name' => 'Iphone 13 Pro max',
            'parent_id' => 1,
        ]);

        Category::query()->create([
            'category_name' => 'Sony',
            'parent_id' => 2,
        ]);

        Category::query()->create([
            'category_name' => 'Sports',
        ]);

        Category::query()->create([
            'category_name' => 'Football',
            'parent_id' => 9,
        ]);
    }
}
