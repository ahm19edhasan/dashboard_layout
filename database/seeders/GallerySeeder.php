<?php

namespace Database\Seeders;

use App\Models\gallery;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('galleries')->truncate();

        gallery::create([
            'title' => 'Our Services and products are our goal',
            'header_image' => asset('assets/images/transparent-package-delivery-carton-box-relocation-cardboard-5db9fc5417d8b11.png'),
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'galleries' => [
                asset('front_assets/images/kisspng-webpack-blog-package-delivery-javascript-vue-js-5cb223531dd8631.png')
            ],
            'gallery_title' => 'Our partnership with Bahbah company',
            'cover_text' => asset('assets/images/pexels-james-sutton-2288421.jpg'),
        ]);


    }
}
