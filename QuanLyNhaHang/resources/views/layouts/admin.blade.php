<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from salero.dexignzone.com/xhtml/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 18 Jul 2024 05:55:32 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="robots" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Salero:Restaurant Admin Bootstrap 5 Template">
    <meta property="og:title" content="Salero:Restaurant Admin Bootstrap 5 Template">
    <meta property="og:description" content="Salero:Restaurant Admin Bootstrap 5 Template">
    <meta property="og:image" content="page-error-404.html">
    <meta name="format-detection" content="telephone=no">

    <!-- PAGE TITLE HERE -->
    <title>@yield('title', 'Dashboard')</title>
    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/swiper/css/swiper-bundle.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/admin/vendor/datatables/css/jquery.dataTables.min.css') }}" rel="stylesheet">

    <!-- Add Toastr CSS in the <head> section -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

    <!-- Form step -->
    <link href="{{ asset('assets/admin/vendor/jquery-smartwizard/dist/css/smart_wizard.min.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/admin/vendor/swiper/css/swiper-bundle.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('assets/admin/vendor/dotted-map/css/contrib/jquery.smallipop-0.3.0.min.css') }}" type="text/css"
        media="all" />
    <link href="{{ asset('assets/admin/vendor/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css') }}"
        rel="stylesheet">

    <link href="{{ asset('assets/admin/css/style.css') }}" rel="stylesheet">
    @stack('css')
</head>

<body>

    {{-- <div id="preloader">
        <div class="loader-wrapper">
            <div class="loader-box">
                <div class="icon">
                    <i class="fas fa-utensils"></i>
                </div>
            </div>
        </div>
    </div> --}}

    <div id="main-wrapper">
        <x-admin.header></x-admin.header>

        <x-admin.sidebar></x-admin.sidebar>

        @yield('content')

        <div class="modal fade" id="exampleModal1" tabindex="-1" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header ">
                        <h5 class="modal-title">Add Customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="form-label">Seller Mobile Number</label>
                            <input type="number" class="form-control mb-3" id="exampleInputEmail1"
                                placeholder="Number">
                            <label class="form-label">Email</label>
                            <input type="email" class="form-control mb-3" id="exampleInputEmail2"
                                placeholder=" Email">
                            <label class="form-label">Amount</label>
                            <input type="number" class="form-control mb-3" id="exampleInputEmail3"
                                placeholder="Amount">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger light" data-bs-dismiss="modal">Close</button>
                        <button type="button" class="btn btn-primary">Save changes</button>
                    </div>
                </div>
            </div>
        </div>

        <x-admin.footer></x-admin.footer>
    </div>

    {{-- ckeditor5 --}}
    <script src="https://cdn.ckeditor.com/ckeditor5/36.0.1/classic/ckeditor.js"></script>
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    @stack('script')


    <!-- Required vendors -->
    {{-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> --}}
    <script src="{{ asset('assets/admin/vendor/global/global.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/apexchart/apexchart.js') }}"></script>

    <!-- Dashboard 1 -->
    <script src="{{ asset('assets/admin/js/dashboard/dashboard-1.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/swiper/js/swiper-bundle.min.js') }}"></script>


    <!-- JS for dotted map -->
    <script src="{{ asset('assets/admin/vendor/dotted-map/js/contrib/jquery.smallipop-0.3.0.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/dotted-map/js/contrib/suntimes.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/dotted-map/js/contrib/color-0.4.1.js') }}"></script>

    <script src="{{ asset('assets/admin/vendor/dotted-map/js/world.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/dotted-map/js/smallimap.js') }}"></script>
    <script src="{{ asset('assets/admin/js/dashboard/dotted-map-init.js') }}"></script>

    <!-- Apex Chart -->



    <!-- Vectormap -->
    <script src="{{ asset('assets/admin/vendor/jqvmap/js/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jqvmap/js/jquery.vmap.world.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/jqvmap/js/jquery.vmap.usa.js') }}"></script>
    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo.js') }}"></script>
    <script src="{{ asset('assets/admin/js/styleSwitcher.js') }}"></script>

    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 5,
            //spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {

                300: {
                    slidesPerView: 1,
                    spaceBetween: 20,
                },
                416: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1280: {
                    slidesPerView: 4,
                    spaceBetween: 10,
                },
                1788: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
            },
        });
    </script>

    <script src="{{ asset('assets/admin/js/plugins-init/jquery.validate-init.js') }}"></script>

    <script src="{{ asset('assets/admin/vendor/jquery-smartwizard/dist/js/jquery.smartWizard.js') }}"></script>
    <script src="{{ asset('assets/admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

    <script src="{{ asset('assets/admin/js/custom.js') }}"></script>
    <script src="{{ asset('assets/admin/js/deznav-init.js') }}"></script>
    <script src="{{ asset('assets/admin/js/demo.js') }}"></script>
    <script src="{{ asset('assets/admin/js/styleSwitcher.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#smartwizard').smartWizard();
        });
    </script>
    <!-- Add Toastr JS before the closing </body> tag -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
</body>


</html>
