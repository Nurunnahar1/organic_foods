<!-- core:js -->
<script src="{{ asset('assets/backend/vendors/core/core.js') }}"></script>
<!-- endinject -->

<!-- Plugin js for this page -->
<script src="{{ asset('assets/backend/vendors/flatpickr/flatpickr.min.js') }}"></script>
<script src="{{ asset('assets/backend/vendors/apexcharts/apexcharts.min.js') }}"></script>
<!-- End plugin js for this page -->

<!-- inject:js -->
<script src="{{ asset('assets/backend/vendors/feather-icons/feather.min.js') }}"></script>
<script src="{{ asset('assets/backend/js/template.js') }}"></script>
<!-- endinject -->

 


<!-- Custom js for this page -->
<script src="{{ asset('assets/backend/js/dashboard-dark.js') }} "></script>
<!-- End custom js for this page -->

<script src="http://cdn.bootcss.com/jquery/2.2.4/jquery.min.js"></script>
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
{{-- page specific script start --}}
@stack('admin_script')
{{-- page specific script end --}}
