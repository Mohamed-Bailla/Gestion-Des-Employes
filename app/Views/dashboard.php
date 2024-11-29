<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management Dashboard</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- FontAwesome for icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        #sidebar-wrapper {
            min-height: 100vh;
            background-color: #343a40;
            transition: all 0.3s;
            border: solid 1px #343a40;
            border-top-right-radius: 20px;
            border-bottom-right-radius: 20px;
        }
        #sidebar-wrapper .list-group-item {
            border: none;
        }
        .sidebar-heading {
            font-size: 1.25rem;
            font-weight: bold;
            text-align: center;
            color: #fff;
            padding: 1.5rem 0;
        }
        .content-wrapper {
            padding: 20px;
        }
        #wrapper.toggled #sidebar-wrapper{
            margin-left: -170px;
        }
        .sidebar-icon {
            margin-right: 10px; /* Space between icon and text */
        }
        /* When sidebar is collapsed, hide text but show icons */
        #sidebar-wrapper.toggled .sidebar-text {
            display: none;
        }
        #sidebar-wrapper.toggled .sidebar-icon {
            display: block;
        }
        /* When sidebar is expanded, show both icons and text */
        #sidebar-wrapper:not(.toggled) .sidebar-text {
            display: inline-block;
        }
        #sidebar-wrapper:not(.toggled) .sidebar-icon {
            display: inline-block;
        }
    </style>
</head>
<body>

<!-- Wrapper for the Sidebar and Content -->
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
    <div class="bg-dark text-white" id="sidebar-wrapper">
        <div class="sidebar-heading">Employee Management</div>
        <div class="list-group list-group-flush">
            <a href="#" class="list-group-item list-group-item-action text-dark">
                <i class="fas fa-tachometer-alt sidebar-icon"></i><span class="sidebar-text"> Dashboard</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action text-dark">
                <i class="fas fa-users sidebar-icon"></i><span class="sidebar-text"> Employees</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action text-dark">
                <i class="fas fa-building sidebar-icon"></i><span class="sidebar-text"> Departments</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action text-dark">
                <i class="fas fa-calendar-check sidebar-icon"></i><span class="sidebar-text"> Attendance</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action text-dark">
                <i class="fas fa-wallet sidebar-icon"></i><span class="sidebar-text"> Payroll</span>
            </a>
            <a href="#" class="list-group-item list-group-item-action text-dark">
                <i class="fas fa-cogs sidebar-icon"></i><span class="sidebar-text"> Settings</span>
            </a>
        </div>
    </div>

    <!-- Page Content Wrapper -->
    <div id="page-content-wrapper" class="w-100">

        <!-- Top Navbar with Toggle Button -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="btn btn-outline-dark" id="menu-toggle">
                <i class="fas fa-arrow-left"></i>
            </button>
            <div class="ml-auto">
                <span class="navbar-text">Welcome, Admin</span>
            </div>
        </nav>

        <!-- Main Content (Dashboard) -->
        <div class="content-wrapper">
            <div class="container-fluid">
                <!-- Row for Dashboard Stats -->
                <div class="row mb-4">
                    <div class="col-md-4 mb-3">
                        <div class="card text-white bg-primary">
                            <div class="card-body">
                                <h5 class="card-title">Total Employees</h5>
                                <p class="card-text">123</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h5 class="card-title">Active Employees</h5>
                                <p class="card-text">100</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 mb-3">
                        <div class="card text-white bg-danger">
                            <div class="card-body">
                                <h5 class="card-title">Absent Today</h5>
                                <p class="card-text">5</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Employees Table -->
                <div class="row">
                    <div class="col-md-12">
                        <h4>Employee List</h4>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Department</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>John Doe</td>
                                    <td>Software Engineer</td>
                                    <td>Development</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jane Smith</td>
                                    <td>HR Manager</td>
                                    <td>HR</td>
                                    <td>
                                        <button class="btn btn-warning btn-sm">Edit</button>
                                        <button class="btn btn-danger btn-sm">Delete</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- JavaScript to toggle sidebar -->
<script>
    document.getElementById('menu-toggle').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('wrapper').classList.toggle('toggled');
    });
</script>

</body>
</html>
