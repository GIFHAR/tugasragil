<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Perdagangan & Jasa</title>

    <!-- Custom fonts for this template-->
    <link href="{{ asset('css/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">



</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        @include ('layouts.include.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                @include ('layouts.include.header')

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Perdagangan & Jasa</h1>
                        {{-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> --}}
                    </div>


                    <!-- Content Row -->
                    <div class="row">

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4" style="height: 250px;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Harga Warung</h6>
                                </div>
                                <div class="card-body">
                                    <style>
                                        .progress-bar.bg-dark-green {
                                            background-color: #006400; /* Warna hijau tua kustom */
                                        }
                                    </style>
                                    <h4 class="small font-weight-bold">kurang dari Rp.100.0000</h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-dark-green" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Rp.100.0000-Rp.200.000</h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Rp.200.0000-Rp.500.000  </h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Color System -->
                            <div class="col-lg-16 mb-4">
                                <div class="card shadow mb-4" style="height: 250px;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Rata-rata Luas Bangunan </h6>
                                </div>
                                <div class="card mb-4 py-3 border-bottom-primary">
                                    <div class="card-body">
                                        <div class="card-body">
                                            Warung     = 45-260 m<sup>2</sup><br>
                                            Toko       = 18-243 m<sup>2</sup><br>
                                            Minimarket = 125-126 m<sup>2</sup><br>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            </div>

                        </div>

                        <div class="col-lg-6 mb-4">

                            <!-- Project Card Example -->
                            <div class="card shadow mb-4" style="height: 325px;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Harga Toko</h6>
                                </div>
                                <div class="card-body">
                                    <style>
                                        .progress-bar.bg-dark-green {
                                            background-color: #006400; /* Warna hijau tua kustom */
                                        }
                                    </style>
                                    <h4 class="small font-weight-bold">kurang dari Rp.100.0000</h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-dark-green" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Rp.100.0000-Rp.200.0000</h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-success" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Rp.200.0000-Rp.500.0000</h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <h4 class="small font-weight-bold">Rp.500.0000-Rp.1.000.0000</h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>

                                </div>
                            </div>
                            <div class="card shadow mb-4" style="height: 175px;">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Harga Minimarket</h6>
                                </div>
                                <div class="card-body">
                                    <h4 class="small font-weight-bold">Rp.200.0000-Rp.500.000</h4>
                                    <div class="progress mb-4">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 100%"
                                            aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                </div>
                            </div>
                            <!-- Color System -->

                            </div>

                            </div>

                        </div>


                        <div class="col-lg-12 mb-4">

                            <div class="card shadow mb-4">
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Peta Zona Nilai Tanah</h6>
                                </div>
                                <div class="card-body p-0">
                                    <div class="map-container">
                                        <iframe src="https://harganlahan-desakebongunung.gis.co.id/" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                            <style>
                                .card {
                                    height: 500px;
                                    border: none;
                                    border-radius: 10px;
                                    overflow: hidden;
                                }

                                .map-container {
                                    position: relative;
                                    padding-bottom: 100%; /* 1:1 aspect ratio */
                                    height: 0;
                                }

                                .map-container iframe {
                                    position: absolute;
                                    top: 0;
                                    left: 0;
                                    width: 100%;
                                    height: 100%;
                                }
                            </style>




                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

         @include ('layouts.include.footer')

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset ('js/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('js/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('js/sb-admin-2.min.js')}}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset ('js/chart.js/Chart.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset ('js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset ('js/demo/chart-pie-demo.js') }}"></script>

</body>

</html>
