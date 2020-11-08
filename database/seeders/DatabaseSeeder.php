<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       DB::table('ident_types')->insert(['id' => 1, 'name' => 'Picture', 'created_at' => Carbon::now()]);
       DB::table('ident_types')->insert(['id' => 2, 'name' => 'License', 'created_at' => Carbon::now()]);
       DB::table('ident_types')->insert(['id' => 3, 'name' => 'ID Card', 'created_at' => Carbon::now()]);
       DB::table('status_trades')->insert(['id' => 1,'name' => 'published', 'created_at' => Carbon::now()]);      
       DB::table('status_trades')->insert(['id' => 2,'name' => 'acepted', 'created_at' => Carbon::now()]);      
       DB::table('status_trades')->insert(['id' => 3,'name' => 'payed', 'created_at' => Carbon::now()]);      
       DB::table('status_trades')->insert(['id' => 4,'name' => 'delivered', 'created_at' => Carbon::now()]);
       DB::table('status_trades')->insert(['id' => 5,'name' => 'qualified', 'created_at' => Carbon::now()]);                
    }
}
