# Lara store 5.5
course on creating an online store

1. Laravel tizimini o'rnatish lara-store
2. Magazin shablonlarini o'rnatish html-template
3. Barcha html andoza fayllariga view -lar tayorlash
	about.html => about.blade.php
	add-to-wishlist.html => add-to-wishlist.blade.php
	blog.html => blog.blade.php
	cart.html => cart.blade.php
	checkout.html => checkout.blade.php
	contact.html => contact.blade.php
	index.html => index.blade.php
	order-complete.html => order.blade.php
	product-detail.html => product.blade.php
	shop.html => shop.blade.php 

	3.2. Buyruqlar satrida:
		touch about.blade.php add-to-wishlist.blade.php blog.blade.php cart.blade.php checkout.blade.php contact.blade.php index.blade.php order.blade.php product.blade.php shop.blade.php 

	3.3. index.html -ni index.blade.php -ga ko'chirish

	3.4. Yonalish qo'shish: Route::view('/', 'index');

	3.5. html asset -larni public papkaga ko'chirish (css,fonts,images,js,sass)

	3.6. index.blade.php ichini to'g'rilash

	3.7. partials papka va layout.blade.php faylini hosil qilish

	3.8. patials -da nav.blade.php va footer.blade.php larni hosil qilish

	3.9. qolgan view va ularni yo'nalishlarini tashkil qilish:
		about.blade.php, add-to-wishlist.blade.php, blog.blade.php, cart.blade.php, checkout.blade.php, contact.blade.php, order.blade.php, product.blade.php, shop.blade.php 
		Route::view('/', 'index');
		Route::view('/about', 'about');
		Route::view('/add-to-wishlist', 'add-to-wishlist');
		Route::view('/blog', 'blog');
		Route::view('/cart', 'cart');
		Route::view('/checkout', 'checkout');
		Route::view('/contact', 'contact');
		Route::view('/order', 'order');
		Route::view('/product-detail', 'product-detail');
		Route::view('/shop', 'shop');

4. Product modelini hosil qilish: 

	php artisan make:model Product -m

	4.2. migratsiyasini to'g'rilash:

			public function up()
		    {
		        Schema::create('products', function (Blueprint $table) {
		            $table->increments('id');
		            $table->string('name')->unique();
		            $table->string('slug')->unique();
		            $table->string('details')->nullable();
		            $table->string('image')->nullable();
					$table->integer('price');
		            $table->integer('oldprice');
		            $table->boolean('sale')->default(false);
		            $table->boolean('new')->default(false);
		            $table->text('description');
		            $table->timestamps();
		        });
		    }

	4.3. mysql da baza ochish va uni .env fayliga yozish

	4.4. php artizan migrate

5. php artisan make:seeder ProductsTableSeeder
	
	5.2. ProductsTableSeeder.php 12-ta yozuv ma'lumot bilan to'ldiring,
	misol uchun:

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

	5.3. DatabaseSeeder.php ga ProductsTableSeeder yozvoring..
		$this->call(ProductsTableSeeder::class);

	5.4. php artisan db:seed
6. AppServiceProvider -ni  to'g'rilavolish (mariadb -da ham ishlash uchun)
	
	use Illuminate\Support\Facades\Schema;
	...
    public function boot()
    {
          Schema::defaultStringLength(191);
    }

7. yangi route yaratish:

Route::get('/', 'LandingPageController@index')->name('landing-page');

8. php artisan make:controller LandingPageController
	
		public function index()
		    {
		    	$newproducts = Product::where('new',1)->inRandomOrder()->take(4)->get();
 	  			$ourproducts = Product::inRandomOrder()->take(8)->get();

        		return view('landing-page.index')->
        			with('ourproducts', $ourproducts)->
        			with('newproducts', $newproducts);
		    }

9. landing-page view -larni

	landing-page.index
	landing-page.partials.new-products
	landing-page.patials.our-products	

10. shop controllerini yasash
	php artisan make:controller ShopController -r  	    



