@extends('backend.layouts.app')
@section('admin_title')
    Category create
@endsection
@push('admin_style')
@endpush
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
                        <label for="client_name" class="form-label">Client Name</label>
                        <input type="text" class="form-control @error('client_name') is-invalid  @enderror"
                            id="client_name" name="client_name">
                        @error('client_name')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="client_designation" class="form-label">Client Designation</label>
                        <input type="text" class="form-control @error('client_designation') is-invalid  @enderror"
                            id="client_designation" name="client_designation">
                        @error('client_designation')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="client_message" class="form-label">Client Message</label>
                        <input type="text" class="form-control @error('client_message') is-invalid  @enderror"
                            id="client_message" name="client_message">
                        @error('client_message')
                            <span class="invalid-feedback"><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>





                    <img class="w-10" id="preImg" src="{{ asset('uploads/testimonial/default.jpg') }}" />

                    <br />

                    <label class="form-label">Client Image</label>
                    <input oninput="preImg.src=window.URL.createObjectURL(this.files[0])" type="file"
                        class="form-control" id="previewLink">

                    <button type="submit" class="btn btn-primary">Store</button>
                </form>

            </div>
        </div>


    </div>
@endsection
@push('admin_script')
@endpush
