<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Category;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{

    public function home(){
       $testimonials = Testimonial::where('is_active', 1)->latest()->limit(4)->select(['id', 'client_name',
       'client_designation', 'client_message', 'client_image'])->get();

       $categories = Category::where('is_active', 1)->latest()->limit(12)->select(['id', 'title', 'category_image',
       'slug'])->get();
       
       $products = Product::where('is_active', 1)->latest()->limit(8)->select(['id', 'name', 'short_description',
       'product_price', 'product_image','product_rating'])->get();

        return view('frontend.pages.home',compact('testimonials','categories','products'));
    }


    public function shopPage(){
        $allproducts = Product::where('is_active', 1)->latest('id')->select('id', 'name', 'slug', 'product_price', 'product_stock', 'product_rating', 'product_image')->paginate(12);

        $categories = Category::where('is_active', 1)->with('products')->latest('id')->limit(5)->select(['id', 'title', 'slug'])->get();

        return view("frontend.pages.shopPage", compact('allproducts', 'categories'));
    }
}
