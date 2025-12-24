<?php

namespace Database\Seeders;

use App\Models\ServicesPage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServicesPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services_pages')->truncate();

        ServicesPage::create([
            'title' => 'We provide you with many services',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectLorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ac, mi in ut quam etur adipiscing elit. Ac, mi in ut quam',
            'image' => asset('assets/images/kisspng-navi-mumbai-freight-forwarding-agency-freight-tran-goods-wagon-5b1ee4182fa7231.png'),
        ]);
    }
}
