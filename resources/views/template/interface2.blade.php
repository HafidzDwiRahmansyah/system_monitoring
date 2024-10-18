<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>@yield('title') - Coffee Netbox</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="/img/logo.jpg" type="image/x-icon">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <style>
        body {
            background-color: white;
        }

        .spinner {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: white;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.5s ease-out;
            transform: translateY(0);
        }

        .spinner.hide {
            transform: translateY(-100%);
        }


        .spinner>div {
            width: 18px;
            height: 18px;
            background-color: brown;
            border-radius: 100%;
            display: inline-block;
            -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
            animation: sk-bouncedelay 1.4s infinite ease-in-out both;
        }

        .spinner .bounce1 {
            -webkit-animation-delay: -0.32s;
            animation-delay: -0.32s;
        }

        .spinner .bounce2 {
            -webkit-animation-delay: -0.16s;
            animation-delay: -0.16s;
        }

        @-webkit-keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
            }

            40% {
                -webkit-transform: scale(1.0);
            }
        }

        @keyframes sk-bouncedelay {

            0%,
            80%,
            100% {
                -webkit-transform: scale(0);
                transform: scale(0);
            }

            40% {
                -webkit-transform: scale(1.0);
                transform: scale(1.0);
            }
        }

        .content {
            display: none;
        }

        .informasi1 {
            width: 200px;
            height: 50px;
            background-color: blue;
            border-radius: 10px;
            transition: 0.4s;
        }

        .informasi1:hover {
            width: 210px;
            height: 60px;
            background-color: blue;
            border-radius: 10px;
            transition: 0.4s;
            cursor: pointer;
        }

        .informasi2 {
            width: 200px;
            height: 50px;
            background-color: red;
            transition: 0.4s;
            border-radius: 10px;
        }

        .informasi2:hover {
            width: 210px;
            height: 60px;
            background-color: red;
            border-radius: 10px;
            transition: 0.4s;
            cursor: pointer;
        }
    </style>
    </style>
</head>

