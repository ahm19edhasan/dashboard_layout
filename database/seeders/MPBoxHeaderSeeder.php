<?php

namespace Database\Seeders;

use App\Models\MPBoxHeader;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MPBoxHeaderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_p_box_headers')->truncate();

        MPBoxHeader::create([
            'title' => 'We strive to gain the satisfaction of users in our services and products',
            'sub_title' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'image' => 'images/main_page/box_header_image.png',
            'button_active' => 1,
            'button_action' => route('home'),
            'button_text' => 'Buy now',
        ]);
    }
}
