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
    
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/sidebars/">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link href="/css/bootstrap.min.css" rel="stylesheet">
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
        
        #emptyspace{
            margin-left: 150px;
        }
    </style>
</head>
<body>

<!-- Wrapper for the Sidebar and Content -->
<div class="d-flex" id="wrapper">

    <!-- Sidebar -->
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
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
          Dashboard
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#table"/></svg>
          Orders
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
          Products
        </a>
      </li>
      <li>
        <a href="#" class="nav-link link-body-emphasis">
          <svg class="bi pe-none me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
          Customers
        </a>
      </li>
    </ul>
    <hr>
    <div class="dropdown">
      <a href="#" class="d-flex align-items-center link-body-emphasis text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="https://github.com/mdo.png" alt="" width="32" height="32" class="rounded-circle me-2">
        <strong>mdo</strong>
      </a>
      <ul class="dropdown-menu text-small shadow">
        <li><a class="dropdown-item" href="#">New project...</a></li>
        <li><a class="dropdown-item" href="#">Settings</a></li>
        <li><a class="dropdown-item" href="#">Profile</a></li>
        <li><hr class="dropdown-divider"></li>
        <li><a class="dropdown-item" href="#">Sign out</a></li>
      </ul>
    </div>
  </div>

    <!-- Page Content Wrapper -->
    <div id="page-content-wrapper " class="w-100">
        <nav class="navbar navbar-expand-lg bg-body-secondary shadow-sm p-3 mb-5 bg-body rounded">
            <div class="container-fluid">
            <div class="collapse navbar-collapse " id="navbarScroll">
                 <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                 <li class="p-3 text-danger fs-5" ><a class="dropdown-item fw-bolder" href="/logout">Se Deconnecter</a></li>
                </ul>
             </div>
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
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

<!-- JavaScript to toggle sidebar -->
<script src="/js/bootstrap.bundle.min.js">
    document.getElementById('menu-toggle').addEventListener('click', function(e) {
        e.preventDefault();
        document.getElementById('wrapper').classList.toggle('toggled');
    });

    
</script>

</body>
</html>
