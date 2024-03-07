<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr; 

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest('id')->select('id', 'client_name','client_name_slug', 'client_designation',
        'client_image','updated_at')->get();
        // return $testimonials;
        return view('backend.pages.testimonial.index',compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.testimonial.create');
    }
  


     public function store(Request $request)
     {
        $request->validate([
            'client_name'=>'required|string|max:255',
            'client_designation'=>'required|string|max:255',
            'client_message'=>'required|string',
            'client_image'=>'nullable|image|mimes:jpeg,png,jpg,gif|max:1024' 
        ]);
        $imageName = null;
        // Handle image upload
        if ($request->hasFile('client_image')) {
            $image = $request->file('client_image'); 
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('uploads/testimonial', $imageName);
        }  

        $testimonial = Testimonial::create([
            'client_name' => $request->client_name,
            'client_name_slug' => Str::slug($request->client_name),
            'client_designation' => $request->client_designation,
            'client_message' => $request->client_message,
            'client_image' => $imageName
        ]);

        Toastr::success('Testimonial created successfully');
        return redirect()->route('testimonial.index');
     }

    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
