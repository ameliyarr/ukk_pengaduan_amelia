<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Register</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <?php
                if(!empty(session()->getFlashdata("error"))):
                ?>
                <div class="alert alert-danger">
                    <?= session()->getFlashdata("error")?>
                </div>
                <?php endif?>
                <div class="row justify-content-center">
                
                    <div class="col">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Silahkan Login!</h1>
                            </div>
                            <form class="user" method="post" action="saveregister">
                                <div class="form-group row">
                                </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="nik" name="nik"
                                            placeholder="Nik" required>
                                    </div>
                                    
                                    <div class="form-group ">
                                    
                                        <input type="text" class="form-control form-control-user" id="username" name="nama"
                                            placeholder="Nama" required>
                                    </div>
                                    
                                    <div class="form-group">
                                    
                                        <input type="text" class="form-control form-control-user" id="username" name="username"
                                            placeholder="Username" required>
                                    </div>
                                    <div class="form-group">
                                    
                                        <input type="text" class="form-control form-control-user" id="telp" name="telp"
                                            placeholder="Telepon" required>
                                    </div>
                                    
                                    <div class="form-group row">
                                    <div class="col">
                                        <input type="password" class="form-control form-control-user"
                                            id="password" name="password" placeholder="Password" required>
                                    </div>
                                    </div>
                                    <div class="form-group row">
                                    <div class="col">
                                        <input type="password2" class="form-control form-control-user"
                                            id="password2" name="password2"placeholder="Ulangi Password" required>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                                <hr>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>