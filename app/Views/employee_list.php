<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500;700&display=swap" rel="stylesheet">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Dashboard</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .content-wrapper {
            padding: 30px 0;
        }
        .card {
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }
        .table th, .table td {
            vertical-align: middle;
            text-align: center;
        }
        .table thead {
            background-color: #f0f4f7;
        }
        .table td {
            background-color: #fff;
        }
        .table th {
            color: #495057;
            font-weight: 600;
        }
        .btn-custom {
            border-radius: 5px;
        }
        .action-buttons .btn {
            margin-right: 5px;
        }
        .card-title {
            font-size: 1.25rem;
            font-weight: 600;
        }
        .card-text {
            font-size: 1.75rem;
            font-weight: 700;
        }
        .container-fluid {
            max-width: 1200px;
        }
        h4 {
            font-size: 1.5rem;
            font-weight: 700;
            margin-bottom: 20px;
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

      
        #sidebar-wrapper .nav-item .nav-link.active, 
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

        .navbar .navbar-nav .nav-link.fs-5 {
            font-size: 1.1rem;
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

        
        #wrapper.toggled #sidebar-wrapper {
            margin-left: -280px;
        }

        
        #menu-toggle {
            background-color: #343a40;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 1rem;
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

      

        .btn-add-employee {
            background-color: #007bff;
            color: #fff;
            border-radius: 5px;
            padding: 10px 20px;
            font-size: 1rem;
            transition: background-color 0.3s ease;
        }

        .btn-add-employee:hover {
            background-color: #0056b3;
        }

        html{
            scroll-behavior: smooth;
        }


    </style>
</head>
<body>


<div class="d-flex" id="wrapper">

<div class="d-flex flex-column flex-shrink-0 p-3" id="sidebar-wrapper">
            <a href="#" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
                <i class="bi bi-house-door fs-3 me-2 logo-icon"></i>
                <span class="fs-4 fw-bold text-light logo-text text-center">Gestion Des Employes</span>
            </a>
            <hr class="logo-divider">

            <style>
           
                body {
                    font-family: 'DM Sans', sans-serif;
                }

                .logo-icon, .logo-text {
                    transition: all 0.3s ease;
                }

             
                .logo-icon:hover, .logo-text:hover {
                    color: #007bff; 
                    transform: scale(1.1); 
                }

                .logo-text {
                    font-family: 'DM Sans', sans-serif;
                    font-weight: 700; 
                    letter-spacing: 0.5px;
                }

               
                .logo-divider {
                    border: 0;
                    border-top: 2px solid #fff;
                    margin-top: 10px; 
                }
            </style>


    
    <ul class="nav flex-column mb-auto">
        <li class="nav-item">
            <a href="<?= site_url('dashboard') ?>" class="nav-link ">
                <i class="fas fa-home sidebar-icon"></i>
                Home
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('employee') ?>" class="nav-link text-white">
                <i class="fas fa-users sidebar-icon text-white"></i>
                Employees
            </a>
        </li>
        <li class="nav-item">
            <a href="<?= base_url('department') ?>" class="nav-link text-white">
                <i class="fas fa-building sidebar-icon text-white"></i>
                Departments
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

            <script>
        document.getElementById('menu-toggle').addEventListener('click', function (e) {
            e.preventDefault();
            document.getElementById('wrapper').classList.toggle('toggled');
        });
    </script>

    <div class="card">
    <div class="card-header">
        <h3>Employee List</h3>
    </div>
    <div class="card-body">
        <a href="<?= base_url('employee/create'); ?>" class="btn btn-primary mb-3">
            <i class="fas fa-plus"></i> Add Employee
        </a>
        <a href="<?= base_url('employees/pdf'); ?>" class="btn btn-danger mb-3">
            <i class="fas fa-file-pdf"></i> Download PDF
        </a>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Employee ID</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Status</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($employees as $employee): ?>
                <tr>
                    <td><?= esc($employee['name']); ?></td>
                    <td><?= esc($employee['position']); ?></td>
                    <td><?= esc($employee['department_name']); ?></td>
                    <td><span class="badge bg-success"><?= esc($emp['status'] ?? 'Active'); ?></span></td>
                    <td class="actions">
                        <a href="<?= base_url('employee/edit/' . $employee['id']); ?>" class="btn btn-info btn-sm btn-tooltip" data-tooltip="Edit">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <a href="<?= base_url('employee/delete/' . $employee['id']); ?>" class="btn btn-danger btn-sm btn-tooltip" data-tooltip="Delete" onclick="return confirm('Are you sure you want to delete this employee?')">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="sidebars.js"></script></body>

</body>
</html>
