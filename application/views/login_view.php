<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="<?php echo base_url('assets/login/images/favicon.ico');?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/login/fonts/icomoon/style.css') ?>">

    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/owl.carousel.min.css')?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/bootstrap.min.css')?>">
    
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/login/css/style.css')?>">

    <title>LOGIN</title>
  </head>
  <body>
  

  <div class="half">
    <div class="bg order-1 order-md-2" style="background-image: url('<?php echo base_url('assets/login/images/bg2.png') ?>');"></div>
    <div class="contents order-2 order-md-1">

      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-6">
            <div class="form-block">
              <div class="text-center mb-5">
              <h3><strong>WELCOME!</strong></h3>
              <h6>Login To Continue</h6>
              </div>

              <form class="login100-form validate-form" action="<?php echo site_url('login/auth');?>" method="post">
                <div class="form-group first">
                  <label for="username">Username</label>
                  <input type="text" class="form-control" name="username" placeholder="Your Username" id="username">
                </div>
                <div class="form-group last mb-3">
                  <label for="password">Password</label>
                  <input type="password" class="form-control" name="password" placeholder="Your Password" id="password">
                </div>
                
                <div class="d-sm-flex mb-5 align-items-center">
                  <label class="control control--checkbox mb-3 mb-sm-0"><span class="caption">Remember me</span>
                    <input type="checkbox" name="rememberusername" id="rememberusername" value="1">
                    <div class="control__indicator"></div>
                  </label>

                  
                  <span class="ml-auto"><a href="#" class="forgot-pass">Forgot Password</a></span> 
                </div>

                <input type="submit" value="LOGIN" class="btn btn-block btn-primary">

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    

    <script src="<?php echo base_url('assets/login/js/jquery-3.3.1.min.js')?>"></script>
    <script src="<?php echo base_url('assets/login/js/popper.min.js')?>"></script>
    <script src="<?php echo base_url('assets/login/js/bootstrap.min.js')?>"></script>
    <script src="<?php echo base_url('assets/login/js/main.js')?>"></script>
  </body>
</html>