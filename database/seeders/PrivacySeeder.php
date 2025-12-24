<?php

namespace Database\Seeders;

use App\Models\Privacy;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrivacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('privacies')->truncate();

        Privacy::create([
            'title' => 'Your Content',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus',
        ]);

        Privacy::create([
            'title' => 'Your Content',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus

            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Enim diam urna eu id tincidunt morbi nisl auctor quisque. Aenean cursus pretium, convallis eu massa. Elementum id vitae montes, neque. Tortor tellus turpis mi tincidunt. Sollicitudin vitae pellentesque fermentum sit cursus',
        ]);
    }
}
