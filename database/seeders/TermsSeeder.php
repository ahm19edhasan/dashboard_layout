<?php

namespace Database\Seeders;

use App\Models\Term;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TermsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('terms')->truncate();

        Term::create([
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

        Term::create([
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
