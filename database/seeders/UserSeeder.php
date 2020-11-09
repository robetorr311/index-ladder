<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('users')->insert(['id'=>1, 'name' => 'Index Ladder',
            'email' => 'indexladder3@gmail.com',
            'password' => Hash::make('rt988311'),
            'role_id'=> 1,
            'email_verified_at' => Carbon::now()]);
    }
}