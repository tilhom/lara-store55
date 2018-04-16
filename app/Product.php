<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	public function presentPrice()
    {
    	// return money_format('$%i', $this->price/100);
    	// setlocale(LC_MONETARY, 'ru_RU');
    	setlocale(LC_ALL, 'nl_NL');
    	return number_format($this->price/100,2,',',' ');
    }
    public static function presentPriceOne($id)
    {
        // return money_format('$%i', $this->price/100);
        // setlocale(LC_MONETARY, 'ru_RU');
        setlocale(LC_ALL, 'nl_NL');
        // return number_format(Product::where('id', $id)->firstOrFail()->price/100,2,',',' ');
        return number_format($id/100,2,',',' ');
    }
    // public static function totalPrice($id,$q)
    // {
    //     // return number_format(Product::where('id', $id)->firstOrFail()->price/100,2,',',' ');
    //     return Product::presentPriceOne($id);
    // }
    public static function image($id)
    {       
        return Product::where('id', $id)->firstOrFail()->image;
    }
    public function presentNewPrice()
    {
        // return money_format('$%i', $this->price/100);
        // setlocale(LC_MONETARY, 'ru_RU');
        setlocale(LC_ALL, 'nl_NL');
        return number_format($this->newprice/100,2,',',' ');
    }
    public function scopeMightAlsolike($query)
    {
    	return $query->inRandomOrder()->take(4);
    }
}
