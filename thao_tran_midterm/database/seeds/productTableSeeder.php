<?php

use Illuminate\Database\Seeder;

class productTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
        	['cate_id'=>'1','name' => 'Quần short kaki', 'code'=>'TC1025011BA','image'=>'image1.jpg',  'price'=>'398000' ,'oldprice'=>'400000' ],
        	['cate_id'=>'1','name' => 'Quần baggy đen','code'=>'TC1025221BA','image'=>'image2.jpg',  'price'=>'508000' ,'oldprice'=>'460000'],
        	['cate_id'=>'1','name' => 'Quần kaki nam đen','code'=>'TC1077221BA','image'=>'image3.jpg',  'price'=>'750000' ,'oldprice'=>'460000'],
        	['cate_id'=>'2','name' => 'Áo thun','code'=>'TC1025511BA','image'=>'image4.jpg',  'price'=>'898000' ,'oldprice'=>'530000'],
        	['cate_id'=>'2','name' => 'Áo khoác','code'=>'TC1026611BA','image'=>'image5.jpg',  'price'=>'550000' ,'oldprice'=>'500000'],
        	['cate_id'=>'2','name' => 'Áo t-shirt','code'=>'TC1446611BA','image'=>'image6.jpg',  'price'=>'608000' ,'oldprice'=>'500000'],

        ]);
    }
}
