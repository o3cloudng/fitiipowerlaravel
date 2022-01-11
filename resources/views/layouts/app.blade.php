<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 14:52:15 GMT -->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content />
    <meta name="author" content />
    <title>FitiiPower</title>
    <link href="/css/styles.css" rel="stylesheet" />
    <link href="/cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link href="/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" rel="stylesheet"
        crossorigin="anonymous" />
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png" />
    <script data-search-pseudo-elements defer
        src="/cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" crossorigin="anonymous">
    </script>
    <script src="/cdnjs.cloudflare.com/ajax/libs/feather-icons/4.27.0/feather.min.js"
        crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> 

    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"> --}}
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <style>
        .bg-gradient-primary-to-secondary {
            background-color: #FE9A2E !important;
            background-image: linear-gradient(135deg, #df7a0e 0%, rgba(105, 0, 199, 0.8) 100%) !important;
        }
        .topnav .navbar-brand img {
            height: 2rem !important;
        }
        .active, .active > .nav-link-icon > .feather {
            color:#df7a0e !important;
        }
        a {
            color: #4f4f4f;
        }
        a:hover {
            color:#df7a0e !important;
            text-decoration: none;
        }
        .nav-link:hover, .nav-link:active {
            color:#df7a0e !important;
        }
        .card-header {
            color:#df7a0e !important;
        }
        .page-item.active .page-link {
            z-index: 3;
            color: #fff;
            background-color: #df7a0e;
            border-color: #df7a0e;
        }
        .page-link {
            color: #df7a0e;
        }
        .badge-primary {
            background-color: #df7a0e;
        }

        /* SweatAlert */
        .select2-selection, .select2-selection--single {
            display: none !important;
        }
        .swal2-title {
            font-weight: 200 !important;
            font-size: 14px !important;
            line-height: 30px !important;
        }
    </style>
</head>

<body class="nav-fixed">
    @include('layouts.navbar')
    <div id="layoutSidenav">
        @include('layouts.sidenavbar')

        <div id="layoutSidenav_content">
            <main>
                <header class="page-header page-header-dark bg-gradient-primary-to-secondary pb-10">
                    <div class="container">
                        <div class="page-header-content pt-4">
                            <div class="row align-items-center justify-content-between">
                                <div class="col-auto mt-4">
                                    <h1 class="page-header-title">
                                        <div class="page-header-icon"><i data-feather="activity"></i></div>
                                        @yield('header')
                                    </h1>
                                    <div class="page-header-subtitle">Monitor All Products and Services
                                    </div>
                                </div>
                                <div class="col-12 col-xl-auto mt-4">
                                    <button class="btn btn-white btn-sm line-height-normal p-3" id="reportrange">
                                        <i class="mr-2 text-primary" data-feather="calendar"></i>
                                        <span></span>
                                        <i class="ml-1" data-feather="chevron-down"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </header>
                <!-- Main page content-->
                @yield('content')
            </main>
            <footer class="footer mt-auto footer-light">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 small">Copyright <?php echo date('Y'); ?></div>
                        <div class="col-md-6 text-md-right small">
                            <a href="#!">Privacy Policy</a>
                            &#xB7;
                            <a href="#!">Terms &amp; Conditions</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="/code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script src="/js/scripts.js"></script>
    <script src="/cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js" crossorigin="anonymous">
    </script>
    <script src="/assets/demo/chart-area-demo.js"></script>
    <script src="/assets/demo/chart-bar-demo.js"></script>
    <script src="/cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous">
    </script>
    <script src="/cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous">
    </script>
    <script src="/assets/demo/datatables-demo.js"></script>
    <script src="/cdn.jsdelivr.net/momentjs/latest/moment.min.js" crossorigin="anonymous"></script>
    <script src="/cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js" crossorigin="anonymous">
    </script>
    <script src="/assets/demo/date-range-picker-demo.js"></script>

    <script src="/js/sb-customizer.js"></script>
    <!-- <sb-customizer project="sb-admin-pro"></sb-customizer> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

    <script>
        $(function () {
            $('select').each(function () {
              $(this).select2({
                theme: 'bootstrap4',
                width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
                placeholder: $(this).data('placeholder'),
                allowClear: Boolean($(this).data('allow-clear')),
              });
            });
          });
    </script>

    {{-- @if(Session::has('status'))
        <script>
            toastr.success({!! Session::get('status') !!});
        </script>
    @endif --}}
    @include('sweetalert::alert')


</body>

<!-- Mirrored from themes.startbootstrap.com/sb-admin-pro/ by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Aug 2020 14:52:58 GMT -->

</html>