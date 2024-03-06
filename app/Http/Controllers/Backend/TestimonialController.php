<?php

namespace App\Http\Controllers\Backend;

use App\Models\Testimonial;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Intervention\Image\Laravel\Facades\Image;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonials = Testimonial::latest('id')->select('id', 'client_name','client_name_slug', 'client_designation',
        'client_image','updated_at')->paginate(4);
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
        function image_upload($request, $item_id){
            $testimonial = Testimonial::findorFail($item_id);

            if($request->hasFile('client_image')){
                if($testimonial->client_image !='default-client.jpg'){
                    $photo_location = 'public/uploads/testimonials/';
                    $old_photo_location = $photo_location.$testimonial->client_image;
                    unlink(base_path($old_photo_location));

                }
                $photo_location = 'public/uploads/testimonials/';
                $uploaded_photo = $request->file('client_image');
                $new_photo_name = $testimonial->id.'.'.$uploaded_photo->getClientOriginalExtension();
                $new_photo_location = $photo_location.$new_photo_name;
                Image::make($uploaded_photo)->resize(105,105)->save(base_path($new_photo_location),40);
                $check = $testimonial->update([
                'client_image' => $new_photo_name,
                ]);
            }
        }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
          $request->validate([
          'client_name'=>'required|string|max:255',
          'client_designation'=>'required|string|max:255',
          'client_message'=>'required|string',
          'client_image'=>'nullable|image'
          ]);

        $testimonial = Testimonial::create([
            'client_name' => $request->client_name,
            'client_name_slug' => Str::slug($request->client_name),
            'client_designation' => $request->client_designation,
            'client_messagte' => $request->client_message,
        ]);

        $this->image_upload($request, $testimonial->id);
        Toastr::success('Testimonial created successfully');
        return redirect()->route('testimonial.index');
    }

    /**
     * Display the specified resource.
     */
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
