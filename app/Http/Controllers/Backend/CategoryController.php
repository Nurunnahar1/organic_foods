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

 

     public function update(Request $request, string $slug)
     {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_image' => 'nullable|image',
        ]);

        $category = Category::whereSlug($slug)->firstOrFail();

        // Check if a new image is provided
        if ($request->hasFile('category_image')) {
            // Delete the previous image if it exists
            if ($category->category_image && file_exists(public_path('uploads/category/' . $category->category_image))) {
                 unlink(public_path('uploads/category/' . $category->category_image));
            }

            // Upload the new image
            $image = $request->file('category_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('uploads/category', $imageName);

            // Assign the new image name to category_image
            $category->category_image = $imageName;
        }

        // Update category information
        $category->update([
            'title' => $request->title,
            'slug' => Str::slug($request->title),
            'is_active' => $request->filled('is_active'),
        ]);

        Toastr::success('Category updated successfully');
        return redirect()->route('category.index');
     }

    public function destroy(string $slug)
    {
        $category = Category::whereSlug($slug)->firstOrFail();

        // Delete the associated image if it exists
        if ($category->category_image && file_exists(public_path('uploads/category/' . $category->category_image))) {
            unlink(public_path('uploads/category/' . $category->category_image));
        }

        // Delete the category from the database
        $category->delete();

        Toastr::success('Category deleted successfully');
        return redirect()->route('category.index');
    }

}
