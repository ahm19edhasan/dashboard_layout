<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->truncate();

        Product::query()->create([
            'product_name' => 'Product_one',
            'category_id' => 2,
            'price' => '200',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'images' => [
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
            ],
            'cover_image' => asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
        ]);

        Product::query()->create([
            'product_name' => 'Product Two',
            'category_id' => 4,
            'price' => '200',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'images' => [
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
            ],
            'cover_image' => asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
        ]);

        Product::query()->create([
            'product_name' => 'Product Three',
            'category_id' => 3,
            'price' => '200',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'images' => [
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
            ],
            'cover_image' => asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
        ]);

        Product::query()->create([
            'product_name' => 'Product Four',
            'category_id' => 2,
            'price' => '200',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'images' => [
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
            ],
            'cover_image' => 'Test',
        ]);

        Product::query()->create([
            'product_name' => 'Product Five',
            'category_id' => 2,
            'price' => '200',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'images' => [
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
            ],
            'cover_image' => asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png'),
        ]);
    }
}
