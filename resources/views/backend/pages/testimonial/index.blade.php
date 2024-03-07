@extends('backend.layouts.app')
@section('admin_title')
    Testimonial index
@endsection

@push('admin_style')
    <link rel="stylesheet" href="{{ asset('https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css') }}">
    <style>
        .dataTables_length {
            padding: 20px 0;
        }
    </style>
@endpush
@section('admin_content')
    <div class="page-content">

        <h3>Testimonial List Table</h3>
        <div class="col-12 mb-5">
            <div class="d-flex justify-content-end">
                <a href="{{ route('testimonial.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus-circle"></i>
                    Add New Testimonial
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTable" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Last Updated</th>
                                        <th>Client Name</th>
                                        <th>Client name slug</th>
                                        <th>Client Designation</th>
                                        <th>Client Image</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($testimonials as $key => $testimonial)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $testimonial->updated_at->format('d M Y') }}</td>
                                            <td>{{ $testimonial->client_name }}</td>
                                            <td>{{ $testimonial->client_name_slug }}</td>
                                            <td>{{ $testimonial->client_designation }}</td>
                                            {{-- <td>{{ $testimonial->client_image }}</td> --}}
                                            <td>
                                                <img src="{{ asset('uploads/testimonial') }}/{{ $testimonial->client_image }}"
                                                    alt="" class="img-fluid rounded-circle">

                                            </td>
                                            <td class="btn-group">
                                                <a href="{{ route('testimonial.edit', $testimonial->client_name_slug) }}"
                                                    class="btn btn-primary btn-group">Edit</a>
                                                <form
                                                    action="{{ route('testimonial.destroy', $testimonial->client_name_slug) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger confirm">Delete</button>
                                                </form>
                                                {{-- <a href="{{ route('category.destroy', $category->slug) }}">Delete</a> --}}
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('admin_script')
    <script src="{{ asset('https://code.jquery.com/jquery-3.7.0.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('https://cdn.jsdelivr.net/npm/sweetalert2@11') }}"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable({
                pagingType: 'first_last_numbers',
            });

            $('.confirm').click(function(event) {
                let form = $(this).closest('form');
                event.preventDefault();



                Swal.fire({
                    title: "Are you sure?",
                    text: "You won't be able to revert this!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                        Swal.fire({
                            title: "Deleted!",
                            text: "Your file has been deleted.",
                            icon: "success"
                        });
                    }
                });
            })


        });
    </script>
@endpush
