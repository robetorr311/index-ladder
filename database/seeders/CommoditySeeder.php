<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CommoditySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('commodities_images')->insert(['id' => 1,'image_url' => 'http://127.0.0.1:8000/uploads/products/commodities1.jpg', 'name' => 'commodities1.jpg','product_id' => 1,'user_id' =>  2, 'created_at' => Carbon::now()]);      
       DB::table('commodities_images')->insert(['id' => 2,'image_url' => 'http://127.0.0.1:8000/uploads/products/commodities2.jpg', 'name' => 'commodities2.jpg','product_id' => 2,'user_id' =>  2, 'created_at' => Carbon::now()]);      
       DB::table('commodities_images')->insert(['id' => 3,'image_url' => 'http://127.0.0.1:8000/uploads/products/commodities3.jpg', 'name' => 'commodities3.jpg','product_id' => 3,'user_id' =>  2, 'created_at' => Carbon::now()]);      
       DB::table('commodities_images')->insert(['id' => 4,'image_url' => 'http://127.0.0.1:8000/uploads/products/commodities4.jpg', 'name' => 'commodities4.jpg','product_id' => 4,'user_id' =>  2, 'created_at' => Carbon::now()]);      
       DB::table('commodities_images')->insert(['id' => 5,'image_url' => 'http://127.0.0.1:8000/uploads/products/commodities5.jpg', 'name' => 'commodities5.jpg','product_id' => 5,'user_id' =>  2, 'created_at' => Carbon::now()]);
       DB::table('commodities_images')->insert(['id' => 6,'image_url' => 'http://127.0.0.1:8000/uploads/products/commodities6.jpg', 'name' => 'commodities6.jpg','product_id' => 6,'user_id' =>  2, 'created_at' => Carbon::now()]);      
       DB::table('commodities_images')->insert(['id' => 7,'image_url' => 'http://127.0.0.1:8000/uploads/products/commodities7.jpg', 'name' => 'commodities8.jpg','product_id' => 7,'user_id' =>  2, 'created_at' => Carbon::now()]);      
       DB::table('commodities_images')->insert(['id' => 8,'image_url' => 'http://127.0.0.1:8000/uploads/products/commodities8.jpg', 'name' => 'commodities8.jpg','product_id' => 8,'user_id' =>  2, 'created_at' => Carbon::now()]);      
       DB::table('commodities_images')->insert(['id' => 9,'image_url' => 'http://127.0.0.1:8000/uploads/products/services1.jpg', 'name' => 'services1.jpg','product_id' => 9,'user_id' =>  2, 'created_at' => Carbon::now()]);      
       DB::table('commodities_images')->insert(['id' => 10,'image_url' => 'http://127.0.0.1:8000/uploads/products/services2.jpg', 'name' => 'services2.jpg','product_id' => 10,'user_id' =>  2, 'created_at' => Carbon::now()]);
       DB::table('commodities_images')->insert(['id' => 11,'image_url' => 'http://127.0.0.1:8000/uploads/products/services3.jpg', 'name' => 'services3.jpg','product_id' => 11,'user_id' =>  2, 'created_at' => Carbon::now()]);    
       DB::table('commodities_images')->insert(['id' => 12,'image_url' => 'http://127.0.0.1:8000/uploads/products/services4.jpg', 'name' => 'services4.jpg','product_id' => 12,'user_id' =>  2, 'created_at' => Carbon::now()]);    
       DB::table('commodities_images')->insert(['id' => 13,'image_url' => 'http://127.0.0.1:8000/uploads/products/services5.jpg', 'name' => 'services5.jpg','product_id' => 13,'user_id' =>  2, 'created_at' => Carbon::now()]);
       DB::table('commodities_images')->insert(['id' => 14,'image_url' => 'http://127.0.0.1:8000/uploads/products/services6.jpg', 'name' => 'services6.jpg','product_id' => 14,'user_id' =>  2, 'created_at' => Carbon::now()]);    
       DB::table('commodities_images')->insert(['id' => 15,'image_url' => 'http://127.0.0.1:8000/uploads/products/services7.jpg', 'name' => 'services7.jpg','product_id' => 15,'user_id' =>  2, 'created_at' => Carbon::now()]);  
       DB::table('commodities_images')->insert(['id' => 16,'image_url' => 'http://127.0.0.1:8000/uploads/products/services8.jpg', 'name' => 'services8.jpg','product_id' => 16,'user_id' =>  2, 'created_at' => Carbon::now()]);      
       DB::table('commodities')->insert(['id' => 1,'name' => 'Womens Size 10 Runners Shoes', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 1,'type_id' => 3, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 2,'name' => 'Treadmill', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 2,'type_id' => 3, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 3,'name' => 'Books for sale', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 3,'type_id' => 3, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 4,'name' => 'Furniture Three Seater Sofa', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 4,'type_id' => 3, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 5,'name' => 'Mens Jeans size 36"', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 5,'type_id' => 3, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 6,'name' => 'Rider Leather Watch', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 6,'type_id' => 3,  'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 7,'name' => 'Books for sale', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 7,'type_id' => 3, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 8,'name' => '2015 Tesla Model S', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 8,'type_id' => 3, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 9,'name' => 'PC Tech Support', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 9,'type_id' => 1, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 10,'name' => 'Painter', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 10,'type_id' => 1, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 11,'name' => 'Auto Mechanic', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 11,'type_id' => 1, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 12,'name' => 'Welder', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 12,'type_id' => 1, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 13,'name' => 'Realtor - Business Advisor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 13,'type_id' => 1, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 14,'name' => 'Couching Classes', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 14,'type_id' => 1,  'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 15,'name' => 'Writer', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 15,'type_id' => 1, 'created_at' => Carbon::now()]);
       DB::table('commodities')->insert(['id' => 16,'name' => 'Service Contractor', 'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!','image_id' => 16,'type_id' => 1, 'created_at' => Carbon::now()]);
    }
}
