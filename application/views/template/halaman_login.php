<!DOCTYPE html>
<html lang="en">
<head>
    <title>Aplikasi Prestasi Mahasiswa</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="<?php echo base_url('assets/login/images/'); ?>icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/'); ?>bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/'); ?>font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/fonts/'); ?>Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/'); ?>animate/animate.css">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/'); ?>css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/vendor/'); ?>select2/select2.min.css">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/'); ?>util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/login/css/'); ?>main.css">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('<?php echo base_url('assets/login/'); ?>images/1.jpg');">
            <div class="wrap-login100 p-t-190 p-b-30">
                <form action="<?php echo base_url('welcome/aksi_login'); ?>" method="post" class="login100-form validate-form">
                    <div class="login100-form-avatar">
                        <img src="<?php echo base_url('assets/login/images/'); ?>logo.png" alt="AVATAR">
                    </div>

                    <span class="login100-form-title p-t-20 p-b-45">
                        Aplikasi Prestasi Mahasiswa
                    </span>

                        <div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
                            <input class="input100" type="text" name="username" placeholder="Username">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-user"></i>
                            </span>
                        </div>

                        <div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
                            <input class="input100" type="password" name="password" placeholder="Password">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class="fa fa-lock"></i>
                            </span>
                        </div>

                        <div class="container-login100-form-btn p-t-10">
                            <button class="login100-form-btn" type="submit">
                                Login
                            </button>
                        </div>

                    <div class="text-center w-full p-t-25 p-b-230">
                        
                    </div>

                    <div class="text-center w-full">
                        
                    </div>
                </form>
            </div>
        </div>
    </div>

     <?php
      if ($this->input->get('error') == '1') {
        ?>
          <script type="text/javascript">
            alert("Password salah");
          </script>
        <?php
      }
    ?>  
    
<!--===============================================================================================-->  
    <script src="<?php echo base_url('assets/login/vendor/'); ?>jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/vendor/'); ?>bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url('assets/login/vendor/'); ?>bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/vendor/'); ?>select2/select2.min.js"></script>
<!--===============================================================================================-->
    <script src="<?php echo base_url('assets/login/'); ?>js/main.js"></script>

</body>
</html>