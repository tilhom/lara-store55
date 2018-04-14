<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*1 */       Product::create([
	            'name' => 'Floral Dress1',
	            'slug' => 'floral-dress1',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-5.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*2*/        Product::create([
	            'name' => 'Floral Dress2',
	            'slug' => 'floral-dress2',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-6.jpg',
	            'price' => 30000,
	            'newprice' => 19900,
	            'sale' => 1,
	            'new' => 0,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/* 3*/       Product::create([
	            'name' => 'Floral Dress3',
	            'slug' => 'floral-dress3',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-7.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*4*/       Product::create([
	            'name' => 'Floral Dress4',
	            'slug' => 'floral-dress4',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-8.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 0,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
 /*5*/       Product::create([
	            'name' => 'Floral Dress5',
	            'slug' => 'floral-dress5',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-9.jpg',
	            'price' => 30000,
	            'newprice' => 19900,
	            'sale' => 1,
	            'new' => 0,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*6*/        Product::create([
	            'name' => 'Floral Dress6',
	            'slug' => 'floral-dress6',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-10.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
 /*7*/       Product::create([
	            'name' => 'Floral Dress7',
	            'slug' => 'floral-dress7',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-11.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 0,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
 /*8*/       Product::create([
	            'name' => 'Floral Dress8',
	            'slug' => 'floral-dress8',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-12.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*9*/        Product::create([
	            'name' => 'Floral Dress9',
	            'slug' => 'floral-dress9',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-13.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*10*/        Product::create([
	            'name' => 'Floral Dress10',
	            'slug' => 'floral-dress10',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-14.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*11*/        Product::create([
	            'name' => 'Floral Dress11',
	            'slug' => 'floral-dress11',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-15.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*12*/        Product::create([
	            'name' => 'Floral Dress12',
	            'slug' => 'floral-dress12',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'image' => 'images/item-16.jpg',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
    }
}
