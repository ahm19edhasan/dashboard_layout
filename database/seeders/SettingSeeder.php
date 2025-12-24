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

        $data = [
            [
                'key' => 'avatar',
                'value' => asset('dashboard_assets\media\logos\logo.png'),
                'type' => 'image',
            ],

            [
                'key' => 'footer_description',
                'value' => 'Here Is Some Words To But It Inside Footer Description, Please Do Not Remove This',
                'type' => 'text',
            ],

            [
                'key' => 'facebook_link',
                'value' => 'https://laravel.com',
                'type' => 'text',
            ],

            [
                'key' => 'twitter_link',
                'value' => 'https://laravel.com',
                'type' => 'text',
            ],

            [
                'key' => 'instagram_link',
                'value' => 'https://laravel.com',
                'type' => 'text',
            ],

            [
                'key' => 'google_link',
                'value' => 'https://laravel.com',
                'type' => 'text',
            ],

            [
                'key' => 'linkedin_link',
                'value' => 'https://laravel.com',
                'type' => 'text',
            ],

            [
                'key' => 'address',
                'value' => 'palestine',
                'type' => 'text',
            ],

            [
                'key' => 'phone',
                'value' => '0213564987',
                'type' => 'text',
            ],

            [
                'key' => 'email',
                'value' => 'admin@system.com',
                'type' => 'text',
            ],

        ];

        foreach ( $data as $key => $value ) {
            Setting::create([
                'key' => $value['key'],
                'value' => $value['value'],
                'type' => $value['type'],
            ]);
        }
    }
}
