<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SPK Padi Resort - Tambah Data Subkriteria</title>

    <!-- Custom fonts for this template -->
    <link href="{{ asset('assets/vendor/fontawesome/css/all.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/sb-admin-2.css') }}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.7/css/dataTables.bootstrap4.css">

    <!-- Icon -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{ asset('vendor/fontawesome/css/all.css') }}" rel="stylesheet">


    

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-10">SPK Padi Heritage Resort</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
            Kriteria & Alternatif
            </div>

            <!-- Nav Item - Data Kriteria -->
            <li class="nav-item">
                <a class="nav-link" href="kriteria">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Kriteria</span></a>
            </li>

            <!-- Nav Item - Data Alternatif -->
            <li class="nav-item">
                <a class="nav-link" href="alternatif">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Alternatif</span></a>
            </li>

            <!-- Nav Item -  Data Subkriteria -->
            <li class="nav-item">
                <a class="nav-link" href="subkriteria">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Data Subkriteria</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Penghitungan
            </div>

            <!-- Nav Item - Penghitungan -->
            <li class="nav-item">
                    <a class="nav-link" href="penghitungan">
                        <i class="fas fa-fw fa-table"></i>
                        <span>Penghitungan</span></a>
                </li>

            <!-- Nav Item - Rekomendasi -->
            <li class="nav-item">
                <a class="nav-link" href="rekomendasi">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Rekomendasi</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search 
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    -->

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>                       

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <div class="mr-2 d-none d-lg-inline text-gray-600 small">
                                      {{  Auth::user()->name }}
                                    </div>
                            </a>
                        <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tambah Data Subkriteria</h1>
                    <!--<p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
                        For more information about DataTables, please visit the <a target="_blank"
                            href="https://datatables.net">official DataTables documentation</a>.</p>-->

                    <!-- DataTables Example 
                    <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                                    <a href="tambahalternatif" class="btn btn-primary btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fa-solid fa-plus"></i>
                                        </span>
                                        <span class="text">Tambah Data Alternatif</span>
                                    </a>  
                            </div>-->
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card shadow mb-4">    
                                <div class="col-lg-12">
                            
                            <form action="{{ route('subkriteria.update',  ['subkriteria' => $datasubkriteria->id])  }}" method="POST">
                                @csrf 
                                @method('PUT')
                                <div class="form-group mt-2">
                                <label for="nama_kriteria" class="form-label font-weight-bold">Nama Kriteria</label>
                                    <select class="form-control" name="kriteria_id">
                                        <option disabled value>Pilih Kriteria</option>
                                        @foreach ($kriteria as $krt)
                                        <option value="{{ $krt->id }}">{{ $krt->nama_kriteria }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                <label for="bobot" class="form-label font-weight-bold">Bobot</label>
                                    <select class="form-control" name="bobot">
                                        <option disabled value>Pilih Bobot</option>
                                        @foreach ($kriteria as $krt)
                                        <option value="{{ $krt->id }}">{{ $krt->bobot }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group mt-2">
                                <label for="nilai_subkriteria" class="form-label font-weight-bold">Nilai Subkriteria</label>
                                <input type="text"  name="nilai_subkriteria" class="form-control" value="{{ $datasubkriteria->nilai_subkriteria }}">
                                </div>

                                <!-- <div class="form-group mt-2">
                                    <label for="nilai_subkriteria">Nilai Subkriteria</label>
                                    <select class="form-control" id="nilai_subkriteria" name="nilai_subkriteria">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div> -->
                                <div class="form-group">
                                <div class="d-flex justify-content-center">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                            </div>
                            </div>
                        </div>
                    </div>
                                
                            
                    
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Padi Heritage Resort Kota Malang 2024</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

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
    <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets/js/sb-admin-2.min.js') }}"></script>

    <!-- Page level plugins -->
    <script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>

    <!-- Data Tables -->
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap4.js"></script>

    <script>
        $(document).ready(function() {
            $("#dataTable").DataTable();
        });
    </script>
    
</body>

</html>