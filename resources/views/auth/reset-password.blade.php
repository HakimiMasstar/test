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
              <h1 class="fs-4 card-title fw-bold mb-4">Reset Password</h1>

                    <form method="POST" action="{{ route('password.store') }}">
                    @csrf

                    <img class="mb-3" src="/image/maslow_logo.png" alt="" width="50%" height="auto">
                    <div class="mb-3">

                        @if($errors->any())
                            <div class="alert alert-danger mb-3 p-2" style="font-size: 14px; border-radius: 2px;">
                                {{ $errors->first() }}
                            </div>
                        @endif

                        <!-- Password Reset Token -->
                        <input type="hidden" name="token" value="{{ $request->route('token') }}">

                        <input name="email" type="email" class="p-2 custom-form-input form-control @if($errors->has('email')) {{'is-invalid'}} @endif" placeholder="Email" value="{{ old('email', $request->email) }}" required autofocus autocomplete="username">

                    </div>
                    <div class="mb-3">

                        <input name="password" type="password" class="form-control p-2 custom-form-input @if($errors->has('password')) {{'is-invalid'}} @endif" placeholder="Password" required autocomplete="new-password">

                    </div>
                    <div class="mb-3">

                        <input name="password_confirmation" type="password" class="form-control p-2 custom-form-input @if($errors->has('password_confirmation')) {{'is-invalid'}} @endif" placeholder="Confirm Password" required autocomplete="new-password">

                    </div>

                    <button type="submit" class="btn btn-success">Reset Password</button>

                    </form>

            </div>
          </div>
        </div>
      </div>

    </body>
</html>
