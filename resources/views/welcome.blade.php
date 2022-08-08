<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins')}}/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('plugins')}}/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist')}}/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="min-height: 496.8px;background-color: #58dfa0;">
  <div class="container-fluid">
    <div class="row">
      <div class="col-8" style="padding-top: 50px;">
        <div class="card rounded-pill">
          <div class="card-body">
            <img src="{{asset('images')}}/rekayasa-industri.png" alt="">
          </div>
        </div>
      </div>
      <div class="col-4">
        <div class="login-box">
          <div class="card">
            <div class="card-body login-card-body" style="border-radius: 10px;">
              <p class="login-box-msg" style="padding-top: 25px;"><b style="font-size: 35px;">LOGIN</b></p>

              <form action="{{url('login')}}" method="post">
                @csrf
                <div class="mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input
                    type="email"
                    class="form-control"
                    id="exampleInputEmail1"
                    aria-describedby="emailHelp"
                    name="email"
                  >
                </div>
                <div class="mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input
                    type="password"
                    class="form-control"
                    id="exampleInputPassword1"
                    name="password"
                  >
                </div>
                <div class="row justify-content-center">
                  <div class="col-4">
                    <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.login-card-body -->
          </div>
        </div>
      </div>
    </div>
  </div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('plugins')}}/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('plugins')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist')}}/js/adminlte.min.js"></script>
</body>
</html>
