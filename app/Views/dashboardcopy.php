<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management Dashboard</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'DM Sans', sans-serif;
            margin: 0;
            padding: 0;
        }

        #sidebar-wrapper {
            min-height: 100vh;
            background-color: #00A8E8;
            color: #fff;
            width: 280px;
            transition: all 0.3s ease;
            background-color: #0d6efd;
            border-top-right-radius: 30px;
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.1);
        }

     
        #sidebar-wrapper .nav-item .nav-link {
            color: #dcdfe1;
            font-weight: 500;
            padding: 15px 20px;
            font-size: 1rem;
            text-transform: capitalize;
            transition: background-color 0.3s ease;
        }

     
        #sidebar-wrapper .nav-item .nav-link:hover {
            background-color: #0085ff;
            color: #fff;
            border-radius: 5px;
        }

      
        .sidebar-heading {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-bottom: 2px solid #495057;
            margin-bottom: 20px;
        }

       
        #page-content-wrapper {
            flex-grow: 1;
            padding: 30px;
            background-color: #f8f9fa;
        }

        .navbar {
            background-color: #ffffff;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
            padding: 15px 25px;
        }

        .navbar .navbar-nav .nav-link {
            color: #495057;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        .navbar .navbar-nav .nav-link:hover {
            color: #007bff;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-weight: 600;
            font-size: 1.2rem;
        }

        .card-text {
            font-size: 1.4rem;
            font-weight: bold;
        }

        .card-primary {
            background-color: #007bff;
            color: white;
        }

        .card-success {
            background-color: #28a745;
            color: white;
        }

        .card-danger {
            background-color: #dc3545;
            color: white;
        }

        
        .card:hover {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            transform: translateY(-4px);
        }

       
        .chart-container {
            max-width: 800px;
            margin: 30px auto;
        }

        
        #wrapper.toggled #sidebar-wrapper {
            margin-left: -230px;
        }

        
        #menu-toggle {
            background-color: transparent;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 1rem;
            position: absolute;
            left: 10px;
        }


        html {
            scroll-behavior: smooth;
        }

        
        #sidebar-wrapper.toggled .nav-link {
            text-align: right;
            margin-left: 30px;
            padding: 10px;
        }

      
        #sidebar-wrapper .nav-item {
            transition: all 0.3s ease;
        }

        
        #sidebar-wrapper.toggled .nav-link span {
            display: none;
        }

        
        .logo-icon {
            font-size: 1.5rem;
            margin-right: 10px;
        }

        .logo-text {
            font-size: 1.25rem;
        }

    </style>
</head>

<body>

    <div class="d-flex" id="wrapper">

<<<<<<< HEAD
    <!-- Sidebar -->
<<<<<<< HEAD
    <div class="d-flex flex-column flex-shrink-0 p-3 bg-body-secondary shadow p-3 mb-5 bg-body rounded " style="width: 280px; height: 100vh;">
    <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none">
      <svg class="bi pe-none me-2" width="40" height="32"><use xlink:href="#bootstrap"/></svg>
      <span class="fs-4">Sidebar</span>
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a href="#" class="nav-link active" aria-current="page">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#home"/></svg>
          Home
=======
    <div class="d-flex flex-column flex-shrink-0 p-3" id="sidebar-wrapper">
        <a href="<?php esc("/employee");?>" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
            <i class="bi pe-none me-2" width="40" height="32"></i>
            <span class="fs-4 sidebar-heading">Dashboard</span>
>>>>>>> 63804bf (Save local changes before pull)
        </a>
        <hr>
        <ul class="nav flex-column mb-auto">
            <li class="nav-item">
                <a href="#" class="nav-link active">
                    <i class="fas fa-home sidebar-icon"></i>
                    Home
                </a>
            </li>
            <li>
            <a href="<?= base_url('employee')?>" class="nav-link">
                    <i class="fas fa-tachometer-alt sidebar-icon"></i>
                    Dashboard
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-building sidebar-icon"></i>
                    Departments
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-box sidebar-icon"></i>
                    Products
                </a>
            </li>
            <li>
                <a href="#" class="nav-link">
                    <i class="fas fa-users sidebar-icon"></i>
                    Customers
                </a>
            </li>
        </ul>
        <hr>
        <div class="dropdown">
            <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
                <strong>mdo</strong>
=======
      
        <div class="d-flex flex-column flex-shrink-0 p-3" id="sidebar-wrapper">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <i class="bi bi-house-door fs-3 me-2 logo-icon"></i>
                <span class="fs-4 fw-bold text-light logo-text text-center">Gestion Des Employes</span>
>>>>>>> 840c951 (Final product)
            </a>
            <hr class="logo-divider">
            <ul class="nav flex-column mb-auto">
                <li class="nav-item">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">
                        <i class="fas fa-home sidebar-icon"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('employee') ?>" class="nav-link active text-white">
                        <i class="fas fa-users sidebar-icon text-white"></i>
                        <span>Employees</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= base_url('department') ?>" class="nav-link text-white">
                        <i class="fas fa-building sidebar-icon text-white"></i>
                        <span>Departments</span>
                    </a>
                </li>
            </ul>
            <hr>
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center text-decoration-none dropdown-toggle text-white" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="\public\pic.png" alt="" width="32" height="32" class="rounded-circle me-2">
                    <strong>Admin</strong>
                </a>
                <ul class="dropdown-menu text-small shadow">
                    
                    <li><a class="dropdown-item" href="/">Sign out</a></li>
                </ul>
            </div>
        </div>

       
        <div id="page-content-wrapper">
            <div class="container-fluid">
                <button class="btn mb-4" id="menu-toggle">
                <i class="fa-solid fa-bars"></i>
                </button>
            </div>

            <div class="row mb-4">
                <div class="col-md-4 mb-3">
                    <div class="card card-primary">
                        <div class="card-body">
                            <h5 class="card-title">Total Employees</h5>
                            <p class="card-text">123</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card card-success">
                        <div class="card-body">
                            <h5 class="card-title">Active Employees</h5>
                            <p class="card-text">100</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card card-danger">
                        <div class="card-body">
                            <h5 class="card-title">Absent Today</h5>
                            <p class="card-text">5</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="chart-container">
                <canvas id="employeeChart"></canvas>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

    <script>
        document.getElementById('menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('wrapper').classList.toggle('toggled');
        });
    </script>

    <script>
        var ctx = document.getElementById('employeeChart').getContext('2d');
        var employeeChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Total', 'Active', 'Absent'],
                datasets: [{
                    label: 'Employees',
                    data: [123, 100, 5],
                    backgroundColor: ['#007bff', '#28a745', '#dc3545'],
                    borderColor: ['#0056b3', '#218838', '#c82333'],
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

</body>
</html>
