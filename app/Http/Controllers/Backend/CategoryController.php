<?php

namespace App\Http\Controllers\Backend;

use App\Models\Category;
use Faker\Provider\Image;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr; 

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::latest('id')->select(['id','category_image', 'title', 'slug',
        'updated_at'])->paginate();
        // return $categories;
        return view('backend.pages.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.pages.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'title'=>'required|string|max:255|unique:categories,title',
    //         'category_image'=>'nullable|image',
    //     ]);

    //        $imageName = null; 
    //        if ($request->hasFile('category_image')) {
    //        $image = $request->file('category_image');
    //        $imageName = time().'.'.$image->getClientOriginalExtension();
    //        $image->move('uploads/category', $imageName);
    //        }

    //     $category = Category::create([
    //         'title'=>$request->title,
    //         'slug'=>Str::slug($request->title),
    //         'category_image'=>$request->imageName
    //     ]);

    //     // $this->image_upload($request, $category->id);

    //     Toastr::success('Category created successfully');
    //     return redirect()->route('category.index');

        
    // }


    public function store(Request $request)
    {
    $request->validate([
    'title' => 'required|string|max:255|unique:categories,title',
    'category_image' => 'nullable|image',
    ]);

    $imageName = null;
    if ($request->hasFile('category_image')) {
    $image = $request->file('category_image');
    $imageName = time().'.'.$image->getClientOriginalExtension();
    $image->move('uploads/category', $imageName);
    }

    $category = Category::create([
    'title' => $request->title,
    'slug' => Str::slug($request->title),
    'category_image' => $imageName // Corrected here
    ]);

    Toastr::success('Category created successfully');
    return redirect()->route('category.index');
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
        // $category = Category::findOrFail($id);
        // $category = Category::where('slug', $id)->first();
        $category = Category::whereSlug($id)->first();
        // return $category;

        return view('backend.pages.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
          $request->validate([
          'title'=>'required|string|max:255',
        //   'category_image'=>'nullable|image',
          ]);

          $category = Category::whereSlug($slug)->first();

          $category->update([
            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'is_active'=>$request->filled('is_active'),
          ]);

          // $this->image_upload($request, $category->id);

          Toastr::success('Category update successfully');
          return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
         $category = Category::whereSlug($slug)->first()->delete();
        // return $category;
        Toastr::success('Category delete successfully');
        return redirect()->route('category.index');
    }
}
