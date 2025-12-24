<?php

namespace Database\Seeders;

use App\Models\MPBoxHeader;
use App\Models\MPOurPartners;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MPOurPartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('m_p_our_partners')->truncate();

        MPOurPartners::create([
            'text' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elitAc, mi in ut',
            'link_text' => 'View All',
            'link_action' => '/',
        ]);
    }
}
