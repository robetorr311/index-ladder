<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class AgreementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_offers')->insert(['id' => 1, 'name' => 'Service', 'created_at' => Carbon::now()]);
        DB::table('type_offers')->insert(['id' => 2, 'name' => 'Skill', 'created_at' => Carbon::now()]);
        DB::table('type_offers')->insert(['id' => 3, 'name' => 'Product', 'created_at' => Carbon::now()]);
        DB::table('type_offers')->insert(['id' => 4, 'name' => 'Cash/Money', 'created_at' => Carbon::now()]);
        DB::table('time_services')->insert(['id' => 1, 'name' => 'A Day', 'created_at' => Carbon::now()]);
        DB::table('time_services')->insert(['id' => 2, 'name' => 'Less Than a Week', 'created_at' => Carbon::now()]);
        DB::table('time_services')->insert(['id' => 3, 'name' => 'A Week', 'created_at' => Carbon::now()]);
        DB::table('time_services')->insert(['id' => 4, 'name' => 'Less than 15 Days', 'created_at' => Carbon::now()]);
        DB::table('time_services')->insert(['id' => 5, 'name' => '15 Days', 'created_at' => Carbon::now()]);
        DB::table('time_services')->insert(['id' => 6, 'name' => 'Less than a Month', 'created_at' => Carbon::now()]);
        DB::table('time_services')->insert(['id' => 7, 'name' => 'A Month', 'created_at' => Carbon::now()]);
        DB::table('time_services')->insert(['id' => 8, 'name' => 'More Than a Month', 'created_at' => Carbon::now()]);
    }
}
