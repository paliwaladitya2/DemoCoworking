<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
  <!-- Link to Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-container {
      background-color: #ffffff;
      border-radius: 10px;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
      padding: 30px;
      width: 400px;
    }
    .login-container h2 {
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2 class="text-center">Login</h2>
    @if(Session::has('danger'))
        <div class='alert alert-danger'>
            {{ Session::get('danger') }}
        </div>
    @endif
    <form action="{{ Route('issuecheck') }}" method="post">
        @csrf
      <div class="mb-3">
        <label for="username" class="form-label">Email</label>
        <input type="text" name="email" class="form-control" id="username" placeholder="Enter your email">
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password">
      </div>
      <div class="mb-3">
        <button type="submit" class="btn btn-primary w-100">Login</button>
      </div>
    </form>
  </div>

  <!-- Link to Bootstrap JS and optional Popper.js and jQuery for dropdowns and tooltips -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
