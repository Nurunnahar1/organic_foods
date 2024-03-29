@extends('backend.layouts.app')
@section('admin_title')
    Product create
@endsection

@section('admin_content')
    <div class="page-content">

        <h3>Product Create</h3>
        <div class="col-12 mb-5">
            <div class="d-flex justify-content-end">
                <a href="{{ route('product.index') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                    Back to Product Index
                </a>
            </div>
        </div>


        <div class="row">

            <div class="col-md-10">

                <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('post')
                    <div class="col-12 mb-3">
                        <label for="category_id" class="form-label">Select Category</label>
                        <select name="category_id" class="form-select" id="">
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                        @error('category_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Product Name</label>
                        <input type="text" class="form-control @error('name') is-invalid  @enderror" id="name"
                            name="name">
                        @error('name')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="product_price" class="form-label">Product Price</label>
                        <input type="number" class="form-control @error('product_price') is-invalid  @enderror"
                            id="product_price" name="product_price" min="0">
                        @error('product_price')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="product_code" class="form-label">Product Code</label>
                        <input type="number" class="form-control @error('product_code') is-invalid  @enderror"
                            id="product_code" name="product_code">
                        @error('product_code')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="product_stock" class="form-label">Product Stock</label>
                        <input type="number" class="form-control @error('product_stock') is-invalid  @enderror"
                            id="product_stock" name="product_stock" min="1">
                        @error('product_stock')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="alert_quantity" class="form-label">Alert Quantity</label>
                        <input type="number" class="form-control @error('alert_quantity') is-invalid  @enderror"
                            id="alert_quantity" name="alert_quantity" min="1">
                        @error('alert_quantity')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="short_description" class="form-label">Short Description</label>
                        <textarea name="short_description" class="form-control @error('short_description') is-invalid   @enderror"
                            id="short_description" cols="30" rows="5"></textarea>
                        @error('short_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="long_description" class="form-label">Long Description</label>
                        <textarea name="long_description" class="form-control @error('long_description') is-invalid   @enderror"
                            id="long_description" cols="30" rows="5"></textarea>
                        @error('long_description')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-12 mb-3">
                        <label for="additional_info" class="form-label">Additional Info</label>
                        <textarea name="additional_info" class="form-control @error('additional_info') is-invalid   @enderror"
                            id="additional_info" cols="30" rows="5"></textarea>
                        @error('additional_info')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>product_image
                        @enderror
                    </div>
                    {{-- <div class="mb-3">
                        <img class="w-10" id="preImg" src="{{ asset('uploads/product/dafault_product.jpg') }}" />

                        <br />

                        <label class="form-label">Product Image</label>
                        <input oninput="preImg.src=window.URL.createObjectURL(this.files[0])" type="file"
                            class="form-control" id="previewLink" name="product_image">
                        @error('product_image')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div> --}}

                    <div class="mb-3">
                        <img class="w-10" id="preImg" src="{{ asset('uploads/product/dafault_product.jpg') }}" />

                        <br />

                        <label class="form-label">Product Image</label>
                        <input oninput="preImg.src=window.URL.createObjectURL(this.files[0])" type="file"
                            class="form-control" id="previewLink" name="product_image">
                        @error('product_image')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>


                    <div class="col-12 mb-3">
                        <label for="product_multiple_image" class="form-label">Product Multiple Image</label>
                        <input type="file" name="product_multiple_image[]" multiple class="form-control   "
                            id="product_multiple_image">
                        @error('product_multiple_image')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
 

                    <button type="submit" class="btn btn-primary">Store</button>
                </form>

            </div>
        </div>


    </div>
@endsection
