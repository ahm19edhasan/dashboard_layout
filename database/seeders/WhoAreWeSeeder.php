<?php

namespace Database\Seeders;

use App\Models\MPWhoWeAre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WhoAreWeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_p_who_we_ares')->truncate();

        MPWhoWeAre::create([
            'title' => 'Who We Are ?',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'button_action' => '/',
            'button_text' => 'Read More',
            'image' => asset('front_assets/images/2201_w037_n003_156b_p1_1561.png'),
            'button_active' => 1,
        ]);
    }
}
