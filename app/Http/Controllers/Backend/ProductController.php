<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::where('is_active', 1)
            ->with('category')->latest('id')->select('id', 'category_id', 'name', 'slug', 'product_price', 'product_stock', 'alert_quantity', 'product_image', 'product_rating', 'updated_at')->paginate(15);
            // return $products;
            return view('backend.pages.product.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::select(['id', 'title'])->get();
        return view('backend.pages.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>'required|numeric',
            'name'=>'required|string|max:255',
            'product_price'=>'required|numeric|min:0',
            'product_code'=>'required|string|unique:products,product_code',
            'product_stock'=>'required|numeric|min:1',
            'alert_quantity'=>'required|numeric|min:1',
            'short_description'=>'nullable|string',
            'long_description'=>'nullable|string',
            'additional_info'=>'nullable|string',
            'product_image'=>'required|image|max:1024',
        ]);

        $imageName = null;
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move('uploads/product', $imageName);
        }

        $product = Product::create([
            'category_id'=>$request->category_id ,
            'name'=>$request->name,
            'slug'=>Str::slug($request->name) ,
            'product_code'=>$request->product_code ,
            'product_price'=>$request->product_price ,
            'product_stock'=>$request->product_stock ,
            'alert_quantity'=>$request->alert_quantity ,
            'short_description'=>$request->short_description ,
            'long_description'=>$request->long_description ,
            'additional_info'=>$request->additional_info ,
            'product_image' => $imageName
        ]);
        Toastr::success('Product created successfully');
        return redirect()->route('product.index');
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
    public function edit(string $slug)
    {
        $product = Product::whereSlug($slug)->first();
        $categories = Category::select(['id', 'title'])->get();
        return view('backend.pages.product.edit', compact('product', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
          $request->validate([
            'category_id'=>'required|numeric',
            'name'=>'required|string|max:255',
            'product_price'=>'required|numeric|min:0',
            'product_code'=>'required|string',
            'product_stock'=>'required|numeric|min:1',
            'alert_quantity'=>'required|numeric|min:1',
            'short_description'=>'nullable|string',
            'long_description'=>'nullable|string',
            'additional_info'=>'nullable|string',
            'product_image'=>'required|image|max:1024',
          ]);
          $product = Product::whereSlug($slug)->first();

         if ($request->hasFile('product_image')) {
              // Delete the previous image if it exists
              if ($product->product_image && file_exists(public_path('uploads/product/' .
              $product->product_image))) {
               unlink(public_path('uploads/product/' . $product->product_image));
              }

              // Upload the new image
              $image = $request->file('product_image');
              $imageName = time().'.'.$image->getClientOriginalExtension();
              $image->move('uploads/product', $imageName);

              // Assign the new image name to product_image
              $product->product_image = $imageName;
          }

          $product->update([
            'category_id'=>$request->category_id ,
            'name'=>$request->name,
            'slug'=>Str::slug($request->name) ,
            'product_code'=>$request->product_code ,
            'product_price'=>$request->product_price ,
            'product_stock'=>$request->product_stock ,
            'alert_quantity'=>$request->alert_quantity ,
            'short_description'=>$request->short_description ,
            'long_description'=>$request->long_description ,
            'additional_info'=>$request->additional_info ,
         ]);

         Toastr::success('Product update successfully');
         return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $product = Product::whereSlug($slug)->first();

        // Delete the associated image if it exists
        if ($product->product_image && file_exists(public_path('uploads/product/' . $product->product_image))) {
        unlink(public_path('uploads/product/' . $product->product_image));
        }

        // Delete the category from the database
        $product->delete();

        Toastr::success('product deleted successfully');
        return redirect()->route('product.index');
    }
}
