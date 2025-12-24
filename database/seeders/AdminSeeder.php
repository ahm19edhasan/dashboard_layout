<?php

namespace Database\Seeders;

use App\Models\Admin;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->truncate();

        Admin::create([
            'first_name' => 'Ahmed',
            'last_name' => 'Hasan',
            'email' => 'admin@system.com',
            'email_verified_at' => now(),
            'phone_number' => '0123456789',
            'phone_verified_at' => now(),
            'password' => Hash::make('123456'),
        ]);
    }
}
