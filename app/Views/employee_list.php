<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    
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

        /* Sidebar */
        #sidebar-wrapper {
            min-height: 100vh;
            background-color: #343a40;
            color: #fff;
            width: 280px;
            transition: all 0.3s ease;
           
            box-shadow: 2px 0px 10px rgba(0, 0, 0, 0.1);
        }

        /* Sidebar links */
        #sidebar-wrapper .nav-item .nav-link {
            color: #dcdfe1;
            font-weight: 500;
            padding: 15px 20px;
            font-size: 1rem;
            text-transform: capitalize;
            transition: background-color 0.3s ease;
        }

        /* Active state for sidebar links */
        #sidebar-wrapper .nav-item .nav-link.active, 
        #sidebar-wrapper .nav-item .nav-link:hover {
            background-color: #495057;
            color: #fff;
            border-radius: 5px;
        }

        /* Sidebar header */
        .sidebar-heading {
            font-size: 1.5rem;
            font-weight: bold;
            color: #fff;
            text-align: center;
            padding: 20px;
            border-bottom: 2px solid #495057;
            margin-bottom: 20px;
        }

        /* Content Wrapper */
        #page-content-wrapper {
            flex-grow: 1;
            padding: 30px;
            background-color: #f8f9fa;
        }

        /* Navbar */
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

        /* Cards */
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

        /* Responsive Sidebar */
        #wrapper.toggled #sidebar-wrapper {
            margin-left: -270px;
        }

        /* Toggle button */
        #menu-toggle {
            background-color: #343a40;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            font-size: 1rem;
        }

        #menu-toggle:hover {
            background-color: #495057;
        }
    </style>
</head>
<body>

<!-- Wrapper for the Sidebar and Content -->
<div class="d-flex" id="wrapper">

<!-- Sidebar -->
<div class="d-flex flex-column flex-shrink-0 p-3" id="sidebar-wrapper">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-decoration-none">
        <i class="bi pe-none me-2" width="40" height="32"></i>
        <span class="fs-4 sidebar-heading">Dashboard</span>
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
            <a href="<?= base_url('employee') ?>" class="nav-link">
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
            <img src="" alt="" width="32" height="32" class="rounded-circle me-2">
            <strong>mdo</strong>
        </a>
        <ul class="dropdown-menu text-small shadow">
         
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="/">Sign out</a></li>
        </ul>
    </div>
</div>

<!-- Page Content Wrapper -->
<div id="page-content-wrapper">
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="btn" id="menu-toggle">
                <i class="fas fa-arrow-left"></i>
            </button>
           
        </div>
    </nav>



        <h4 class="my-2">Employee List</h4>
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Position</th>
                        <th>Department</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($employees as $emp): ?>
                <tr>
                    <td><?= esc($emp['name']); ?></td>
                    <td><?= esc($emp['position']); ?></td>
                    <td><?= esc($emp['department_name']); ?></td> <!-- Display department name from the join -->
                    <td><span class="badge bg-success"><?= esc($emp['status'] ?? 'Active'); ?></span></td>
                    <td class="action-buttons">
                        <a href="<?= base_url('/employee/edit/' . $emp['id']); ?>" class="btn btn-info btn-sm">
                            <i class="fas fa-pencil-alt"></i> Edit
                        </a>
                        <a href="<?= base_url('/employee/delete/' . $emp['id']); ?>" class="btn btn-danger btn-sm">
                            <i class="fas fa-trash-alt"></i> Delete
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
<script>
    // Toggle Sidebar
    document.getElementById('menu-toggle').addEventListener('click', function() {
        document.getElementById('wrapper').classList.toggle('toggled');
    });
</script>

</body>
</html>
