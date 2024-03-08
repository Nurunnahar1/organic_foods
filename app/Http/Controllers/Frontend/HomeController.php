<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home(){
        $testimonials = Testimonial::where('is_active',1)->latest()->limit(4)->select(['id','client_name','client_designation','client_message','client_image'])->get();

        // return $testimonials;
        return view('frontend.pages.home',compact('testimonials'));
    }

}
