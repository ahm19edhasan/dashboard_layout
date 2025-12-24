<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('users')->truncate();
        Schema::enableForeignKeyConstraints();

        User::create([
            'first_name' => "Samaa",
            'last_name' => 'Khader',
            'email' => 'samaa@test.com',
            'email_verified_at' => now(),
            'phone_number' => '0590000000',
            'phone_verified_at' => now(),
            'password' => Hash::make(123456),
        ]);
    }
}
