<!DOCTYPE html>
<html lang="en">
<head>
  <title>ITS Coworking Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        ul {
            margin-top: 1rem !important;
            margin-bottom: 1rem;
        }
    </style>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)"><img src="images/its.png" style="mix-blend-mode:multiply;"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="javascript:void(0)">Link</a>
        </li>
      </ul>
      <div class="d-flex" style="align-items: center;">
        <input class="form-control me-2" type="text" placeholder="Search" style="height:2.5rem;">
        <ul>
          <li class="nav-item dropdown">
            <a class="dropdown-toggle navbar-brand" href="#" role="button" data-bs-toggle="dropdown"><img src="images/its.png" style="mix-blend-mode:multiply;"></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ Route('dashboard') }}">Go To Dashboard</a></li>
              <li><a class="dropdown-item" href="{{ Route('logout') }}">Logout</a></li>
            </ul>
          </li>
        </ul>
       </div>
       
    </div>
  </div>
</nav>

<div class="container-fluid mt-3">
  {{-- <h3>Navbar Forms</h3>
  <p>You can also include forms inside the navigation bar.</p> --}}
</div>

</body>
</html>


