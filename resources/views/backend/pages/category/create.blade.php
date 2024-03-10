@extends('backend.layouts.app')
@section('admin_title')
    Category create
@endsection

@section('admin_content')
    <div class="page-content">

        <h3>Category Create</h3>
        <div class="col-12 mb-5">
            <div class="d-flex justify-content-end">
                <a href="{{ route('category.index') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                    Back to Category Index
                </a>
            </div>
        </div>


        <div class="row">

            <div class="col-md-10">

                <form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="title" class="form-label">Category Name</label>
                        <input type="text" class="form-control @error('title') is-invalid  @enderror" id="title"
                            name="title">
                        @error('title')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <img class="w-10" id="preImg" src="{{ asset('uploads/category/default.jpg') }}" />

                    <br />

                    <label class="form-label">Client Image</label>
                    <input oninput="preImg.src=window.URL.createObjectURL(this.files[0])" type="file"
                        class="form-control" id="previewLink" name="category_image">
                        @error('category_image')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>


                    <button type="submit" class="btn btn-primary">Store</button>
                </form>

            </div>
        </div>


    </div>
@endsection
