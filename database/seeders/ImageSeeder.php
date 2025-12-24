<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\MPOurPartners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $partners_images = [
            '/images/01.png',
            '/images/01.png',
            '/images/01.png',
            '/images/01.png',
            '/images/01.png',
            '/images/01.png',
            '/images/01.png',
        ];

        foreach ($partners_images as $image) {
            Image::create([
                'body' => $image,
                'imageable_id' => MPOurPartners::query()->first()->id,
                'imageable_type' => 'App/Models/MPOurPartners',
            ]);
        }
    }
}
