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
              <h1 class="fs-4 card-title fw-bold mb-4">Email verification</h1>

                    <form method="POST" action="{{ route('verification.send') }}">
                    @csrf

                    <div class="mb-5">

                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4" style="color: green;">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @else
                            <p>{{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}</p>
                        @endif

                    </div>

                    <button type="submit" class="btn btn-success">Resend Verification Email</button>

                    </form>

            </div>
          </div>
        </div>
      </div>

    </body>
</html>