<body>

    <div class="spinner" id="spinner">
        <div class="bounce1"></div>
        <div class="bounce2"></div>
        <div class="bounce3"></div>
    </div>
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
                <div class="sidebar-brand-text mx-3">COFFE NETBOX</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            @if (auth()->user()->role == 'admin')
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Control
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>User</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom User</h6>
                        <a class="collapse-item" href="user_add">Add</a>
                        <a class="collapse-item" href="cards.html">Update</a>
                        <a class="collapse-item" href="cards.html">Delete</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Mesin</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Utilities:</h6>
                        <a class="collapse-item" href="/laporan_mesin">Laporan Mesin</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Addons
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Login Screens:</h6>
                        <a class="collapse-item" href="/">Login</a>
                        <a class="collapse-item" href="register.html">Register</a>
                        <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
                        <div class="collapse-divider"></div>
                        <h6 class="collapse-header">Other Pages:</h6>
                        <a class="collapse-item" href="404.html">404 Page</a>
                        <a class="collapse-item" href="blank.html">Blank Page</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="charts.html">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Charts</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="tables.html">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Tables</span></a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            @endif

            @if (auth()->user()->role == 'owner')
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Report
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Report Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Show Report</h6>
                        <a class="collapse-item" href="user_show">user</a>
                        <a class="collapse-item" href="monitoring_show">monitoring</a>
                        <a class="collapse-item" href="machine_report">machine</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            @endif

            @if (auth()->user()->role == 'monitoring')
            <li class="nav-item active">
                <a class="nav-link" href="dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="monitoring">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Page Monitoring</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="add_coffe">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Add Coffe</span></a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Report
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Monitoring Data</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Show Data</h6>
                        <a class="collapse-item" href="servo_show">Servo</a>
                        <a class="collapse-item" href="loadcell_show">LoadCell</a>
                        <a class="collapse-item" href="waterflow_show">Waterflow</a>
                        <a class="collapse-item" href="suhu_show">Suhu</a>
                        <a class="collapse-item" href="suhu_machine_show">Suhu mesin</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Report Mesin</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Type Laporan</h6>
                        <a class="collapse-item" href="/report_broke">Kerusakan</a>
                        <a class="collapse-item" href="/report_day">Harian</a>
                    </div>
                </div>
            </li>
            <hr class="sidebar-divider">
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
            @endif
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
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

                        @if (in_array(auth()->user()->role, ['admin']))
                        {{--
                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li> --}}

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">{{ $count }}</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <form action="/status" method="post">
                                    @csrf
                                    @foreach ($pesan as $item)
                                    <a class="dropdown-item d-flex align-items-center" href="#" data-toggle="modal"
                                        data-target="#pesanModal">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <input type="text" name="id" value="{{ $item->id }}" hidden>
                                            <div class="text-truncate">{{ $item->title }}</div>
                                            <div class="small text-gray-500">{{ $item->text }}</div>
                                        </div>
                                    </a>
                                    @endforeach
                                    <button class="dropdown-item text-center small text-gray-500" type="submit"
                                        href="#">Read More
                                        Messages</button>
                                </form>
                            </div>
                        </li>

                        @endif

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle" src="img/undraw_profile.svg">
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
                    @yield('content')
                </div>
            </div>
            {{-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Hadwra 2020</span>
                    </div>
                </div>
            </footer> --}}
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
                    <a class="btn btn-primary" href="logout">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function hideLoader() {
        var spinner = document.getElementById('spinner');
        var content = document.querySelector('.content'); 
        setTimeout(function() {
            spinner.classList.add('hide');
            content.style.display = 'block'; 
        }, 2000);
    }
    document.addEventListener('DOMContentLoaded', function() {
        hideLoader();
    });
    </script>

    @if (session('error'))
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 4200,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    Toast.fire({
        icon: "error",
        title: "{{ session('error') }}"
    });
    </script>
    @endif

    @if (session('success'))
    <script>
        const Toast = Swal.mixin({
        toast: true,
        position: "top-end",
        showConfirmButton: false,
        timer: 4200,
        timerProgressBar: true,
        didOpen: (toast) => {
            toast.onmouseenter = Swal.stopTimer;
            toast.onmouseleave = Swal.resumeTimer;
        }
    });
    Toast.fire({
        icon: "success",
        title: "{{ session('success') }}"
    });
    </script>
    @endif

    <script>
        // Inisialisasi ECharts
        var myChart = echarts.init(document.getElementById('servoChart'));

        // Fungsi untuk mengambil data servo1 dari endpoint
        async function fetchServo1Data() {
            try {
                const response = await fetch('/api/servo1');
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                const data = await response.json();
                return data;
            } catch (error) {
                console.error('Fetching data failed:', error);
                return []; // Mengembalikan array kosong jika terjadi kesalahan
            }
        }

        // Fungsi untuk memperbarui chart dengan data terbaru
        async function updateChart() {
            const servo1Data = await fetchServo1Data();

            // Data fiktif untuk pengujian
            var data = {
                servo1: servo1Data,
                servo2: [{
                        name: '2024-07-01',
                        value: 5
                    },
                    {
                        name: '2024-07-02',
                        value: 7
                    },
                    {
                        name: '2024-07-03',
                        value: 6
                    },
                    {
                        name: '2024-07-04',
                        value: 8
                    },
                    {
                        name: '2024-07-05',
                        value: 5
                    },
                    {
                        name: '2024-07-06',
                        value: 6
                    },
                    {
                        name: '2024-07-07',
                        value: 9
                    },
                    {
                        name: '2024-07-08',
                        value: 4
                    },
                    {
                        name: '2024-07-09',
                        value: 7
                    },
                    {
                        name: '2024-07-10',
                        value: 10
                    }
                ],
                servo3: [{
                        name: '2024-07-01',
                        value: 20
                    },
                    {
                        name: '2024-07-02',
                        value: 22
                    },
                    {
                        name: '2024-07-03',
                        value: 18
                    },
                    {
                        name: '2024-07-04',
                        value: 25
                    },
                    {
                        name: '2024-07-05',
                        value: 17
                    },
                    {
                        name: '2024-07-06',
                        value: 20
                    },
                    {
                        name: '2024-07-07',
                        value: 23
                    },
                    {
                        name: '2024-07-08',
                        value: 18
                    },
                    {
                        name: '2024-07-09',
                        value: 21
                    },
                    {
                        name: '2024-07-10',
                        value: 24
                    }
                ],
                servo4: [{
                        name: '2024-07-01',
                        value: 15
                    },
                    {
                        name: '2024-07-02',
                        value: 17
                    },
                    {
                        name: '2024-07-03',
                        value: 14
                    },
                    {
                        name: '2024-07-04',
                        value: 20
                    },
                    {
                        name: '2024-07-05',
                        value: 13
                    },
                    {
                        name: '2024-07-06',
                        value: 16
                    },
                    {
                        name: '2024-07-07',
                        value: 19
                    },
                    {
                        name: '2024-07-08',
                        value: 14
                    },
                    {
                        name: '2024-07-09',
                        value: 17
                    },
                    {
                        name: '2024-07-10',
                        value: 22
                    }
                ],
                servo5: [{
                        name: '2024-07-01',
                        value: 30
                    },
                    {
                        name: '2024-07-02',
                        value: 32
                    },
                    {
                        name: '2024-07-03',
                        value: 28
                    },
                    {
                        name: '2024-07-04',
                        value: 35
                    },
                    {
                        name: '2024-07-05',
                        value: 27
                    },
                    {
                        name: '2024-07-06',
                        value: 30
                    },
                    {
                        name: '2024-07-07',
                        value: 33
                    },
                    {
                        name: '2024-07-08',
                        value: 28
                    },
                    {
                        name: '2024-07-09',
                        value: 31
                    },
                    {
                        name: '2024-07-10',
                        value: 34
                    }
                ]
            };

            // Periksa apakah data servo1 kosong
            if (data.servo1.length === 0) {
                console.warn('No data available for Servo 1');
                return; // Berhenti jika tidak ada data
            }

            // Labels dan data untuk ECharts
            var labels = data.servo1.map(item => item.name);
            var servo1Values = data.servo1.map(item => item.value);
            var servo2Values = data.servo2.map(item => item.value);
            var servo3Values = data.servo3.map(item => item.value);
            var servo4Values = data.servo4.map(item => item.value);
            var servo5Values = data.servo5.map(item => item.value);

            // Opsi chart
            var option = {
                tooltip: {
                    trigger: 'axis'
                },
                legend: {
                    data: ['Servo 1', 'Servo 2', 'Servo 3', 'Servo 4', 'Servo 5']
                },
                xAxis: {
                    type: 'category',
                    data: labels
                },
                yAxis: {
                    type: 'value',
                },
                series: [{
                        name: 'Servo 1',
                        type: 'line',
                        data: servo1Values,
                        itemStyle: {
                            color: 'red'
                        }
                    },
                    {
                        name: 'Servo 2',
                        type: 'line',
                        data: servo2Values,
                        itemStyle: {
                            color: 'yellow'
                        }
                    },
                    {
                        name: 'Servo 3',
                        type: 'line',
                        data: servo3Values,
                        itemStyle: {
                            color: 'green'
                        }
                    },
                    {
                        name: 'Servo 4',
                        type: 'line',
                        data: servo4Values,
                        itemStyle: {
                            color: 'blue'
                        }
                    },
                    {
                        name: 'Servo 5',
                        type: 'line',
                        data: servo5Values,
                        itemStyle: {
                            color: 'black'
                        }
                    }
                ]
            };
            myChart.setOption(option);
        }

        // Memperbarui chart setiap 1 detik
        setInterval(updateChart, 1000);

        // Pertama kali memuat data dan menampilkan chart
        updateChart();
    </script>


    <script>
        var data1 = [
        { value: 50, name: 'Panas', itemStyle: { color: '#FF0000' } },
        { value: 30, name: 'Stabil', itemStyle: { color: '#00FF00' } },
        { value: 20, name: 'Dingin', itemStyle: { color: '#0000FF' } }
        ];

        var data2 = [
        { value: 40, name: 'Panas', itemStyle: { color: '#FF0000' } },
        { value: 35, name: 'Stabil', itemStyle: { color: '#00FF00' } },
        { value: 25, name: 'Dingin', itemStyle: { color: '#0000FF' } }
        ];

    function createChart(domId, title, data) {
        var chartDom = document.getElementById(domId);
        var myChart = echarts.init(chartDom);

        var option = {
            title: {
                left: 'center'
            },
            tooltip: {
                trigger: 'item',
                formatter: '{b}: {c} ({d}%)'
            },
            legend: {
                orient: 'vertical',
                left: 'left',
                data: data.map(item => item.name),
                textStyle: {
                    color: data.map(item => item.itemStyle.color)
                }
            },
            series: [
                {
                    name: 'Access From',
                    type: 'pie',
                    radius: ['40%', '70%'],
                    data: data,
                    emphasis: {
                        itemStyle: {
                            shadowBlur: 10,
                            shadowOffsetX: 0,
                            shadowColor: 'rgba(0, 0, 0, 0.5)'
                        }
                    },
                    label: {
                        show: false
                    },
                    labelLine: {
                        show: false
                    }
                }
            ]
        };
        myChart.setOption(option);
    }

    // Inisialisasi ECharts untuk Chart 1
    createChart('chart1', 'Suhu Air', data1); 

    // Inisialisasi ECharts untuk Chart 2
    createChart('chart2', 'Suhu Mesin', data2);
    </script>

    <script>
        // Data fiktif untuk pengujian dengan satu bar per loadcell
        var data = {
            loadcell1: 10,
            loadcell2: 15,
            loadcell3: 20,
            loadcell4: 25,
            loadcell5: 30
        };

        // Labels dan data untuk ECharts
        var labels = Object.keys(data);
        var values = Object.values(data);

        // Inisialisasi ECharts
        var chartDom = document.getElementById('loadcellChart');
        var myChart = echarts.init(chartDom);
        var option;

        option = {
            tooltip: {
                trigger: 'item'
            },
            legend: {
                data: labels
            },
            xAxis: {
                type: 'category',
                data: labels
            },
            yAxis: {
                type: 'value'
            },
            series: [
                {
                    name: 'Loadcell Data',
                    type: 'bar',
                    data: values,
                    itemStyle: {
                        color: function(params) {
                            // Menggunakan warna yang berbeda untuk setiap bar
                            var colorList = ['red', 'yellow', 'green', 'blue', 'black'];
                            return colorList[params.dataIndex];
                        }
                    }
                }
            ]
        };

        option && myChart.setOption(option);
    </script>

</body>

</html>