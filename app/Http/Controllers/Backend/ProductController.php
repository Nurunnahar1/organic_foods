<?php

namespace App\Http\Controllers\Backend;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use App\Models\ProductImage;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Storage;

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
            //  'product_image' => $imageName
             ]);

        
            if ($request->hasFile('product_image')) {
                $image = $request->file('product_image'); 
                $imageName = $product->id.'.'.$image->getClientOriginalExtension();
                $image->move('uploads/product', $imageName);

                // Save main product image path to the product
                $product->product_image = $imageName;
                $product->save();
            }
            if ($request->hasFile('product_multiple_image')) {
                $flag = 1;
                foreach ($request->file('product_multiple_image') as $image) {
                    $imageName = $product->id.'_'.$flag.'.'.$image->getClientOriginalExtension(); 
                                
                    $image->move('uploads/multiple_product_image', $imageName);

                    // Create and save product image record
                    $productImage = new ProductImage();
                    $productImage->product_id = $product->id;
                    $productImage->product_multiple_image = $imageName;
                    $productImage->save();
                    
                     $flag++;
                }
            }

   
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
        // Delete old image if it exists
            if ($product->product_image) {
            // You may want to use the storage facade or delete the file manually here
            Storage::delete('uploads/product/'.$product->product_image);
            }

            // Upload new image
            $image = $request->file('product_image');
            $imageName = $product->id.'.'.$image->getClientOriginalExtension();
            $image->move('uploads/product', $imageName);

            // Save new image path to the product
            $product->product_image = $imageName;
            $product->save();
            }

            if ($request->hasFile('product_multiple_image')) {
                // Delete old multiple images if they exist
                // You may want to use the storage facade or delete the files manually here
                Storage::delete('uploads/multiple_product_image/'.$product->id);

                // Upload new multiple images
                $flag = 1;
                foreach ($request->file('product_multiple_image') as $image) {
                $imageName = $product->id.'_'.$flag.'.'.$image->getClientOriginalExtension();
                $image->move('uploads/multiple_product_image', $imageName);

                // Create and save product image record
                $productImage = new ProductImage();
                $productImage->product_id = $product->id;
                $productImage->product_multiple_image = $imageName;
                $productImage->save();

                $flag++;
            }
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

        // Delete old multiple images if they exist
        $oldMultipleImages = ProductImage::where('product_id', $product->id)->get();
        foreach ($oldMultipleImages as $oldImage) {
            $filePath = 'uploads/multiple_product_image/' . $oldImage->product_multiple_image;
            if (file_exists(public_path($filePath))) {
                unlink(public_path($filePath));
            }
            $oldImage->delete();
        }

        // Delete the product from the database
        $product->delete();

        Toastr::success('Product deleted successfully');
        return redirect()->route('product.index');
        
    }
}
