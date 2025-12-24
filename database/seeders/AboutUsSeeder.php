<?php

namespace Database\Seeders;

use App\Models\AboutUs;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AboutUsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('about_us')->truncate();

        AboutUs::create([
            'title' => 'About name works',
            'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam c, mi in ut quam

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam c, mi in ut quam

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. ALorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam

                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'certification_title' => 'Accreditation certificates',
        ]);
    }
}
