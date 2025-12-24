<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('settings')->truncate();

        Setting::create([
            'email_address' => 'test@test.com',
            'fax_address' => '0514564644',
            'phone_number' => '0514564644',
            'facebook_address' => 'https://www.facebook.com/',
            'twitter_address' => 'https://twitter.com/',
            'product_enable' => 1,
            'header_image' => asset('front_assets/images/CEW_LOGO1.png'),
            'footer_image' => asset('front_assets/images/CEW_LOGO1.png'),
            'footer_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor cpiscing elit. Ac, mi in ut',
            'certifications' => [
                asset('front_assets/images/image-1.png'),
                asset('front_assets/images/image-1.png'),
                asset('front_assets/images/image-1.png'),
            ],
        ]);
    }
}
