<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Alphv - assigment</title>

<!-- CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">

<!-- JavaScript (order matters, jQuery first then Bootstrap JS) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  </head>
  <body>

  <section class="vh-100 mt-5">
    <div class="container h-100">
      <div class="row justify-content-sm-center h-100">
        <div class="col-xxl-4 col-xl-5 col-lg-5 col-md-7 col-sm-9">
          <div class="card shadow-lg">
            <div class="card-body p-5">
              <h1 class="fs-4 card-title fw-bold mb-4">Login</h1>

              <form action="{{route('login')}}" method="POST">
                @csrf

                @if($errors->any())
                    <div class="alert alert-danger mb-3 p-2" style="font-size: 14px; border-radius: 2px;">
                        {{ $errors->first() }}
                    </div>
                @endif

                <div class="mb-3">
                  <label class="mb-2 text-muted" for="uid">Email</label>
                  <input type="email" class="form-control @if($errors->has('email')) {{'is-invalid'}} @endif" name="email" autofocus>
                </div>

                <div class="mb-3">
                  <div class="mb-2 w-100">
                    <label class="text-muted" for="password">Password</label>
                    <a href="{{route('password.request')}}" class="float-end">Forgot Password?</a>
                  </div>
                  <input type="password" class="form-control @if($errors->has('email')) {{'is-invalid'}} @endif" name="password">
                </div>

                <div class="d-flex align-items-center">
                  <button type="submit" name="login" class="btn btn-success ms-auto">Login</button>
                </div>
              </form>
            </div>
            <div class="card-footer py-3 border-0">
              <div class="text-center">
                No account? <a href="{{route('register')}}">Register</a>
              </div>
            </div>
          </div>
        </div>
      </div>

    </body>
</html>
