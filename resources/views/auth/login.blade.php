<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Peduli Diri | Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/sb-admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="vendor/sb-admin/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="vendor/sb-admin/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top" style="background-color : #f2f2f2">


    <div id="app">
      <div class="login-brand">
        <h1 class="text-center mt-3 brand-logo" ><b> Peduli Diri </b></h1>
        <style>
          .login-brand {
            margin: 20px 0;
            margin-bottom: 40px;
            font-size: 24px;
            text-transform: uppercase;
            letter-spacing: 4px;
            color: #4e73df;
            text-align: center; }
        </style>
      </div>
        <section class="section">
          <div class="container mt-5">
            <div class="row">
              <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
    
                @if ($message = Session::get('message'))
                  <div class="alert alert-info alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>	
                    <strong>{{ $message }}</strong>
                  </div>
                @endif

                @if ($message = Session::get('LoginError'))
                <div class="alert alert-danger alert-block">
                  <button type="button" class="close" data-dismiss="alert">×</button>	
                <strong>{{ $message }}</strong>
                </div>
              @endif

                <div class="card card-primary o-hidden border-0 mt-3">
                    <div class="text-center">
                        <h5 class="h5 text-gray-900 mb-3 mt-3">Silakan Login</h5>
                        <hr>
                    </div>
    
                  <div class="card-body o-hidden border-0 shadow-lg">
                    <form class="user" method="POST" action="/postlogin">
                      @csrf
                        <div class="form-group mb-4">
                          Nama
                            <input id="email" type="text" class="form-control" name="name" required autofocus>
                        </div>
                        <div class="form-group mb-4">
                          NIK
                            <input id="password" type="text" class="form-control" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary btn-user btn-block mt-4" style="font-size: 13px; height: 44px">
                            Login
                        </button>
                      </form>
                      <hr>
                      <div class="text-center">
                        <a href="/registrasi"><button style="font-size: 13px; height: 44px" class="btn btn-primary btn-user btn-block mt-4 rounded-pill"> Saya Pengguna Baru </button></a>
                      </div>
                  </div>
                  </div>
                </div>
            </div>
          </div>
        </section>
      </div>

 <!-- Bootstrap core JavaScript-->
 <script src="vendor/sb-admin/vendor/jquery/jquery.min.js"></script>
 <script src="vendor/sb-admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="vendor/sb-admin/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->
 <script src="vendor/sb-admin/js/sb-admin-2.min.js"></script>

 <!-- Page level plugins -->
 <script src="vendor/sb-admin/vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="vendor/sb-admin/vendor/datatables/dataTables.bootstrap4.min.js"></script>

 <!-- Page level custom scripts -->
 <script src="vendor/sb-admin/js/demo/datatables-demo.js"></script>

 <script src="https://kit.fontawesome.com/adc6c882c5.js" crossorigin="anonymous"></script>

</body>

</html>
