<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class CategorySeeder extends Seeder
{
    /** 'created_at' => Carbon::now()
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_products')->insert(['id' => 1, 'name' => 'Service', 'created_at' => Carbon::now()]);
        DB::table('type_products')->insert(['id' => 2, 'name' => 'Skill', 'created_at' => Carbon::now()]);
        DB::table('type_products')->insert(['id' => 3, 'name' => 'Product', 'created_at' => Carbon::now()]);
        DB::table('categories')->insert(['id' => 1,
                        'name' => 'Some agricultural services (including landscaping and horticulture)',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);
        DB::table('categories')->insert(['id' => 2,
                       'name' => 'Hotels and other places of lodging',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);
        DB::table('categories')->insert(['id' => 3,
                       'name' => 'Personal services (including dry cleaning, tax preparation, and hair cutting)',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 4,
                       'name' => 'Business services (including temporary agencies and business software developers)',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 5,
                       'name' => 'Automotive services',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 6,
                       'name' => 'Miscellaneous repairs',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 7,
                       'name' => 'Motion pictures',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 8,
                       'name' => 'Amusements and recreation',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 9,
                       'name' => 'Healthcare',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 10,
                       'name' => 'Legal services',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 11,
                       'name' => 'Private education',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 12,
                       'name' => 'Social services',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 13,
                       'name' => 'Museums, zoos, and botanical gardens',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 14,
                       'name' => 'Membership organizations (including houses of worship and clubs)',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 15,
                       'name' => 'Engineering and management services (including consulting)',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 16,
                       'name' => 'Other miscellaneous services',
                       'type_id' => 1,
                       'parent' => 1329, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 17,
                       'name' => 'Agricultural Services & Products',
                       'type_id' => 1,
                       'parent' => 1, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 18,
                       'name' => 'Agriculture',
                       'type_id' => 1,
                       'parent' => 1, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 19,
                       'name' => 'Agribusiness',
                       'type_id' => 1,
                       'parent' => 1, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 20,
                       'name' => 'Farm Bureaus',
                       'type_id' => 1,
                       'parent' => 1, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 21,
                       'name' => 'Farming',
                       'type_id' => 1,
                       'parent' => 1, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 22,
                       'name' => 'Hotels, Motels & Tourism',
                       'type_id' => 1,
                       'parent' => 2, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 23,
                       'name' => 'Accountants',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 24,
                       'name' => 'Advertising/Public Relations',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 25,
                       'name' => 'Computer Software',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 26,
                       'name' => 'Construction Services',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 27,
                       'name' => 'Manufacturing, Misc',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 28,
                       'name' => 'Misc Business',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 29,
                       'name' => 'Misc Finance',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 30,
                       'name' => 'Nursing Homes/Hospitals',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 31,
                       'name' => 'Other',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 32,
                       'name' => 'Transportation',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 33,
                       'name' => 'Trucking',
                       'type_id' => 1,
                       'parent' => 3, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 34,
                       'name'=> 'Air Transport',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 35,
                       'name'=> 'Air Transport Unions',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 36,
                       'name'=> 'Airlines',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 37,
                       'name'=> 'Alcoholic Beverages',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 38,
                       'name'=> 'Alternative Energy Production & Services',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 39,
                       'name'=> 'Architectural Services',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 40,
                       'name'=> 'Attorneys/Law Firms',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 41,
                       'name'=> 'Banking, Mortgage',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 42,
                       'name'=> 'Banks, Commercial',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 43,
                       'name'=> 'Banks, Savings & Loans',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 44,
                       'name'=> 'Bars & Restaurants',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 45,
                       'name'=> 'Beer, Wine & Liquor',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 46,
                       'name'=> 'Books, Magazines & Newspapers',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 47,
                       'name'=> 'Broadcasters, Radio/TV',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 48,
                       'name'=> 'Builders/General Contractors',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 49,
                       'name'=> 'Builders/Residential',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 50,
                       'name'=> 'Building Materials & Equipment',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 51,
                       'name'=> 'Building Trade Unions',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 52,
                       'name'=> 'Business Associations',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 53,
                       'name'=> 'Business Services',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 54,
                       'name'=> 'Cable & Satellite TV Production & Distribution',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 55,
                       'name'=> 'Casinos / Gambling',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 56,
                       'name'=> 'Clothing Manufacturing',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 57,
                       'name'=> 'Commercial Banks',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 58,
                       'name'=> 'Commercial TV & Radio Stations',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 59,
                       'name'=> 'Communications/Electronics',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 60,
                       'name'=> 'Construction',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 61,
                       'name'=> 'Construction Unions',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 62,
                       'name'=> 'Credit Unions',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 63,
                       'name'=> 'Electric Utilities',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 64,
                       'name'=> 'Electronics Manufacturing & Equipment',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 65,
                       'name'=> 'Finance / Credit Companies',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 66,
                       'name'=> 'Finance, Insurance & Real Estate',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 67,
                       'name'=> 'Food & Beverage',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 68,
                       'name'=> 'Food Processing & Sales',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 69,
                       'name'=> 'Food Products Manufacturing',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 70,
                       'name'=> 'Food Stores',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 71,
                       'name'=> 'Gas & Oil',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 72,
                       'name'=> 'General Contractors',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 73,
                       'name'=> 'Internet',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 74,
                       'name'=> 'Pharmaceutical Manufacturing',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 75,
                       'name'=> 'Pharmaceuticals / Health Products',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 76,
                       'name'=> 'Phone Companies',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 77,
                       'name'=> 'Postal Unions',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 78,
                       'name'=> 'Printing & Publishing',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 79,
                       'name'=> 'Sea Transport',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 80,
                       'name'=> 'Securities & Investment',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 81,
                       'name'=> 'Steel Production',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 82,
                       'name'=> 'Textiles',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 83,
                       'name'=> 'Timber, Logging & Paper Mills',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 84,
                       'name'=> 'Unions',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 85,
                       'name'=> 'Unions, Airline',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 86,
                       'name'=> 'Unions, Building Trades',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 87,
                       'name'=> 'Unions, Industrial',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 88,
                       'name'=> 'Unions, Misc',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 89,
                       'name'=> 'Unions, Transportation',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 90,
                       'name'=> 'Venture Capital',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 91,
                       'name'=> 'Waste Management',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 92,
                       'name'=> 'Wine, Beer & Liquor',
                       'type_id' => 1,
                       'parent' => 4, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 93,
                       'name' => 'Auto Dealers',
                       'type_id' => 1,
                       'parent' => 5, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 94,
                       'name' => 'Auto Dealers, Japanese',
                       'type_id' => 1,
                       'parent' => 5, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 95,
                       'name' => 'Auto Manufacturers',
                       'type_id' => 1,
                       'parent' => 5, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 96,
                       'name' => 'Automotive',
                       'type_id' => 1,
                       'parent' => 5, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 97,
                       'name' => 'Car Dealers',
                       'type_id' => 1,
                       'parent' => 5, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 98,
                       'name' => 'Car Dealers, Imports',
                       'type_id' => 1,
                       'parent' => 5, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 99,
                       'name' => 'Car Manufacturers',
                       'type_id' => 1,
                       'parent' => 5, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 100,
                       'name' => 'Automotive',
                       'type_id' => 1,
                       'parent' => 6, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 101,
                       'name' => 'Communications/Electronics',
                       'type_id' => 1,
                       'parent' => 6, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 102,
                       'name' => 'Computer Software',
                       'type_id' => 1,
                       'parent' => 6, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 103,
                       'name' => 'Construction Services',
                       'type_id' => 1,
                       'parent' => 6, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 104,
                       'name' => 'Electric Utilities',
                       'type_id' => 1,
                       'parent' => 6, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 105,
                       'name' => 'Electronics Manufacturing & Equipment',
                       'type_id' => 1,
                       'parent' => 6, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 106,
                       'name' => 'Internet',
                       'type_id' => 1,
                       'parent' => 6, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 107,
                       'name' => 'Radio/TV Stations',
                       'type_id' => 1,
                       'parent' => 6, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 108,
                       'name' => 'Motion Picture Production & Distribution',
                       'type_id' => 1,
                       'parent' => 7, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 109,
                       'name' => 'Publishing & Printing',
                       'type_id' => 1,
                       'parent' => 7, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 110,
                       'name' => 'Recreation / Live Entertainment',
                       'type_id' => 1,
                       'parent' => 7, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 111,
                       'name' => 'TV / Movies / Music',
                       'type_id' => 1,
                       'parent' => 7, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 112,
                       'name' => 'TV Production',
                       'type_id' => 1,
                       'parent' => 8, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 113,
                       'name' => 'Professional Sports, Sports Arenas & Related Equipment & Services',
                       'type_id' => 1,
                       'parent' => 8, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 114,
                       'name' => 'Record Companies/Singers',
                       'type_id' => 1,
                       'parent' => 8, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 115,
                       'name' => 'Recorded Music & Music Production',
                       'type_id' => 1,
                       'parent' => 8, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 116,
                       'name' => 'Recreation / Live Entertainment',
                       'type_id' => 1,
                       'parent' => 8, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 117,
                       'name' => 'Sports, Professional',
                       'type_id' => 1,
                       'parent' => 8, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 118,
                       'name' => 'TV / Movies / Music',
                       'type_id' => 1,
                       'parent' => 8, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 119,
                       'name' => 'TV Production',
                       'type_id' => 1,
                       'parent' => 8, 'created_at' => Carbon::now()]);

        DB::table('categories')->insert(['id' => 120,
                        'name' => 'Doctors & Other Health Professionals',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 121,
                        'name' => 'Health',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 122,
                        'name' => 'Health Professionals',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 123,
                        'name' => 'Health Services/HMOs',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 124,
                        'name' => 'Hedge Funds',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 125,
                        'name' => 'HMOs & Health Care Services',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 126,
                        'name' => 'Home Builders',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 127,
                        'name' => 'Hospitals & Nursing Homes',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 128,
                        'name' => 'Nurses',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 129,
                        'name' => 'Nursing Homes/Hospitals',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 130,
                        'name' => 'Nutritional & Dietary Supplements',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 131,
                        'name' => 'Dentist',
                        'type_id' => 1,
                        'parent' => 9, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 132,
                        'name' => 'Lawyers & Lobbyists',
                        'type_id' => 1,
                        'parent' => 10, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 133,
                        'name' => 'Lawyers / Law Firms',
                        'type_id' => 1,
                        'parent' => 10]                       );
                                 DB::table('categories')->insert(['id' => 134,
                        'name' => 'Education',
                        'type_id' => 1,
                        'parent' => 11, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 135,
                        'name' => 'For-profit Education',
                        'type_id' => 1,
                        'parent' => 11, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 136,
                        'name' => 'Schools/Education',
                        'type_id' => 1,
                        'parent' => 11, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 137,
                        'name' => 'Student Loan Companies',
                        'type_id' => 1,
                        'parent' => 11, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 138,
                        'name' => 'Teachers Unions',
                        'type_id' => 1,
                        'parent' => 11, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 139,
                        'name' => 'Teachers/Education',
                        'type_id' => 1,
                        'parent' => 11, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 140,
                        'name' => 'Unions, Teacher',
                        'type_id' => 1,
                        'parent' => 11, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 141,
                        'name' => 'Universities, Colleges & Schools',
                        'type_id' => 1,
                        'parent' => 11, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 142,
                        'name' => 'Candidate Committees',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 143,
                        'name' => 'Candidate Committees, Democratic',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 144,
                        'name' => 'Candidate Committees, Republican',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 145,
                        'name' => 'Defense/Foreign Policy Advocates',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 146,
                        'name' => 'Democratic Candidate Committees',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 147,
                        'name' => 'Democratic Leadership PACs',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 148,
                        'name' => 'Democratic/Liberal',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 149,
                        'name' => 'Foundations, Philanthropists & Non-Profits',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 150,
                        'name' => 'Funeral Services',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 151,
                        'name' => 'Gay & Lesbian Rights & Issues',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 152,
                        'name' => 'Human Rights',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 153,
                        'name' => 'Ideological/Single-Issue',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 154,
                        'name' => 'Israel Policy',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 155,
                        'name' => 'Misc Unions',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 156,
                        'name' => 'Religious Organizations/Clergy',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 157,
                        'name' => 'Republican Candidate Committees',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 158,
                        'name' => 'Republican Leadership PACs',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 159,
                        'name' => 'Republican/Conservative',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 160,
                        'name' => 'Unions, Public Sector',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 161,
                        'name' => 'Women s Issues',
                        'type_id' => 1,
                        'parent' => 12, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 162,
                        'name' => 'Crop Production & Basic Processing',
                        'type_id' => 1,
                        'parent' => 1, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 163,
                        'name' => 'Sugar Cane & Sugar Beets',
                        'type_id' => 1,
                        'parent' => 1, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 164,
                        'name' => 'Tobacco',
                        'type_id' => 1,
                        'parent' => 1, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 165,
                        'name' => 'Vegetables & Fruits',
                        'type_id' => 1,
                        'parent' => 1, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 166,
                        'name' => 'Forestry & Forest Products',
                        'type_id' => 1,
                        'parent' => 1, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 167,
                        'name' => 'Lodging / Tourism',
                        'type_id' => 1,
                        'parent' => 2, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 168,
                        'name' => 'Chemical & Related Manufacturing',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 169,
                        'name' => 'Cruise Lines',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 170,
                        'name' => 'Cruise Ships & Lines',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 171,
                        'name' => 'Electronics, Defense Contractors',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 172,
                        'name' => 'Gambling & Casinos',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 173,
                        'name' => 'Gambling, Indian Casinos',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 174,
                        'name' => 'Industrial Unions',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 175,
                        'name' => 'Meat processing & products',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 176,
                        'name' => 'Oil & Gas',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 177,
                        'name' => 'Residential Construction',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 178,
                        'name' => 'Restaurants & Drinking Establishments',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 179,
                        'name' => 'Special Trade Contractors',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 180,
                        'name' => 'Stock Brokers/Investment Industry',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 181,
                        'name' => 'Telecom Services & Equipment',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 182,
                        'name' => 'Zoo',
                        'type_id' => 1,
                        'parent' => 13, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 183,
                        'name' => 'Botanical',
                        'type_id' => 1,
                        'parent' => 13, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 184,
                        'name' => 'Museums',
                        'type_id' => 1,
                        'parent' => 13, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 185,
                        'name' => 'Others',
                        'type_id' => 1,
                        'parent' => 13, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 186,
                        'name' => 'Drug Manufacturers',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 187,
                        'name' => 'Candidate Committees',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 188,
                        'name' => 'Candidate Committees, Democratic',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 189,
                        'name' => 'Candidate Committees, Republican',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 190,
                        'name' => 'Clergy & Religious Organizations',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 191,
                        'name' => 'Conservative/Republican',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 192,
                        'name' => 'Democratic Candidate Committees',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 193,
                        'name' => 'Democratic Leadership PACs',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 194,
                        'name' => 'Democratic/Liberal',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 195,
                        'name' => 'Leadership PACs',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 196,
                        'name' => 'Liberal/Democratic',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 197,
                        'name' => 'Energy & Natural Resources',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 198,
                        'name' => 'Environment',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 199,
                        'name' => 'Non-profits, Foundations & Philanthropists',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 200,
                        'name' => 'Religious Organizations/Clergy',
                        'type_id' => 201,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 201,
                        'name' => 'Republican Candidate Committees',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 202,
                        'name' => 'Republican Leadership PACs',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 203,
                        'name' => 'Republican/Conservative',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 204,
                        'name' => 'Pro-Israel',
                        'type_id' => 1,
                        'parent' => 14, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 205,
                        'name' => 'Liquor, Wine & Beer',
                        'type_id' => 1,
                        'parent' => 4, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 206,
                        'name' => 'Entertainment Industry',
                        'type_id' => 1,
                        'parent' => 8, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 207,
                        'name' => 'Aerospace, Defense Contractors',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 208,
                        'name' => 'Coal Mining',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 209,
                        'name' => 'Defense',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 210,
                        'name' => 'Defense Aerospace',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 211,
                        'name' => 'Defense Electronics',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 212,
                        'name' => 'Oil & Gas',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 213,
                        'name' => 'Power Utilities',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 214,
                        'name' => 'Railroads',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 215,
                        'name' => 'Residential Construction',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 216,
                        'name' => 'Telecom Services & Equipment',
                        'type_id' => 1,
                        'parent' => 15, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 217,
                        'name' => 'Cattle Ranchers/Livestock',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 218,
                        'name' => 'Chiropractors',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 219,
                        'name' => 'Civil Servants/Public Officials',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 220,
                        'name' => 'Dairy',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 221,
                        'name' => 'For-profit Prisons',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 222,
                        'name' => 'Foreign & Defense Policy',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 223,
                        'name' => 'Garbage Collection/Waste Management',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 224,
                        'name' => 'Government Employee Unions',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 225,
                        'name' => 'Government Employees',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 226,
                        'name' => 'Gun Control',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 227,
                        'name' => 'Gun Rights',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 228,
                        'name' => 'Indian Gaming',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 229,
                        'name' => 'Insurance',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 230,
                        'name' => 'Labor',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 231,
                        'name' => 'Liquor, Wine & Beer',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 232,
                        'name' => 'Livestock',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 233,
                        'name' => 'Lobbyists',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 234,
                        'name' => 'Logging, Timber & Paper Mills',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 235,
                        'name' => 'Marijuana',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 236,
                        'name' => 'Marijuana',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 237,
                        'name' => 'Marine Transport',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 238,
                        'name' => 'Medical Supplies',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 239,
                        'name' => 'Mining',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 240,
                        'name' => 'Misc Manufacturing & Distributing',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 241,
                        'name' => 'Miscellaneous Defense',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 242,
                        'name' => 'Miscellaneous Services',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 243,
                        'name' => 'Mortgage Bankers & Brokers',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 244,
                        'name' => 'Music Production',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 245,
                        'name' => 'Natural Gas Pipelines',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 246,
                        'name' => 'Newspaper, Magazine & Book Publishing',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 247,
                        'name' => 'Payday Lenders',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 248,
                        'name' => 'Physicians & Other Health Professionals',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 249,
                        'name' => 'Poultry & Eggs',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 250,
                        'name' => 'Private Equity & Investment Firms',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 251,
                        'name' => 'Public Employees',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 252,
                        'name' => 'Public Sector Unions',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 253,
                        'name' => 'Retail Sales',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 254,
                        'name' => 'Retired',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 255,
                        'name' => 'Transportation Unions',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 256,
                        'name' => 'Trash Collection/Waste Management',
                        'type_id' => 1,
                        'parent' => 16, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 257,
                        'name' => 'Skills',
                        'type_id' => 2,
                        'parent' => 1330]                       );
                                 DB::table('categories')->insert(['id' => 258,
                        'name' => 'Accountants and Auditors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 259,
                        'name' => 'Acquisitions Librarians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 260,
                        'name' => 'Active and Contemplative Religious Sisters and Brothers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 261,
                        'name' => 'Actors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 262,
                        'name' => 'Actuaries',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 263,
                        'name' => 'Acupuncturists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 264,
                        'name' => 'Adaptive Physical Education Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 265,
                        'name' => 'Adult and Vocational Education Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 266,
                        'name' => 'Adult Day Care Coordinators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 267,
                        'name' => 'Advanced Practice Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 268,
                        'name' => 'Adventure Travel Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 269,
                        'name' => 'Advertising Account Executives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 270,
                        'name' => 'Advertising and Marketing Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 271,
                        'name' => 'Advertising Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 272,
                        'name' => 'Aerobics Instructors and Fitness Trainers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 273,
                        'name' => 'Aeronautical and Aerospace Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 274,
                        'name' => 'Aerospace Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 275,
                        'name' => 'Agribusiness Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 276,
                        'name' => 'Agricultural Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 277,
                        'name' => 'Agricultural Equipment Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 278,
                        'name' => 'Agricultural Pilots',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 279,
                        'name' => 'Agricultural Scientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 280,
                        'name' => 'Air Quality Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 281,
                        'name' => 'Air Traffic Controllers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 282,
                        'name' => 'Aircraft Mechanics',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 283,
                        'name' => 'Airplane Dispatchers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 284,
                        'name' => 'Airport Security Personnel',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 285,
                        'name' => 'Airport Service Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 286,
                        'name' => 'Alcohol and Drug Abuse Counselors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 287,
                        'name' => 'Allergists/Immunologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 288,
                        'name' => 'Ambassadors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 289,
                        'name' => 'Amusement Park Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 290,
                        'name' => 'Anesthesiologist Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 291,
                        'name' => 'Anesthesiologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 292,
                        'name' => 'Animal Behaviorists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 293,
                        'name' => 'Animal Breeders and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 294,
                        'name' => 'Animal Caretakers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 295,
                        'name' => 'Animal Handlers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 296,
                        'name' => 'Animal Trainers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 297,
                        'name' => 'Animators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 298,
                        'name' => 'Anthropologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 299,
                        'name' => 'Antiques and Art Dealers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 300,
                        'name' => 'Apparel Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 301,
                        'name' => 'Appliance Service Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 302,
                        'name' => 'Aquaculturists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 303,
                        'name' => 'Aquarists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 304,
                        'name' => 'Arborists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 305,
                        'name' => 'Archaeologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 306,
                        'name' => 'Archakas',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 307,
                        'name' => 'Architects',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 308,
                        'name' => 'Archivists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 309,
                        'name' => 'Armored Truck Drivers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 310,
                        'name' => 'Aromatherapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 311,
                        'name' => 'Art Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 312,
                        'name' => 'Art Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 313,
                        'name' => 'Artist and Repertoire Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 314,
                        'name' => 'Artists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 315,
                        'name' => 'Asbestos Abatement Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 316,
                        'name' => 'Assessors and Appraisers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 317,
                        'name' => 'Astrobiologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 318,
                        'name' => 'Astrogeologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 319,
                        'name' => 'Astronauts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 320,
                        'name' => 'Astronomers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 321,
                        'name' => 'Astrophysicists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 322,
                        'name' => 'Athletic Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 323,
                        'name' => 'Auctioneers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 324,
                        'name' => 'Audio Recording Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 325,
                        'name' => 'Audit and Assurance Accountants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 326,
                        'name' => 'Automatic Teller Machine Servicers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 327,
                        'name' => 'Automobile Collision Repairers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 328,
                        'name' => 'Automobile Sales Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 329,
                        'name' => 'Automobile Service Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 330,
                        'name' => 'Automotive Dealership Owners and Sales Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 331,
                        'name' => 'Automotive Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 332,
                        'name' => 'Automotive Engineering Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 333,
                        'name' => 'Automotive Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 334,
                        'name' => 'Automotive Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 335,
                        'name' => 'Automotive Technology Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 336,
                        'name' => 'Aviation Safety Inspectors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 337,
                        'name' => 'Avionics Engineers and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 338,
                        'name' => 'Ayurvedic Doctors and Practitioners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 339,
                        'name' => 'Baggage Porters and Bellhops',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 340,
                        'name' => 'Bail Bondsmen',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 341,
                        'name' => 'Bailiffs',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 342,
                        'name' => 'Bakery Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 343,
                        'name' => 'Bank Branch Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 344,
                        'name' => 'Bank Examiners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 345,
                        'name' => 'Bankruptcy Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 346,
                        'name' => 'Barbers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 347,
                        'name' => 'Baristas',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 348,
                        'name' => 'Bartenders',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 349,
                        'name' => 'Bed and Breakfast Owners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 350,
                        'name' => 'Beekeepers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 351,
                        'name' => 'Beverage Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 352,
                        'name' => 'Bicycle Mechanics',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 353,
                        'name' => 'Billing Clerks',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 354,
                        'name' => 'Bindery Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 355,
                        'name' => 'Biochemical Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 356,
                        'name' => 'Biochemists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 357,
                        'name' => 'Bioenergy/Biofuels Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 358,
                        'name' => 'Biofeedback Therapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 359,
                        'name' => 'Biofuels Processing Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 360,
                        'name' => 'Biofuels Production Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 361,
                        'name' => 'Biofuels/Biodiesel Technology and Product Development Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 362,
                        'name' => 'Bioinformatics Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 363,
                        'name' => 'Biologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 364,
                        'name' => 'Biomass Plant Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 365,
                        'name' => 'Biomass Power Plant Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 366,
                        'name' => 'Biomedical Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 367,
                        'name' => 'Biomedical Equipment Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 368,
                        'name' => 'Biometrics Systems Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 369,
                        'name' => 'Biophysicists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 370,
                        'name' => 'Biotechnology Patent Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 371,
                        'name' => 'Biotechnology Production Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 372,
                        'name' => 'Biotechnology Research Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 373,
                        'name' => 'Bloggers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 374,
                        'name' => 'Bodyguards',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 375,
                        'name' => 'Boilermakers and Mechanics',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 376,
                        'name' => 'Book Conservators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 377,
                        'name' => 'Book Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 378,
                        'name' => 'Bookkeeping and Accounting Clerks',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 379,
                        'name' => 'Border Patrol Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 380,
                        'name' => 'Botanists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 381,
                        'name' => 'Bounty Hunters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 382,
                        'name' => 'Brewers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 383,
                        'name' => 'Bricklayers and Stonemasons',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 384,
                        'name' => 'Broadcast Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 385,
                        'name' => 'Brownfield Redevelopment Specialists and Site Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 386,
                        'name' => 'Buddhist Priests and Contemplatives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 387,
                        'name' => 'Business Continuity Planners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 388,
                        'name' => 'Business Development Managers and Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 389,
                        'name' => 'Business Intelligence Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 390,
                        'name' => 'Business Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 391,
                        'name' => 'Buyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 392,
                        'name' => 'Cable Television Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 393,
                        'name' => 'Cage Cashiers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 394,
                        'name' => 'Camera Operators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 395,
                        'name' => 'Campaign Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 396,
                        'name' => 'Cancer Registrars',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 397,
                        'name' => 'Canning and Preserving Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 398,
                        'name' => 'Cantors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 399,
                        'name' => 'Cardiologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 400,
                        'name' => 'Cardiovascular Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 401,
                        'name' => 'Career and Employment Counselors and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 402,
                        'name' => 'Carpenters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 403,
                        'name' => 'Cartographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 404,
                        'name' => 'Cartoonists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 405,
                        'name' => 'Cashiers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 406,
                        'name' => 'Casino Credit Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 407,
                        'name' => 'Casino Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 408,
                        'name' => 'Caterers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 409,
                        'name' => 'Cement Masons',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 410,
                        'name' => 'Ceramics Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 411,
                        'name' => 'Chemical Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 412,
                        'name' => 'Chemical Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 413,
                        'name' => 'Chemists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 414,
                        'name' => 'Chief Customer Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 415,
                        'name' => 'Chief Executive Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 416,
                        'name' => 'Chief Financial Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 417,
                        'name' => 'Chief Information Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 418,
                        'name' => 'Chief Sustainability Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 419,
                        'name' => 'Child Care Service Owners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 420,
                        'name' => 'Child Care Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 421,
                        'name' => 'Child Life Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 422,
                        'name' => 'Children s Librarians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 423,
                        'name' => 'Chimney Sweeps',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 424,
                        'name' => 'Chiropractors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 425,
                        'name' => 'Choreographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 426,
                        'name' => 'Cinematographers and Directors of Photography',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 427,
                        'name' => 'Circus Performers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 428,
                        'name' => 'City Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 429,
                        'name' => 'Civil Engineering Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 430,
                        'name' => 'Civil Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 431,
                        'name' => 'Civil Litigation Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 432,
                        'name' => 'Cleaning Service Owners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 433,
                        'name' => 'Client Services Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 434,
                        'name' => 'Clinical Applications Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 435,
                        'name' => 'Clinical Data Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 436,
                        'name' => 'Clinical Nurse Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 437,
                        'name' => 'Clinical Research Coordinators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 438,
                        'name' => 'Clowns',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 439,
                        'name' => 'Coal Miners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 440,
                        'name' => 'Collection Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 441,
                        'name' => 'College Administrators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 442,
                        'name' => 'College Professors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 443,
                        'name' => 'Color Analysts and Image Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 444,
                        'name' => 'Columnists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 445,
                        'name' => 'Comedians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 446,
                        'name' => 'Comic Book Artists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 447,
                        'name' => 'Comic Book Publishers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 448,
                        'name' => 'Comic Book Writers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 449,
                        'name' => 'Commodities Brokers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 450,
                        'name' => 'Community Health Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 451,
                        'name' => 'Compliance Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 452,
                        'name' => 'Composers and Arrangers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 453,
                        'name' => 'Computer and Office Machine Service Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 454,
                        'name' => 'Computer and Video Game Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 455,
                        'name' => 'Computer Network Administrators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 456,
                        'name' => 'Computer Programmers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 457,
                        'name' => 'Computer Support Service Owners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 458,
                        'name' => 'Computer Support Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 459,
                        'name' => 'Computer Systems Programmer/Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 460,
                        'name' => 'Computer Trainers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 461,
                        'name' => 'Computer-Aided Design Drafters and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 462,
                        'name' => 'Confectionery Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 463,
                        'name' => 'Congressional Aides',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 464,
                        'name' => 'Conservators and Conservation Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 465,
                        'name' => 'Construction Inspectors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 466,
                        'name' => 'Construction Laborers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 467,
                        'name' => 'Construction Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 468,
                        'name' => 'Continuous Improvement Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 469,
                        'name' => 'Cooking Instructors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 470,
                        'name' => 'Cooks and Chefs',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 471,
                        'name' => 'Copy Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 472,
                        'name' => 'Copywriters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 473,
                        'name' => 'Coremakers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 474,
                        'name' => 'Corporate Climate Strategists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 475,
                        'name' => 'Corporate Community Relations Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 476,
                        'name' => 'Corporate Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 477,
                        'name' => 'Corporate Librarians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 478,
                        'name' => 'Corrections Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 479,
                        'name' => 'Cosmetic Surgeons',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 480,
                        'name' => 'Cosmeticians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 481,
                        'name' => 'Cosmetics Sales Representatives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 482,
                        'name' => 'Cosmetics Shop Owners and Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 483,
                        'name' => 'Cosmetologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 484,
                        'name' => 'Cost Estimators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 485,
                        'name' => 'Costume Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 486,
                        'name' => 'Counter and Retail Clerks',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 487,
                        'name' => 'Court Interpreters and Translators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 488,
                        'name' => 'Court Reporters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 489,
                        'name' => 'Creative Arts Therapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 490,
                        'name' => 'Credit Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 491,
                        'name' => 'Crime Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 492,
                        'name' => 'Criminal Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 493,
                        'name' => 'Critical Care Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 494,
                        'name' => 'Cruise Ship Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 495,
                        'name' => 'Cryptographic Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 496,
                        'name' => 'Cultural Advisers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 497,
                        'name' => 'Customer Service Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 498,
                        'name' => 'Customer Service Representatives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 499,
                        'name' => 'Customs Brokers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 500,
                        'name' => 'Customs Officials',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 501,
                        'name' => 'Cytogenetic Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 502,
                        'name' => 'Cytotechnologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 503,
                        'name' => 'Dairy Products Manufacturing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 504,
                        'name' => 'Dance Instructors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 505,
                        'name' => 'Dance School Owners and Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 506,
                        'name' => 'Dancers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 507,
                        'name' => 'Data Entry Clerks',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 508,
                        'name' => 'Data Processing Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 509,
                        'name' => 'Data Scientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 510,
                        'name' => 'Data Warehousing Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 511,
                        'name' => 'Database Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 512,
                        'name' => 'Dealers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 513,
                        'name' => 'Demographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 514,
                        'name' => 'Dental Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 515,
                        'name' => 'Dental Hygienists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 516,
                        'name' => 'Dental Laboratory Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 517,
                        'name' => 'Dentists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 518,
                        'name' => 'Deputy U.S. Marshals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 519,
                        'name' => 'Dermatologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 520,
                        'name' => 'Desktop Publishing Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 521,
                        'name' => 'Detectives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 522,
                        'name' => 'Diagnostic Medical Sonographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 523,
                        'name' => 'Dialysis Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 524,
                        'name' => 'Diesel Mechanics',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 525,
                        'name' => 'Diet and Fitness Writers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 526,
                        'name' => 'Dietetic Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 527,
                        'name' => 'Dietitians and Nutritionists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 528,
                        'name' => 'Digital Advertising and Marketing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 529,
                        'name' => 'Digital Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 530,
                        'name' => 'Digital Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 531,
                        'name' => 'Directors of Casino Security',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 532,
                        'name' => 'Directors of Corporate Sponsorship',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 533,
                        'name' => 'Directors of Fund-Raising',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 534,
                        'name' => 'Directors of Security',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 535,
                        'name' => 'Directors of Volunteers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 536,
                        'name' => 'Disc Jockeys',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 537,
                        'name' => 'Dispensing Opticians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 538,
                        'name' => 'Distance Learning Coordinators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 539,
                        'name' => 'Divers and Diving Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 540,
                        'name' => 'Document Management Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 541,
                        'name' => 'Doll Designers and Makers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 542,
                        'name' => 'Drafters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 543,
                        'name' => 'Driving School Owners and Instructors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 544,
                        'name' => 'Drone Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 545,
                        'name' => 'Drone Manufacturing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 546,
                        'name' => 'Drone Pilots',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 547,
                        'name' => 'Drone Repair Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 548,
                        'name' => 'Drug Developers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 549,
                        'name' => 'Dry Cleaning and Laundry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 550,
                        'name' => 'Drywall Installers and Finishers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 551,
                        'name' => 'Ear, Nose, and Throat Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 552,
                        'name' => 'Eastern Orthodox Priests',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 553,
                        'name' => 'Ecologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 554,
                        'name' => 'Economists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 555,
                        'name' => 'Editorial and Research Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 556,
                        'name' => 'Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 557,
                        'name' => 'Education Directors and Museum Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 558,
                        'name' => 'Elder Law Attorneys',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 559,
                        'name' => 'Electrical and Electronics Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 560,
                        'name' => 'Electrical Engineering Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 561,
                        'name' => 'Electricians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 562,
                        'name' => 'Electrologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 563,
                        'name' => 'Electromechanical Engineering Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 564,
                        'name' => 'Electroneurodiagnostic Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 565,
                        'name' => 'Electronics Engineering Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 566,
                        'name' => 'Electronics Service Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 567,
                        'name' => 'Electroplating Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 568,
                        'name' => 'Elementary School Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 569,
                        'name' => 'Elevator Installers and Repairers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 570,
                        'name' => 'Embedded Systems Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 571,
                        'name' => 'Emergency Medical Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 572,
                        'name' => 'Emergency Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 573,
                        'name' => 'Emergency Services Dispatchers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 574,
                        'name' => 'Employment Firm Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 575,
                        'name' => 'Endocrinologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 576,
                        'name' => 'Endodontists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 577,
                        'name' => 'Endoscopy Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 578,
                        'name' => 'Energy Brokers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 579,
                        'name' => 'Energy Conservation Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 580,
                        'name' => 'Energy Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 581,
                        'name' => 'Energy Efficiency Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 582,
                        'name' => 'Energy Transmission and Distribution Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 583,
                        'name' => 'Engineering Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 584,
                        'name' => 'Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 585,
                        'name' => 'English as a Second Language (ESL) Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 586,
                        'name' => 'Enologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 587,
                        'name' => 'Environmental Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 588,
                        'name' => 'Environmental Economists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 589,
                        'name' => 'Environmental Education Program Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 590,
                        'name' => 'Environmental Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 591,
                        'name' => 'Environmental Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 592,
                        'name' => 'Environmental Lobbyists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 593,
                        'name' => 'Environmental Planners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 594,
                        'name' => 'Environmental Restoration Planners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 595,
                        'name' => 'Environmental Scientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 596,
                        'name' => 'Environmental Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 597,
                        'name' => 'EPA Special Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 598,
                        'name' => 'Epidemiologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 599,
                        'name' => 'Ergonomists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 600,
                        'name' => 'Ethnoscientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 601,
                        'name' => 'Event Planners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 602,
                        'name' => 'Executive Recruiters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 603,
                        'name' => 'Exercise Physiologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 604,
                        'name' => 'Exhibit Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 605,
                        'name' => 'Export-Import Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 606,
                        'name' => 'Fabric Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 607,
                        'name' => 'Family and Consumer Scientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 608,
                        'name' => 'Family Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 609,
                        'name' => 'Farm Crop Production Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 610,
                        'name' => 'Farm Equipment Mechanics',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 611,
                        'name' => 'Farmers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 612,
                        'name' => 'Farmers Market Managers/Promoters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 613,
                        'name' => 'Fashion Coordinators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 614,
                        'name' => 'Fashion Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 615,
                        'name' => 'Fashion Illustrators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 616,
                        'name' => 'Fashion Models Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 617,
                        'name' => 'Fashion Photographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 618,
                        'name' => 'Fashion Stylists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 619,
                        'name' => 'Fashion Writers and Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 620,
                        'name' => 'Fast Food Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 621,
                        'name' => 'FBI Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 622,
                        'name' => 'Federal and State Officials',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 623,
                        'name' => 'Fiber Optics Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 624,
                        'name' => 'Film and Television Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 625,
                        'name' => 'Film and Television Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 626,
                        'name' => 'Film and Television Extras',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 627,
                        'name' => 'Film and Television Producers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 628,
                        'name' => 'Film and Video Librarians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 629,
                        'name' => 'Financial Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 630,
                        'name' => 'Financial Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 631,
                        'name' => 'Financial Institution Officers and Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 632,
                        'name' => 'Financial Institution Tellers, Clerks, and Related Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 633,
                        'name' => 'Financial Planners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 634,
                        'name' => 'Financial Quantitative Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 635,
                        'name' => 'Financial Services Brokers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 636,
                        'name' => 'Fire Inspectors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 637,
                        'name' => 'Fire Investigators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 638,
                        'name' => 'Fire Protection Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 639,
                        'name' => 'Fire Safety Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 640,
                        'name' => 'Fire Safety Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 641,
                        'name' => 'Firefighters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 642,
                        'name' => 'Fish and Game Wardens',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 643,
                        'name' => 'Fishers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 644,
                        'name' => 'Fitness Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 645,
                        'name' => 'Flight Attendants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 646,
                        'name' => 'Flight Instructors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 647,
                        'name' => 'Floor Covering Installers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 648,
                        'name' => 'Florists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 649,
                        'name' => 'Fluid Power Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 650,
                        'name' => 'Food Photographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 651,
                        'name' => 'Food Service Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 652,
                        'name' => 'Food Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 653,
                        'name' => 'Food Writers and Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 654,
                        'name' => 'Foreign Correspondents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 655,
                        'name' => 'Foreign Service Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 656,
                        'name' => 'Forensic Accountants and Auditors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 657,
                        'name' => 'Forensic Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 658,
                        'name' => 'Forensic Experts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 659,
                        'name' => 'Foresters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 660,
                        'name' => 'Forestry Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 661,
                        'name' => 'Forge Shop Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 662,
                        'name' => 'Franchise Owners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 663,
                        'name' => 'Fraud Examiners, Investigators, and Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 664,
                        'name' => 'Fuel Cell Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 665,
                        'name' => 'Fuel Cell Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 666,
                        'name' => 'Fuel Cell Technology Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 667,
                        'name' => 'Fund-Raisers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 668,
                        'name' => 'Funeral Home Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 669,
                        'name' => 'Furniture Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 670,
                        'name' => 'Furniture Manufacturing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 671,
                        'name' => 'Futurists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 672,
                        'name' => 'Gallery Owners and Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 673,
                        'name' => 'Gaming Occupations',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 674,
                        'name' => 'Gastroenterologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 675,
                        'name' => 'Genealogists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 676,
                        'name' => 'General Maintenance Mechanics',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 677,
                        'name' => 'General Practitioners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 678,
                        'name' => 'Genetic Counselors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 679,
                        'name' => 'Genetic Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 680,
                        'name' => 'Genetic Scientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 681,
                        'name' => 'Geodetic Surveyors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 682,
                        'name' => 'Geographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 683,
                        'name' => 'Geographic Information Systems Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 684,
                        'name' => 'Geological Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 685,
                        'name' => 'Geologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 686,
                        'name' => 'Geophysicists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 687,
                        'name' => 'Geotechnical Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 688,
                        'name' => 'Geothermal Energy Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 689,
                        'name' => 'Geothermal Production Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 690,
                        'name' => 'Geothermal Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 691,
                        'name' => 'Geriatric Care Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 692,
                        'name' => 'Geriatric Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 693,
                        'name' => 'Geriatric Psychiatrists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 694,
                        'name' => 'Geriatric Social Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 695,
                        'name' => 'Geriatricians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 696,
                        'name' => 'Glass Manufacturing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 697,
                        'name' => 'Glaziers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 698,
                        'name' => 'Grain Merchants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 699,
                        'name' => 'Grant Coordinators and Writers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 700,
                        'name' => 'Graphic Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 701,
                        'name' => 'Graphics Programmers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 702,
                        'name' => 'Green Builders',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 703,
                        'name' => 'Green Hotel/Resort Ecomanagers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 704,
                        'name' => 'Green Marketers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 705,
                        'name' => 'Green Products Manufacturers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 706,
                        'name' => 'Green Transportation Careers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 707,
                        'name' => 'Greeting Card Designers and Writers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 708,
                        'name' => 'Grief Therapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 709,
                        'name' => 'Ground Services Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 710,
                        'name' => 'Groundwater Professionals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 711,
                        'name' => 'Guidance Counselors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 712,
                        'name' => 'Gunsmiths',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 713,
                        'name' => 'Hardware Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 714,
                        'name' => 'Hazardous Waste Management Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 715,
                        'name' => 'Hazardous Waste Management Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 716,
                        'name' => 'Health Advocates',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 717,
                        'name' => 'Health and Regulatory Inspectors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 718,
                        'name' => 'Health Care Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 719,
                        'name' => 'Health Care Insurance Navigators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 720,
                        'name' => 'Health Care Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 721,
                        'name' => 'Health Club Owners and Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 722,
                        'name' => 'Heat Treaters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 723,
                        'name' => 'Heating and Cooling Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 724,
                        'name' => 'Hedge Fund Administrators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 725,
                        'name' => 'Hedge Fund Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 726,
                        'name' => 'Hedge Fund Compliance Professionals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 727,
                        'name' => 'Hedge Fund Investor Relations Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 728,
                        'name' => 'Hedge Fund Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 729,
                        'name' => 'Hedge Fund Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 730,
                        'name' => 'Hedge Fund Relationship Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 731,
                        'name' => 'Hedge Fund Risk Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 732,
                        'name' => 'Hematologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 733,
                        'name' => 'Herbalists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 734,
                        'name' => 'Histologic Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 735,
                        'name' => 'Historians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 736,
                        'name' => 'Historic Preservationists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 737,
                        'name' => 'HIV/AIDS Counselors and Case Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 738,
                        'name' => 'Holistic Physicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 739,
                        'name' => 'Home Health Care Aides',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 740,
                        'name' => 'Home Health Care and Hospice Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 741,
                        'name' => 'Home Stagers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 742,
                        'name' => 'Homeopaths',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 743,
                        'name' => 'Horticultural Inspectors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 744,
                        'name' => 'Horticultural Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 745,
                        'name' => 'Horticultural Therapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 746,
                        'name' => 'Hospice Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 747,
                        'name' => 'Hospitalists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 748,
                        'name' => 'Hosts/Hostesses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 749,
                        'name' => 'Hotel and Motel Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 750,
                        'name' => 'Hotel Concierges',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 751,
                        'name' => 'Hotel Desk Clerks',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 752,
                        'name' => 'Hotel Executive Housekeepers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 753,
                        'name' => 'Hotel Restaurant Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 754,
                        'name' => 'Household Movers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 755,
                        'name' => 'Household Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 756,
                        'name' => 'Housekeepers and Maids',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 757,
                        'name' => 'Human Resources Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 758,
                        'name' => 'Human Resources Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 759,
                        'name' => 'Human Services Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 760,
                        'name' => 'Hydroelectric Plant Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 761,
                        'name' => 'Hydroelectric Production Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 762,
                        'name' => 'Hydropower and Marine Energy Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 763,
                        'name' => 'Hypnotherapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 764,
                        'name' => 'Illustrators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 765,
                        'name' => 'Imams',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 766,
                        'name' => 'Inbound Tour Guides',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 767,
                        'name' => 'Indexers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 768,
                        'name' => 'Industrial Chemicals Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 769,
                        'name' => 'Industrial Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 770,
                        'name' => 'Industrial Ecologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 771,
                        'name' => 'Industrial Engineering Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 772,
                        'name' => 'Industrial Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 773,
                        'name' => 'Industrial Machinery Mechanics',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 774,
                        'name' => 'Industrial Radiographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 775,
                        'name' => 'Industrial Safety and Health Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 776,
                        'name' => 'Industrial Traffic Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 777,
                        'name' => 'Industrial-Organizational Psychologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 778,
                        'name' => 'Informatics Nurse Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 779,
                        'name' => 'Information Assurance Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 780,
                        'name' => 'Information Brokers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 781,
                        'name' => 'Information Security Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 782,
                        'name' => 'Information Technology Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 783,
                        'name' => 'Information Technology Project Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 784,
                        'name' => 'Information Technology Security Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 785,
                        'name' => 'Instructional Coordinators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 786,
                        'name' => 'Instructional Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 787,
                        'name' => 'Instrumentation Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 788,
                        'name' => 'Insulators/Insulation Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 789,
                        'name' => 'Insurance Claims Representatives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 790,
                        'name' => 'Insurance Fraud Investigators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 791,
                        'name' => 'Insurance Policy Processing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 792,
                        'name' => 'Insurance Underwriters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 793,
                        'name' => 'Intellectual Property Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 794,
                        'name' => 'Intelligence Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 795,
                        'name' => 'Interior Designers and Decorators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 796,
                        'name' => 'Internet Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 797,
                        'name' => 'Internet Content Curators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 798,
                        'name' => 'Internet Developers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 799,
                        'name' => 'Internet Executives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 800,
                        'name' => 'Internet Marketing and Advertising Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 801,
                        'name' => 'Internet Quality Assurance Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 802,
                        'name' => 'Internet Security Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 803,
                        'name' => 'Internet Store Managers and Entrepreneurs',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 804,
                        'name' => 'Internet Transaction Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 805,
                        'name' => 'Interpreters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 806,
                        'name' => 'Investment Bankers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 807,
                        'name' => 'Investment Banking Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 808,
                        'name' => 'Investment Banking Associates',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 809,
                        'name' => 'Investment Banking Sales Brokers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 810,
                        'name' => 'Investment Banking Traders',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 811,
                        'name' => 'Investment Fund Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 812,
                        'name' => 'Investment Professionals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 813,
                        'name' => 'Investment Underwriters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 814,
                        'name' => 'Janitors and Cleaners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 815,
                        'name' => 'Jewelers and Jewelry Repairers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 816,
                        'name' => 'Job and Die Setters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 817,
                        'name' => 'Jockeys',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 818,
                        'name' => 'Journalism Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 819,
                        'name' => 'Kinesiologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 820,
                        'name' => 'Labor Union Business Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 821,
                        'name' => 'Laboratory Technicians and Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 822,
                        'name' => 'Laboratory Testing Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 823,
                        'name' => 'Land Acquisition Professionals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 824,
                        'name' => 'Land Trust or Preserve Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 825,
                        'name' => 'Landmen',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 826,
                        'name' => 'Landscape Architects',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 827,
                        'name' => 'Landscapers and Grounds Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 828,
                        'name' => 'Laser Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 829,
                        'name' => 'Lathers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 830,
                        'name' => 'Law Librarians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 831,
                        'name' => 'Lawn and Gardening Service Owners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 832,
                        'name' => 'Lawyers and Judges',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 833,
                        'name' => 'Layout Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 834,
                        'name' => 'Leather Tanning and Finishing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 835,
                        'name' => 'Legal Nurse Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 836,
                        'name' => 'Legal Secretaries',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 837,
                        'name' => 'Lexicographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 838,
                        'name' => 'Librarians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 839,
                        'name' => 'Library and Information Science Instructors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 840,
                        'name' => 'Library Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 841,
                        'name' => 'Library Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 842,
                        'name' => 'Library Media Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 843,
                        'name' => 'Library Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 844,
                        'name' => 'Licensed Practical Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 845,
                        'name' => 'Life Insurance Agents and Brokers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 846,
                        'name' => 'Lifeguards and Swimming Instructors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 847,
                        'name' => 'Lighting Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 848,
                        'name' => 'Line Installers and Cable Splicers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 849,
                        'name' => 'Linguists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 850,
                        'name' => 'Literary Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 851,
                        'name' => 'Loan Officers and Counselors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 852,
                        'name' => 'Loan Processors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 853,
                        'name' => 'Loan Underwriters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 854,
                        'name' => 'Lobbyists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 855,
                        'name' => 'Locksmiths',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 856,
                        'name' => 'Locomotive Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 857,
                        'name' => 'Logging Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 858,
                        'name' => 'Logistics Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 859,
                        'name' => 'Logistics Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 860,
                        'name' => 'Loss Prevention Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 861,
                        'name' => 'Magazine Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 862,
                        'name' => 'Magicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 863,
                        'name' => 'Mail Carriers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 864,
                        'name' => 'Makeup Artists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 865,
                        'name' => 'Management Analysts and Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 866,
                        'name' => 'Manufacturing Engineering Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 867,
                        'name' => 'Manufacturing Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 868,
                        'name' => 'Manufacturing Production Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 869,
                        'name' => 'Manufacturing Supervisors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 870,
                        'name' => 'Marble Setters, Tile Setters, and Terrazzo Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 871,
                        'name' => 'Marine Biologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 872,
                        'name' => 'Marine Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 873,
                        'name' => 'Marine Services Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 874,
                        'name' => 'Market Research Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 875,
                        'name' => 'Marketing Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 876,
                        'name' => 'Massage Therapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 877,
                        'name' => 'Materials Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 878,
                        'name' => 'Mathematicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 879,
                        'name' => 'Mathematics Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 880,
                        'name' => 'Meatcutters and Meat Packers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 881,
                        'name' => 'Mechanical Engineering Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 882,
                        'name' => 'Mechanical Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 883,
                        'name' => 'Mechatronics Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 884,
                        'name' => 'Media Planners and Buyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 885,
                        'name' => 'Media Relations Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 886,
                        'name' => 'Medical Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 887,
                        'name' => 'Medical Billing Service Owners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 888,
                        'name' => 'Medical Ethicists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 889,
                        'name' => 'Medical Illustrators and Photographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 890,
                        'name' => 'Medical Laboratory Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 891,
                        'name' => 'Medical Librarians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 892,
                        'name' => 'Medical Record Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 893,
                        'name' => 'Medical Scientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 894,
                        'name' => 'Medical Scribes',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 895,
                        'name' => 'Medical Secretaries',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 896,
                        'name' => 'Medical Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 897,
                        'name' => 'Medical Transcriptionists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 898,
                        'name' => 'Merchandise Displayers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 899,
                        'name' => 'Merchant Mariners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 900,
                        'name' => 'Mergers and Acquisitions Attorneys',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 901,
                        'name' => 'Metallurgical Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 902,
                        'name' => 'Metallurgical Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 903,
                        'name' => 'Meteorologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 904,
                        'name' => 'Meter Readers, Utilities',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 905,
                        'name' => 'Methane/Landfill Gas Collection System Operators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 906,
                        'name' => 'Methane/Landfill Gas Generation System Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 907,
                        'name' => 'Microbiologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 908,
                        'name' => 'Microelectronics Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 909,
                        'name' => 'Microfabrication Engineers and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 910,
                        'name' => 'Military Pilots',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 911,
                        'name' => 'Military Police',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 912,
                        'name' => 'Military Recruiters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 913,
                        'name' => 'Military Workers, Enlisted',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 914,
                        'name' => 'Military Workers, Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 915,
                        'name' => 'Millwrights',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 916,
                        'name' => 'Mining Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 917,
                        'name' => 'Mobile Software Developers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 918,
                        'name' => 'Models',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 919,
                        'name' => 'Molders',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 920,
                        'name' => 'Molecular and Cellular Biologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 921,
                        'name' => 'Mortgage Bankers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 922,
                        'name' => 'Mortuary Cosmetologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 923,
                        'name' => 'Motivational Speakers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 924,
                        'name' => 'Multimedia Artists and Animators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 925,
                        'name' => 'Multimedia Sound Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 926,
                        'name' => 'Museum Attendants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 927,
                        'name' => 'Museum Directors and Curators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 928,
                        'name' => 'Museum Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 929,
                        'name' => 'Music Agents and Scouts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 930,
                        'name' => 'Music Conductors and Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 931,
                        'name' => 'Music Journalists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 932,
                        'name' => 'Music Librarians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 933,
                        'name' => 'Music Producers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 934,
                        'name' => 'Music Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 935,
                        'name' => 'Music Therapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 936,
                        'name' => 'Music Venue Owners and Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 937,
                        'name' => 'Music Video Directors and Producers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 938,
                        'name' => 'Music Video Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 939,
                        'name' => 'Musical Instrument Repairers and Tuners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 940,
                        'name' => 'Musicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 941,
                        'name' => 'Muslim Religious Scholars',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 942,
                        'name' => 'Mutual Fund Accountants and Auditors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 943,
                        'name' => 'Mutual Fund Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 944,
                        'name' => 'Mutual Fund Compliance Professionals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 945,
                        'name' => 'Mutual Fund Customer Service Representatives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 946,
                        'name' => 'Mutual Fund Financial Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 947,
                        'name' => 'Mutual Fund Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 948,
                        'name' => 'Mutual Fund Marketing Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 949,
                        'name' => 'Mutual Fund Portfolio Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 950,
                        'name' => 'Mutual Fund Risk Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 951,
                        'name' => 'Mutual Fund Wholesalers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 952,
                        'name' => 'Myotherapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 953,
                        'name' => 'Nail Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 954,
                        'name' => 'Nannies',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 955,
                        'name' => 'Nanomaterials Scientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 956,
                        'name' => 'Nanosystems Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 957,
                        'name' => 'Nanotechnicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 958,
                        'name' => 'Nanotechnologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 959,
                        'name' => 'National Park Service Employees',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 960,
                        'name' => 'Naturalists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 961,
                        'name' => 'Naturopaths',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 962,
                        'name' => 'Neonatal Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 963,
                        'name' => 'Neurologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 964,
                        'name' => 'Neuropsychologists and Clinical Neuropsychologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 965,
                        'name' => 'News Anchors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 966,
                        'name' => 'Newspaper Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 967,
                        'name' => 'Non-Destructive Testing Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 968,
                        'name' => 'Nonprofit Social Service Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 969,
                        'name' => 'Nuclear Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 970,
                        'name' => 'Nuclear Medicine Physicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 971,
                        'name' => 'Nuclear Medicine Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 972,
                        'name' => 'Nuclear Reactor Operators and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 973,
                        'name' => 'Numerical Control Tool Programmers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 974,
                        'name' => 'Nurse Anesthetists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 975,
                        'name' => 'Nurse Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 976,
                        'name' => 'Nurse Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 977,
                        'name' => 'Nurse Practitioners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 978,
                        'name' => 'Nurse-Midwives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 979,
                        'name' => 'Nursery Owners and Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 980,
                        'name' => 'Nursing Home Administrators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 981,
                        'name' => 'Nursing Instructors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 982,
                        'name' => 'Obstetricians/Gynecologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 983,
                        'name' => 'Occupational Health Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 984,
                        'name' => 'Occupational Safety and Health Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 985,
                        'name' => 'Occupational Therapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 986,
                        'name' => 'Occupational Therapy Assistants and Aides',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 987,
                        'name' => 'Oceanographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 988,
                        'name' => 'Office Administrators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 989,
                        'name' => 'Oncological Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 990,
                        'name' => 'Oncologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 991,
                        'name' => 'Online Journalists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 992,
                        'name' => 'Online Producers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 993,
                        'name' => 'Online Reputation Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 994,
                        'name' => 'Operating Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 995,
                        'name' => 'Ophthalmic Laboratory Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 996,
                        'name' => 'Ophthalmic Medical Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 997,
                        'name' => 'Ophthalmologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 998,
                        'name' => 'Optical Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 999,
                        'name' => 'Optics Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1000,
                        'name' => 'Optometrists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1001,
                        'name' => 'Organic Farmers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1002,
                        'name' => 'Oriental Medicine Practitioners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1003,
                        'name' => 'Orientation and Mobility Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1004,
                        'name' => 'Orthodontists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1005,
                        'name' => 'Orthoptists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1006,
                        'name' => 'Orthotic and Prosthetic Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1007,
                        'name' => 'Orthotists and Prosthetists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1008,
                        'name' => 'Osteopathic Physicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1009,
                        'name' => 'Packaging Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1010,
                        'name' => 'Packaging Machinery Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1011,
                        'name' => 'Painters and Paperhangers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1012,
                        'name' => 'Paleontologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1013,
                        'name' => 'Paper Processing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1014,
                        'name' => 'Paralegals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1015,
                        'name' => 'Park Rangers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1016,
                        'name' => 'Parking Attendants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1017,
                        'name' => 'Parole Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1018,
                        'name' => 'Patent Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1019,
                        'name' => 'Pathologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1020,
                        'name' => 'Payroll Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1021,
                        'name' => 'Pediatric Dentists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1022,
                        'name' => 'Pediatricians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1023,
                        'name' => 'Pedorthists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1024,
                        'name' => 'Perfusionists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1025,
                        'name' => 'Periodontists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1026,
                        'name' => 'Personal Care Aides',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1027,
                        'name' => 'Personal Chefs',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1028,
                        'name' => 'Personal Shoppers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1029,
                        'name' => 'Personal Trainers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1030,
                        'name' => 'Personnel and Labor Relations Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1031,
                        'name' => 'Pest Control Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1032,
                        'name' => 'Pet Shop Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1033,
                        'name' => 'Pet Sitters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1034,
                        'name' => 'Petroleum Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1035,
                        'name' => 'Petroleum Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1036,
                        'name' => 'Pharmaceutical Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1037,
                        'name' => 'Pharmacists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1038,
                        'name' => 'Pharmacologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1039,
                        'name' => 'Pharmacy Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1040,
                        'name' => 'Phlebotomy Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1041,
                        'name' => 'Photo Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1042,
                        'name' => 'Photographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1043,
                        'name' => 'Photographic Equipment Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1044,
                        'name' => 'Photographic Laboratory Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1045,
                        'name' => 'Photography Instructors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1046,
                        'name' => 'Photojournalists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1047,
                        'name' => 'Physiatrists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1048,
                        'name' => 'Physical Education Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1049,
                        'name' => 'Physical Therapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1050,
                        'name' => 'Physical Therapy Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1051,
                        'name' => 'Physician Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1052,
                        'name' => 'Physicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1053,
                        'name' => 'Physicists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1054,
                        'name' => 'Pilots',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1055,
                        'name' => 'Pit Bosses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1056,
                        'name' => 'Plasterers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1057,
                        'name' => 'Plastics Engineers and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1058,
                        'name' => 'Plastics Products Manufacturing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1059,
                        'name' => 'Playwrights',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1060,
                        'name' => 'Plumbers and Pipefitters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1061,
                        'name' => 'Podcasters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1062,
                        'name' => 'Podiatrists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1063,
                        'name' => 'Police Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1064,
                        'name' => 'Policy Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1065,
                        'name' => 'Political Columnists and Writers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1066,
                        'name' => 'Political Reporters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1067,
                        'name' => 'Political Scientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1068,
                        'name' => 'Political Speechwriters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1069,
                        'name' => 'Polygraph Examiners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1070,
                        'name' => 'Pop/Rock Musicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1071,
                        'name' => 'Postal Clerks',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1072,
                        'name' => 'Power Plant Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1073,
                        'name' => 'Precision Machinists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1074,
                        'name' => 'Precision Metalworkers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1075,
                        'name' => 'Prepress Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1076,
                        'name' => 'Preschool Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1077,
                        'name' => 'Press Secretaries and Political Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1078,
                        'name' => 'Preventive Medicine Physicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1079,
                        'name' => 'Printing Press Operators and Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1080,
                        'name' => 'Private Bankers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1081,
                        'name' => 'Private Equity Accountants and Auditors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1082,
                        'name' => 'Private Equity Business Development Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1083,
                        'name' => 'Private Equity Chief Dealmakers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1084,
                        'name' => 'Private Equity Compliance Professionals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1085,
                        'name' => 'Private Equity Financial Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1086,
                        'name' => 'Private Equity Investor Relations Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1087,
                        'name' => 'Private Equity Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1088,
                        'name' => 'Private Equity Marketing Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1089,
                        'name' => 'Private Equity Research Analysts and Associates',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1090,
                        'name' => 'Private Equity Risk Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1091,
                        'name' => 'Private Investigators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1092,
                        'name' => 'Process Servers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1093,
                        'name' => 'Product Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1094,
                        'name' => 'Product Development Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1095,
                        'name' => 'Product Management Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1096,
                        'name' => 'Product Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1097,
                        'name' => 'Production Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1098,
                        'name' => 'Production Designers and Art Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1099,
                        'name' => 'Professional Athletes, Individual Sports',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1100,
                        'name' => 'Professional Athletes, Team Sports',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1101,
                        'name' => 'Professional Hackers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1102,
                        'name' => 'Professional Organizers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1103,
                        'name' => 'Property and Casualty Insurance Agents and Brokers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1104,
                        'name' => 'Property and Real Estate Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1105,
                        'name' => 'Proposal Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1106,
                        'name' => 'Prosthodontists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1107,
                        'name' => 'Protestant Ministers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1108,
                        'name' => 'Psychiatric Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1109,
                        'name' => 'Psychiatric Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1110,
                        'name' => 'Psychiatrists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1111,
                        'name' => 'Psychologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1112,
                        'name' => 'Public Interest Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1113,
                        'name' => 'Public Opinion Researchers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1114,
                        'name' => 'Public Relations Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1115,
                        'name' => 'Public Relations Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1116,
                        'name' => 'Public Transportation Operators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1117,
                        'name' => 'Publicists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1118,
                        'name' => 'Publicity Photographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1119,
                        'name' => 'Purchasing Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1120,
                        'name' => 'Purohits',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1121,
                        'name' => 'Quality Control Engineers and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1122,
                        'name' => 'Rabbis',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1123,
                        'name' => 'Radiation Protection Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1124,
                        'name' => 'Radio and Television Announcers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1125,
                        'name' => 'Radio and Television Program Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1126,
                        'name' => 'Radio Frequency Identification Device Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1127,
                        'name' => 'Radio Producers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1128,
                        'name' => 'Radiologic Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1129,
                        'name' => 'Radiologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1130,
                        'name' => 'Railroad Conductors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1131,
                        'name' => 'Range Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1132,
                        'name' => 'Real Estate Agents and Brokers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1133,
                        'name' => 'Real Estate Clerks',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1134,
                        'name' => 'Real Estate Developers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1135,
                        'name' => 'Real Estate Educators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1136,
                        'name' => 'Real Estate Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1137,
                        'name' => 'Real Estate Writers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1138,
                        'name' => 'Real-Time Captioners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1139,
                        'name' => 'Receptionists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1140,
                        'name' => 'Recreation Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1141,
                        'name' => 'Recreational Therapists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1142,
                        'name' => 'Recycling and Reclamation Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1143,
                        'name' => 'Recycling Coordinators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1144,
                        'name' => 'Reflexologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1145,
                        'name' => 'Refuse Collectors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1146,
                        'name' => 'Regional and Local Officials',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1147,
                        'name' => 'Registered Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1148,
                        'name' => 'Regulatory Affairs Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1149,
                        'name' => 'Regulatory Affairs Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1150,
                        'name' => 'Rehabilitation Counselors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1151,
                        'name' => 'Remote Sensing Scientists and Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1152,
                        'name' => 'Remote Sensing Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1153,
                        'name' => 'Renewable Energy Careers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1154,
                        'name' => 'Renewable Energy Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1155,
                        'name' => 'Reporters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1156,
                        'name' => 'Reservation and Ticket Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1157,
                        'name' => 'Resort Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1158,
                        'name' => 'Respiratory Therapists and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1159,
                        'name' => 'Restaurant and Food Service Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1160,
                        'name' => 'Retail Business Owners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1161,
                        'name' => 'Retail Loss Prevention Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1162,
                        'name' => 'Retail Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1163,
                        'name' => 'Retail Sales Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1164,
                        'name' => 'Retirement Planners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1165,
                        'name' => 'Risk Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1166,
                        'name' => 'Robotics Engineers and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1167,
                        'name' => 'Roman Catholic Priests',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1168,
                        'name' => 'Roofers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1169,
                        'name' => 'Roustabouts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1170,
                        'name' => 'Rubber Goods Production Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1171,
                        'name' => 'Sales Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1172,
                        'name' => 'Sales Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1173,
                        'name' => 'Sales Representatives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1174,
                        'name' => 'School Administrators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1175,
                        'name' => 'School Nurses',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1176,
                        'name' => 'Science and Medical Writers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1177,
                        'name' => 'Screenwriters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1178,
                        'name' => 'Search Engine Optimization Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1179,
                        'name' => 'Secondary School Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1180,
                        'name' => 'Secret Service Special Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1181,
                        'name' => 'Secretaries',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1182,
                        'name' => 'Security Consultants and Guards',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1183,
                        'name' => 'Security Systems Installers and Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1184,
                        'name' => 'Semiconductor Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1185,
                        'name' => 'Senior Care Pharmacists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1186,
                        'name' => 'Sheet Metal Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1187,
                        'name' => 'Ship s Captains',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1188,
                        'name' => 'Sign Language and Oral Interpreters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1189,
                        'name' => 'Signal Mechanics',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1190,
                        'name' => 'Silverware Artisans and Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1191,
                        'name' => 'Singers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1192,
                        'name' => 'Ski Resort Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1193,
                        'name' => 'Social Media Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1194,
                        'name' => 'Social Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1195,
                        'name' => 'Sociologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1196,
                        'name' => 'Software Application Developers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1197,
                        'name' => 'Software Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1198,
                        'name' => 'Software Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1199,
                        'name' => 'Software Quality Assurance Testers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1200,
                        'name' => 'Soil Conservationists and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1201,
                        'name' => 'Soil Scientists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1202,
                        'name' => 'Solar Energy Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1203,
                        'name' => 'Solar Energy Installation Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1204,
                        'name' => 'Solar Energy Sales Representatives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1205,
                        'name' => 'Solar Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1206,
                        'name' => 'Solar Thermal Installers and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1207,
                        'name' => 'Solutions Architects',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1208,
                        'name' => 'Songwriters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1209,
                        'name' => 'Spa Attendants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1210,
                        'name' => 'Spa Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1211,
                        'name' => 'Special and Visual Effects Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1212,
                        'name' => 'Special Education Teachers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1213,
                        'name' => 'Special Procedures Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1214,
                        'name' => 'Speech-Language Pathologists and Audiologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1215,
                        'name' => 'Speech-Language Pathology Assistants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1216,
                        'name' => 'Sporting Goods Production Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1217,
                        'name' => 'Sports Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1218,
                        'name' => 'Sports Broadcasters and Announcers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1219,
                        'name' => 'Sports Equipment Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1220,
                        'name' => 'Sports Executives',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1221,
                        'name' => 'Sports Facility Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1222,
                        'name' => 'Sports Instructors and Coaches',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1223,
                        'name' => 'Sports Photographers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1224,
                        'name' => 'Sports Physicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1225,
                        'name' => 'Sports Psychologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1226,
                        'name' => 'Sports Publicists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1227,
                        'name' => 'Sports Scouts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1228,
                        'name' => 'Sports Trainers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1229,
                        'name' => 'Sportswriters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1230,
                        'name' => 'Stadium Ushers and Vendors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1231,
                        'name' => 'Stage Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1232,
                        'name' => 'Stage Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1233,
                        'name' => 'Stage Production Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1234,
                        'name' => 'Stationary Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1235,
                        'name' => 'Statisticians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1236,
                        'name' => 'Steel Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1237,
                        'name' => 'Stevedores',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1238,
                        'name' => 'Stock Clerks',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1239,
                        'name' => 'Strategy Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1240,
                        'name' => 'Strength and Conditioning Coaches',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1241,
                        'name' => 'Stunt Performers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1242,
                        'name' => 'Supermarket Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1243,
                        'name' => 'Supply Chain Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1244,
                        'name' => 'Surgeons',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1245,
                        'name' => 'Surgical Technologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1246,
                        'name' => 'Surveying and Mapping Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1247,
                        'name' => 'Surveyors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1248,
                        'name' => 'Systems Setup Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1249,
                        'name' => 'Tailors and Dressmakers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1250,
                        'name' => 'Talent Agents and Scouts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1251,
                        'name' => 'Tax Accountants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1252,
                        'name' => 'Tax Attorneys',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1253,
                        'name' => 'Tax Preparers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1254,
                        'name' => 'Taxi Drivers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1255,
                        'name' => 'Teacher Aides',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1256,
                        'name' => 'Technical Support Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1257,
                        'name' => 'Technical Writers and Editors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1258,
                        'name' => 'Telecommunications Network Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1259,
                        'name' => 'Telemarketers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1260,
                        'name' => 'Telephone and PBX Installers and Repairers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1261,
                        'name' => 'Telephone Operators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1262,
                        'name' => 'Temporary Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1263,
                        'name' => 'Test Drivers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1264,
                        'name' => 'Textile Manufacturing Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1265,
                        'name' => 'Theater Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1266,
                        'name' => 'Tire Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1267,
                        'name' => 'Title Searchers and Examiners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1268,
                        'name' => 'Tobacco Products Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1269,
                        'name' => 'Tour Guides',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1270,
                        'name' => 'Toxicologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1271,
                        'name' => 'Toy and Game Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1272,
                        'name' => 'Toy Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1273,
                        'name' => 'Traffic Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1274,
                        'name' => 'Traffic Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1275,
                        'name' => 'Translators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1276,
                        'name' => 'Transplant Coordinators',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1277,
                        'name' => 'Transportation Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1278,
                        'name' => 'Transportation Planners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1279,
                        'name' => 'Travel Agents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1280,
                        'name' => 'Truck Dispatchers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1281,
                        'name' => 'Truck Drivers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1282,
                        'name' => 'Tutors and Trainers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1283,
                        'name' => 'Typists and Word Processors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1284,
                        'name' => 'Umpires and Referees',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1285,
                        'name' => 'Urban and Regional Planners',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1286,
                        'name' => 'Urologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1287,
                        'name' => 'User Experience Designers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1288,
                        'name' => 'Venture Capital Accountants and Auditors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1289,
                        'name' => 'Venture Capital Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1290,
                        'name' => 'Venture Capital Associates',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1291,
                        'name' => 'Venture Capital Chief Financial Officers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1292,
                        'name' => 'Venture Capital Investor Relations Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1293,
                        'name' => 'Venture Capital Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1294,
                        'name' => 'Venture Capital Marketing Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1295,
                        'name' => 'Venture Capital Principals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1296,
                        'name' => 'Venture Capital Risk Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1297,
                        'name' => 'Venture Capitalists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1298,
                        'name' => 'Veterinarians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1299,
                        'name' => 'Veterinary Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1300,
                        'name' => 'Video Game Art Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1301,
                        'name' => 'Video Game Producers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1302,
                        'name' => 'Video Game Testers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1303,
                        'name' => 'Wastewater Treatment Plant Operators and Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1304,
                        'name' => 'Watch and Clock Repairers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1305,
                        'name' => 'Water/Wastewater Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1306,
                        'name' => 'Wealth Management Accountants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1307,
                        'name' => 'Wealth Management Analysts',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1308,
                        'name' => 'Wealth Management Associates',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1309,
                        'name' => 'Wealth Management Compliance Professionals',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1310,
                        'name' => 'Wealth Management Investor Relations Specialists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1311,
                        'name' => 'Wealth Management Lawyers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1312,
                        'name' => 'Wealth Management Managing Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1313,
                        'name' => 'Wealth Management Risk Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1314,
                        'name' => 'Wealth Management Vice Presidents',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1315,
                        'name' => 'Webmasters',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1316,
                        'name' => 'Wedding and Party Consultants',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1317,
                        'name' => 'Welders and Welding Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1318,
                        'name' => 'Wind Energy Engineers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1319,
                        'name' => 'Wind Energy Industry Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1320,
                        'name' => 'Wind Energy Operations Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1321,
                        'name' => 'Wind Energy Project Managers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1322,
                        'name' => 'Wireless Service Technicians',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1323,
                        'name' => 'Wood Science and Technology Workers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1324,
                        'name' => 'Writers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1325,
                        'name' => 'Yoga and Pilates Instructors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1326,
                        'name' => 'Zoo and Aquarium Curators and Directors',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1327,
                        'name' => 'Zookeepers',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1328,
                        'name' => 'Zoologists',
                        'type_id' => 2,
                        'parent' => 257, 'created_at' => Carbon::now()]);
                        DB::table('categories')->insert(['id' => 1329,
                        'name' => 'Services',
                        'type_id' => 1,
                        'parent' => 0, 'created_at' => Carbon::now()]);
                        DB::table('categories')->insert(['id' => 1330,
                        'name' => 'Skills',
                        'type_id' => 2,
                        'parent' => 0, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1331,
                        'name' => 'Products',
                        'type_id' => 3,
                        'parent' => 0, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1332,
                        'name' => 'Womens',
                        'type_id' => 3,
                        'parent' => 1331, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1333,
                        'name' => 'Pcs, Cell phones, Notebooks, Games',
                        'type_id' => 3,
                        'parent' => 1331, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1334,
                        'name' => 'Automotives & tools',
                        'type_id' => 3,
                        'parent' => 1331, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1335,
                        'name' => 'Consumer Electronics',
                        'type_id' => 3,
                        'parent' => 1331, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1336,
                        'name' => 'Mens',
                        'type_id' => 3,
                        'parent' => 1331, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1337,
                        'name' => 'Home',
                        'type_id' => 3,
                        'parent' => 1331, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1338,
                        'name' => 'Kids',
                        'type_id' => 3,
                        'parent' => 1331, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1339,
                        'name' => 'Sports and Travels',
                        'type_id' => 3,
                        'parent' => 1331, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1340,
                        'name' => 'Office',
                        'type_id' => 3,
                        'parent' => 1331, 'created_at' => Carbon::now()]);
                                 DB::table('categories')->insert(['id' => 1341,
                         'name' => 'Accessories',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1342,
                         'name' => 'Bags',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1343,
                         'name' => 'Bath & Shower',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1344,
                         'name' => 'Beads & Jewelry Making',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1345,
                         'name' => 'Beauty Equipment',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1346,
                         'name' => 'Beauty Essentials',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1347,
                         'name' => 'Belts',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1348,
                         'name' => 'Blouses & Shirts',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1349,
                         'name' => 'Bodysuits',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1350,
                         'name' => 'Boots',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1351,
                         'name' => 'Bottoms',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1352,
                         'name' => 'Bracelet, Bangles & Watches',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1353,
                         'name' => 'Customized Jewelry',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1354,
                         'name' => 'DIY Wigs',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1355,
                         'name' => 'Dresses',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1356,
                         'name' => 'Earrings',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1357,
                         'name' => 'Fine Jewelry',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1358,
                         'name' => 'Flats',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1359,
                         'name' => 'Fragrances & Deodorants',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1360,
                         'name' => 'Glasses',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1361,
                         'name' => 'Gloves',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1362,
                         'name' => 'Hair Accessories',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1363,
                         'name' => 'Hair Braids',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1364,
                         'name' => 'Hair Care & Styling',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1365,
                         'name' => 'Hair Extensions',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1366,
                         'name' => 'Hair Pieces',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1367,
                         'name' => 'Hair Salon Tools & Accessories',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1368,
                         'name' => 'Hats',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1369,
                         'name' => 'Health & Personal Care',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1370,
                         'name' => 'Health Care',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1371,
                         'name' => 'Hoodies & Sweatshirts',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1372,
                         'name' => 'Household Supplies',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1373,
                         'name' => 'Human Hair Weaves',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1374,
                         'name' => 'Intimates',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1375,
                         'name' => 'Jackets & Coats',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1376,
                         'name' => 'Jeans',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1377,
                         'name' => 'Jewelry making',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1378,
                         'name' => 'Jumpsuits',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1379,
                         'name' => 'Lace Wigs',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1380,
                         'name' => 'Luxury Beauty',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1381,
                         'name' => 'Makeup',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1382,
                         'name' => 'Necklaces & Pendants',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1383,
                         'name' => 'panties',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1384,
                         'name' => 'Pants & Capris',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1385,
                         'name' => 'Pumps',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1386,
                         'name' => 'Rings',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1387,
                         'name' => 'Rompers',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1388,
                         'name' => 'Scarves',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1389,
                         'name' => 'Shoe Accessories',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1390,
                         'name' => 'Shoes',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1391,
                         'name' => 'Skirt',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1392,
                         'name' => 'Sleepwears',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1393,
                         'name' => 'Socks & Hosiery',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1394,
                         'name' => 'Suits & Sets',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1395,
                         'name' => 'Sweaters',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1396,
                         'name' => 'Swimsuit',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1397,
                         'name' => 'Tops & Tees',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1398,
                         'name' => 'Watches',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1399,
                         'name' => 'Wedding & Engagement Jewelry',
                         'type_id' => 3,
                         'parent' => 1332, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1400,
                         'name' => 'Cellphones',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1401,
                         'name' => 'Cellphones & Telecommunications',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1402,
                         'name' => 'Communication Equipments',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1403,
                         'name' => 'Computer & Office',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1404,
                         'name' => 'Computer & Tablet Accessories',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1405,
                         'name' => 'Computer Cables & Connectors',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1406,
                         'name' => 'Computer Components',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1407,
                         'name' => 'Computer Peripherals',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1408,
                         'name' => 'Desktops',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1410,
                         'name' => 'Device Cleaners',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1411,
                         'name' => 'Feature Phones',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1412,
                         'name' => 'Hard Drives, Storage & Memory',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1413,
                         'name' => 'Industrial Computer & Accessories',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1414,
                         'name' => 'iPhones',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1415,
                         'name' => 'Laptop Accessories',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1416,
                         'name' => 'Laptop Parts',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1417,
                         'name' => 'Laptops',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1419,
                         'name' => 'Mini PC',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1420,
                         'name' => 'Mobile Phone Accessories',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1421,
                         'name' => 'Mobile Phone Parts',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1422,
                         'name' => 'Monitors',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1423,
                         'name' => 'Mouse & Keyboards',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1424,
                         'name' => 'Networking',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1426,
                         'name' => 'PC Components',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1427,
                         'name' => 'PC Gaming',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1428,
                         'name' => 'Phone Bags & Cases',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1429,
                         'name' => 'Printers & Ink',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1430,
                         'name' => 'Refurbished Phones',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1431,
                         'name' => 'Servers',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1432,
                         'name' => 'Software',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1433,
                         'name' => 'Storage Devices',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1434,
                         'name' => 'Tablet Accessories',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1435,
                         'name' => 'Tablet Parts',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1436,
                         'name' => 'Tablets',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1438,
                         'name' => 'Telephones & Accessories',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1439,
                         'name' => 'All Computers',
                         'type_id' => 3,
                         'parent' => 1333, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1440,
                         'name' => 'Abrasive Tools',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1441,
                         'name' => 'Abrasives',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1442,
                         'name' => 'All Automotive',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1443,
                         'name' => 'All Industrial & Scientific',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1444,
                         'name' => 'ATV,RV,Boat & Other Vehicle',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1445,
                         'name' => 'Auto Replacement Parts',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1446,
                         'name' => 'Automobiles & Motorcycles',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1447,
                         'name' => 'Automotive & Industrial',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1448,
                         'name' => 'Automotive Tools',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1449,
                         'name' => 'Car Electronics',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1450,
                         'name' => 'Car Lights',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1451,
                         'name' => 'Car Repair Tools',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1452,
                         'name' => 'Car Wash & Maintenance',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1453,
                         'name' => 'Construction Tools',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1454,
                         'name' => 'Exterior Accessories',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1455,
                         'name' => 'Garden Tools',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1456,
                         'name' => 'Hand & Power Tool Accessories',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1457,
                         'name' => 'Hand Tools',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1458,
                         'name' => 'Health & Safety',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1459,
                         'name' => 'Interior Accessories',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1460,
                         'name' => 'Janitorial',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1461,
                         'name' => 'Lab & Scientific',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1462,
                         'name' => 'Lifting Tools & Accessories',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1463,
                         'name' => 'Machine Tools & Accessories',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1464,
                         'name' => 'Maintenance & Care',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1465,
                         'name' => 'Measurement & Analysis Instruments',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1466,
                         'name' => 'Motorcycle & ATV',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1467,
                         'name' => 'Motorcycle Accessories & Parts',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1468,
                         'name' => 'Power Tools',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1469,
                         'name' => 'Replacement Parts',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1470,
                         'name' => 'Riveter Guns',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1471,
                         'name' => 'RV Parts & Accessories',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1472,
                         'name' => 'Tires & Wheels',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1473,
                         'name' => 'Tool Organizers',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1474,
                         'name' => 'Tool Parts',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1475,
                         'name' => 'Tool Sets',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1476,
                         'name' => 'Travel & Roadway Product',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1477,
                         'name' => 'Welding & Soldering Supplies',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1478,
                         'name' => 'Welding Equipment',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1479,
                         'name' => 'Woodworking Machinery & Parts',
                         'type_id' => 3,
                         'parent' => 1334, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1480,
                         'name' => '360° Video Cameras & Accessories',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1481,
                         'name' => 'Access Control',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1482,
                         'name' => 'Accessories & Parts',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1483,
                         'name' => 'Active Components',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1484,
                         'name' => 'Building Automation',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1485,
                         'name' => 'Camera & Photo',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1486,
                         'name' => 'Consumer Electronics',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1487,
                         'name' => 'Door Intercom',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1488,
                         'name' => 'Earphones & Headphones',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1489,
                         'name' => 'EL Products',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1490,
                         'name' => 'Electronic Accessories & Supplies',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1491,
                         'name' => 'Electronic Cigarettes',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1492,
                         'name' => 'Electronic Components & Supplies',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1493,
                         'name' => 'Electronic Data Systems',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1494,
                         'name' => 'Electronic Signs',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1495,
                         'name' => 'Electronics Production Machinery',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1496,
                         'name' => 'Electronics Stocks',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1497,
                         'name' => 'Emergency Kits',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1498,
                         'name' => 'Fire Protection',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1499,
                         'name' => 'HIFI Devices',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1500,
                         'name' => 'Home Audio & Video',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1501,
                         'name' => 'Home Electronic Accessories',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1502,
                         'name' => 'IoT Devices',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1503,
                         'name' => 'Lightning Protection',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1504,
                         'name' => 'Live Equipment',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1505,
                         'name' => 'Optoelectronic Displays',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1506,
                         'name' => 'Other Electronic Components',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1507,
                         'name' => 'Passive Components',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1508,
                         'name' => 'Portable Audio & Video',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1509,
                         'name' => 'Power Source',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1510,
                         'name' => 'Public Broadcasting',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1511,
                         'name' => 'Roadway Safety',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1512,
                         'name' => 'Robot',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1513,
                         'name' => 'Safes',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1514,
                         'name' => 'Security & Protection',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1515,
                         'name' => 'Security Alarm',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1516,
                         'name' => 'Security Inspection Device',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1517,
                         'name' => 'Self Defense Supplies',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1518,
                         'name' => 'Smart Card System',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1519,
                         'name' => 'Smart Electronics',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1520,
                         'name' => 'Speakers',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1521,
                         'name' => 'Sports & Action Video Cameras',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1522,
                         'name' => 'Transmission & Cables',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1523,
                         'name' => 'Video Games',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1524,
                         'name' => 'Video Surveillance',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1525,
                         'name' => 'VR/AR Devices',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1526,
                         'name' => 'Wearable Devices',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1527,
                         'name' => 'Workplace Safety Supplies',
                         'type_id' => 3,
                         'parent' => 1335, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1528,
                         'name' => 'Accessories',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1529,
                         'name' => 'Bags',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1530,
                         'name' => 'Belts',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1531,
                         'name' => 'Board Shorts',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1532,
                         'name' => 'Boots',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1533,
                         'name' => 'Casual Shoes',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1534,
                         'name' => 'Casual Shorts',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1535,
                         'name' => 'Clothing',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1536,
                         'name' => 'Garment Fabrics & Accessories',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1537,
                         'name' => 'Glasses',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1538,
                         'name' => 'Gloves',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1539,
                         'name' => 'Grooming',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1540,
                         'name' => 'Hats',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1541,
                         'name' => 'Hoodies & Sweatshirts',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1542,
                         'name' => 'Jackets & Coats',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1543,
                         'name' => 'Jeans',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1544,
                         'name' => 'Nails Art & Tools',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1545,
                         'name' => 'Oral Hygiene',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1546,
                         'name' => 'Pants',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1547,
                         'name' => 'Salon Hair Supply Chain',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1548,
                         'name' => 'Sanitary Paper',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1549,
                         'name' => 'Scarves',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1550,
                         'name' => 'Sets',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1551,
                         'name' => 'Shaving & Hair Removal',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1552,
                         'name' => 'Shirts',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1553,
                         'name' => 'Shoe Accessories',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1554,
                         'name' => 'Shoes',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1555,
                         'name' => 'Skin Care',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1556,
                         'name' => 'Skin Care Tools',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1557,
                         'name' => 'Sleep & Lounge',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1558,
                         'name' => 'Socks',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1559,
                         'name' => 'Suits & Blazers',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1560,
                         'name' => 'Sweaters',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1561,
                         'name' => 'Synthetic Extensions',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1562,
                         'name' => 'Synthetic Wigs',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1563,
                         'name' => 'Tattoo & Body Art',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1564,
                         'name' => 'Ties & Handkerchiefs',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1565,
                         'name' => 'Tools & Accessories',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1566,
                         'name' => 'Tops & Tees',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1567,
                         'name' => 'Underwear',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1568,
                         'name' => 'Watches',
                         'type_id' => 3,
                         'parent' => 1336, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1569,
                         'name' => 'All Home',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1570,
                         'name' => 'All Kitchen',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1571,
                         'name' => 'All Patio & Garden',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1572,
                         'name' => 'All Pets',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1573,
                         'name' => 'All Tools & Home Improvement',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1574,
                         'name' => 'Arts, Crafts & Sewing',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1575,
                         'name' => 'Arts,Crafts & Sewing',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1576,
                         'name' => 'Bar Furniture',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1577,
                         'name' => 'Bathroom Fixtures',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1578,
                         'name' => 'Bathroom Products',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1579,
                         'name' => 'Bedding',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1580,
                         'name' => 'Book Lights',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1581,
                         'name' => 'Building Supplies',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1582,
                         'name' => 'Café Furniture',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1583,
                         'name' => 'Cats',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1584,
                         'name' => 'Ceiling Lights & Fans',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1585,
                         'name' => 'Children Furniture',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1586,
                         'name' => 'Commercial Appliances',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1587,
                         'name' => 'Commercial Furniture',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1588,
                         'name' => 'Commercial Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1589,
                         'name' => 'Discover Your Style',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1590,
                         'name' => 'Dogs',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1591,
                         'name' => 'Electrical',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1592,
                         'name' => 'Electrical Equipments & Supplies',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1593,
                         'name' => 'Explore Showroom',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1594,
                         'name' => 'Family Intelligence System',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1595,
                         'name' => 'Festive & Party Supplies',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1596,
                         'name' => 'Furniture',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1597,
                         'name' => 'Furniture',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1598,
                         'name' => 'Furniture Accessories',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1599,
                         'name' => 'Furniture Parts',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1600,
                         'name' => 'Garden Supplies',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1601,
                         'name' => 'Hand Tools',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1602,
                         'name' => 'Hardware',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1603,
                         'name' => 'Hardware',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1604,
                         'name' => 'Holiday Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1605,
                         'name' => 'Home & Garden',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1606,
                         'name' => 'Home Appliance Parts',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1607,
                         'name' => 'Home Appliances',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1608,
                         'name' => 'Home Appliances',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1609,
                         'name' => 'Home Decor',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1610,
                         'name' => 'Home Décor',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1611,
                         'name' => 'Home Furniture',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1612,
                         'name' => 'Home Improvement',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1613,
                         'name' => 'Home Improvement',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1614,
                         'name' => 'Home Storage & Organization',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1615,
                         'name' => 'Home Textile',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1616,
                         'name' => 'Household Appliances',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1617,
                         'name' => 'Household Cleaning',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1618,
                         'name' => 'Household Merchandises',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1619,
                         'name' => 'Household Supplies',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1620,
                         'name' => 'Kitchen & Bath Fixtures',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1621,
                         'name' => 'Kitchen Appliances',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1622,
                         'name' => 'Kitchen Fixtures',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1623,
                         'name' => 'Kitchen,Dining & Bar',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1624,
                         'name' => 'Lamps & Shades',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1625,
                         'name' => 'LED Lamps',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1626,
                         'name' => 'LED Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1627,
                         'name' => 'Light Bulbs',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1628,
                         'name' => 'Lighting Accessories',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1629,
                         'name' => 'Lights & Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1630,
                         'name' => 'Lights & Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1631,
                         'name' => 'Major Appliances',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1632,
                         'name' => 'Night Lights',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1633,
                         'name' => 'Novelty Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1634,
                         'name' => 'Office Furniture',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1635,
                         'name' => 'Outdoor Furniture',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1636,
                         'name' => 'Outdoor Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1637,
                         'name' => 'Painting Supplies & Wall Treatments',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1638,
                         'name' => 'Personal Care Appliances',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1639,
                         'name' => 'Pet Products',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1640,
                         'name' => 'Pet Profile',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1641,
                         'name' => 'Plumbing',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1642,
                         'name' => 'Portable Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1643,
                         'name' => 'Power Tools & Accessories',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1644,
                         'name' => 'Professional Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1645,
                         'name' => 'Smart Home',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1646,
                         'name' => 'Special Engineering Lighting',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1647,
                         'name' => 'Storage & Organization',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1648,
                         'name' => 'Under Cabinet Lights',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1649,
                         'name' => 'Vanity Lights',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1650,
                         'name' => 'Wedding Registry',
                         'type_id' => 3,
                         'parent' => 1337, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1651,
                         'name' => 'Accessories',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1652,
                         'name' => 'Action & Toy Figures',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1653,
                         'name' => 'Action Figures',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1654,
                         'name' => 'Activity & Gear',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1655,
                         'name' => 'All Baby',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1656,
                         'name' => 'All Toys & Games',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1657,
                         'name' => 'Arts & Crafts',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1658,
                         'name' => 'Arts & Crafts, DIY toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1659,
                         'name' => 'Baby & Toddler Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1660,
                         'name' => 'Baby & Toddler Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1661,
                         'name' => 'Baby Bedding',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1662,
                         'name' => 'Baby Care',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1663,
                         'name' => 'Baby Care',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1664,
                         'name' => 'Baby Food',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1665,
                         'name' => 'Baby Furniture',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1666,
                         'name' => 'Baby Registry',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1667,
                         'name' => 'Baby Shoes',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1668,
                         'name' => 'Baby Souvenirs',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1669,
                         'name' => 'Baby Stroller',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1670,
                         'name' => 'Boy s Accessories',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1671,
                         'name' => 'Boys Baby Clothing',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1672,
                         'name' => 'Boys Clothing',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1673,
                         'name' => 'Building & Construction Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1674,
                         'name' => 'Building Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1675,
                         'name' => 'Car Seats',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1676,
                         'name' => 'Car Seats & Accessories',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1677,
                         'name' => 'Children s Shoes',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1678,
                         'name' => 'Classic Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1679,
                         'name' => 'Diecasts & Toy Vehicles',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1680,
                         'name' => 'Dolls & Stuffed Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1681,
                         'name' => 'Electronic Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1682,
                         'name' => 'Feeding',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1683,
                         'name' => 'Games',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1684,
                         'name' => 'Girl s Accessories',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1685,
                         'name' => 'Girls Baby Clothing',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1686,
                         'name' => 'Girls Clothing',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1687,
                         'name' => 'High Tech Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1688,
                         'name' => 'Hobby',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1689,
                         'name' => 'Hobby & Collectibles',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1690,
                         'name' => 'Kids Party',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1691,
                         'name' => 'Learning & Education',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1692,
                         'name' => 'Matching Family Outfits',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1693,
                         'name' => 'Model Building',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1694,
                         'name' => 'Nappy Changing',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1695,
                         'name' => 'Novelty & Gag Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1696,
                         'name' => 'Nursery',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1697,
                         'name' => 'Outdoor Fun & Sports',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1698,
                         'name' => 'Outdoor Play',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1699,
                         'name' => 'Pools & Water Fun',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1700,
                         'name' => 'Popular Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1701,
                         'name' => 'Pregnancy & Maternity',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1702,
                         'name' => 'Pretend Play',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1703,
                         'name' => 'Puzzles & Games',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1704,
                         'name' => 'Remote Control Toys',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1705,
                         'name' => 'Safety Equipment',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1706,
                         'name' => 'Shoes',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1707,
                         'name' => 'Stress Relief Toy',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1708,
                         'name' => 'Strollers',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1709,
                         'name' => 'Stuffed Animals & Plush',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1710,
                         'name' => 'Toilet Training',
                         'type_id' => 3,
                         'parent' => 1338, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1711,
                         'name' => 'Toys & Hobbies',
                         'type_id' => 3,
                         'parent' => 1338]               
);
         DB::table('categories')->insert(['id' => 1712,
                         'name' => 'Action Sports',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1713,
                         'name' => 'All Sports & Outdoors',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1714,
                         'name' => 'All Sports & Outdoors',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1715,
                         'name' => 'Backpacks',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1716,
                         'name' => 'Bag Parts & Accessories',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1717,
                         'name' => 'Boating & Water Sports',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1718,
                         'name' => 'Bowling',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1719,
                         'name' => 'Camping & Hiking',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1720,
                         'name' => 'Camping & Hiking',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1721,
                         'name' => 'Coin Purses & Holders',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1722,
                         'name' => 'Cycling',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1723,
                         'name' => 'Cycling',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1724,
                         'name' => 'Entertainment',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1725,
                         'name' => 'Exercise & Fitness',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1726,
                         'name' => 'Fan Shop',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1727,
                         'name' => 'Fishing',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1728,
                         'name' => 'Fitness & Body Building',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1729,
                         'name' => 'Functional Bags',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1730,
                         'name' => 'Golf',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1731,
                         'name' => 'Golf',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1732,
                         'name' => 'Horse Racing',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1733,
                         'name' => 'Hunting',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1734,
                         'name' => 'Hunting & Fishing',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1735,
                         'name' => 'Kids & Baby s Bags',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1736,
                         'name' => 'Leisure Sports & Game Room',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1737,
                         'name' => 'Luggage & Travel Bags',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1738,
                         'name' => 'Musical Instruments',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1739,
                         'name' => 'Other Sports & Entertainment',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1740,
                         'name' => 'Outdoor Gear',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1741,
                         'name' => 'Racquet Sports',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1742,
                         'name' => 'Roller Skates, Skateboards & Scooters',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1743,
                         'name' => 'Running',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1744,
                         'name' => 'Shooting',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1745,
                         'name' => 'Skiing & Snowboarding',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1746,
                         'name' => 'Sneakers',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1747,
                         'name' => 'Sports & Entertainment',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1748,
                         'name' => 'Sports & Outdoors',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1749,
                         'name' => 'Sports Accessories',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1750,
                         'name' => 'Sports Apparel',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1751,
                         'name' => 'Sports Bags',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1752,
                         'name' => 'Sports Clothing',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1753,
                         'name' => 'Swimming',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1754,
                         'name' => 'Team Sports',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1755,
                         'name' => 'Team Sports',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1756,
                         'name' => 'Wallets',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1757,
                         'name' => 'Water Sports',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1758,
                         'name' => 'Winter Sports',
                         'type_id' => 3,
                         'parent' => 1339, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1759,
                         'name' => 'Office & School Supplies',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1760,
                         'name' => 'All Books',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1761,
                         'name' => 'Art Supplies',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1762,
                         'name' => 'Books & Magazines',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1763,
                         'name' => 'Business Store',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1764,
                         'name' => 'Calendars, Planners & Cards',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1765,
                         'name' => 'Cameras',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1766,
                         'name' => 'Childrens Books',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1767,
                         'name' => 'Cutting Supplies',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1768,
                         'name' => 'Demo Board & Accessories',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1769,
                         'name' => 'Desk Accessories & Organizer',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1770,
                         'name' => 'Door Locks',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1771,
                         'name' => 'Education & Office Supplies',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1772,
                         'name' => 'Filing Products',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1773,
                         'name' => 'Kitchen',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1774,
                         'name' => 'Labels, Indexes & Stamps',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1775,
                         'name' => 'Lighting',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1776,
                         'name' => 'Mail & Shipping Supplies',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1777,
                         'name' => 'Network and Wifi',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1778,
                         'name' => 'Notebooks & Writing Pads',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1779,
                         'name' => 'Office Binding Supplies',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1780,
                         'name' => 'Office Electronics',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1781,
                         'name' => 'Office Software',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1782,
                         'name' => 'Paper',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1783,
                         'name' => 'Plugs',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1784,
                         'name' => 'Presentation Supplies',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1785,
                         'name' => 'Printers and PC',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1786,
                         'name' => 'School & Educational Supplies',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1787,
                         'name' => 'Security Systems',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1788,
                         'name' => 'Speakers',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1789,
                         'name' => 'Stationery Sticker',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1790,
                         'name' => 'Tapes, Adhesives & Fasteners',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1791,
                         'name' => 'Televisions',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1792,
                         'name' => 'Textbooks',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1793,
                         'name' => 'Thermostats',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1794,
                         'name' => 'Vacuums',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);
         DB::table('categories')->insert(['id' => 1795,
                         'name' => 'Writing & Correction Supplies',
                         'type_id' => 3,
                         'parent' => 1340, 'created_at' => Carbon::now()]);


    }
}
