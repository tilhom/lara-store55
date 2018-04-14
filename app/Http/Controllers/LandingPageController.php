<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class LandingPageController extends Controller
{
    public function index()
    {
 	  	$newproducts = Product::where('new',1)->inRandomOrder()->take(4)->get();
 	  	$ourproducts = Product::inRandomOrder()->take(8)->get();

        return view('landing-page.index')->
        		with('ourproducts', $ourproducts)->
        		with('newproducts', $newproducts);
    }
}
