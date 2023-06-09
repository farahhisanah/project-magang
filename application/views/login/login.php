<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login Page</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">

</head>

<style type="text/css">
    .bg-login{
        background-image: url(<?php echo base_url("assets/img/bg.jpg");?>);
		background-repeat:no-repeat;
		
		background-size: cover;
      
    }
</style>

<body class="bg-login">
    <div class="container">

         <!-- Outer Row -->
		 <div class="row justify-content-center">

				<div class="col-lg-7">

					<div class="card o-hidden border-0 shadow-lg my-5">
						<div class="card-body p-0">
							<center>
								<img src="<?= base_url('assets/') ?>img/logo.png">
							</center>
							<!-- Nested Row within Card Body -->
							<div class="row">
							<div class="col-lg">
                                <div class="p-5">
									<?= $this->session->flashdata('message'); ?>
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
                                    </div>
                                    <form class="user" method="post" action="<?= base_url('login'); ?>" >
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="email" name="email" aria-describedby="emailHelp"
                                                placeholder="Enter Email Address..."
												value="<?= set_value('email'); ?>">
												<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?> 
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password" name="password" placeholder="Password">
												<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?> 
                                        </div>
                                        <button type="submit" class="btn btn-user btn-block" style="background-color:teal;color:white">
                                            Login
										</button>
                                    </form>
                                    <!-- <div class="text-center">
                                        <a class="small" href="<?= base_url('login/register') ?>">Create an Account!</a>
                                    </div> -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

</body>

</html>
