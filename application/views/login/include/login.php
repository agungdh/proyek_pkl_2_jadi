<!DOCTYPE>
<html>
<head>
    <meta charset="utf-8">
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="Coming soon, Bootstrap, Bootstrap 3.0, Free Coming Soon, free coming soon, free template, coming soon template, Html template, html template, html5, Code lab, codelab, codelab coming soon template, bootstrap coming soon template">
    <title>Mobilku!</title>
    <!-- ============ Google fonts ============ -->
    <link href='http://fonts.googleapis.com/css?family=EB+Garamond' rel='stylesheet'
        type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300,800'
        rel='stylesheet' type='text/css' />
    <!-- ============ Add custom CSS here ============ -->
    <link href="<?php echo base_url('assets_login/'); ?>css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets_login/'); ?>css/style.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('assets_login/'); ?>css/font-awesome.css" rel="stylesheet" type="text/css" />
</head>


<body>
    <div id="form1" runat="server">
        <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">MOBILKU </a>
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder">
                        <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span
                            class="icon-bar"></span><span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menubuilder">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Home</a> </li>
                        <li><a href="<?php echo base_url('upload/vidio/tutorial.mp4'); ?>">Tutorial</a> </li>
                        <li><a href="<?php echo base_url('Web/tampil_login'); ?>">Login</a> </li>
                    </ul>
                </div>
            </div>
        </div>

        
        <div class="container">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 text-center">
                <div id="banner">
                    <h1>
                        Manajemen Informatika <strong> 2017</strong>Aplication Mobilku!</h1>
                    <h5>
                        <strong>Mobilku.polinela.ac.id</strong></h5>
                </div>
            </div>

                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="registrationform">
                    <div class="form-horizontal">
                        <form action="<?php echo base_url()."Login/getlogin"; ?>" method="post">
                            <legend>Login Form <i class="fa fa-user pull-right"></i></legend>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" id="label1"> Username </label>
                                <div class="col-lg-10">
                                    <input type="text" name="username" class="form-control" placeholder="username" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-labe"> Password </label>
                                <div class="col-lg-10">
                                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button ID="btnSubmit" class="btn btn-primary" type="submit"> Login </button>                             
                                </div>
                            </div>

                        </form>

                        <form action="<?php echo base_url()."Web/getakun"; ?>" method="post">
                            <legend>Registration User <i class="fa fa-pencil pull-right"></i></legend>
                            <div class="form-group">
                                <label class="col-lg-2 control-label" id="label1"> NPM / Username </label>
                                <div class="col-lg-10">
                                    <input type="text" name="username" class="form-control" required="Inputkan NPM"  placeholder="NPM">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-labe"> Password </label>
                                <div class="col-lg-10">
                                    <input type="password" name="password" class="form-control" required="" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label" id="label1"> Nama Lengkap </label>
                                <div class="col-lg-10">
                                    <input type="text" name="nama" class="form-control" required="" placeholder="Nama Lengkap">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label" id="label1"> Alamat </label>
                                <div class="col-lg-10">
                                    <input type="text" name="alamat" class="form-control" required="" placeholder="Alamat">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-lg-2 control-label" id="label1"> No Telfon </label>
                                <div class="col-lg-10">
                                    <input type="text" name="no" class="form-control" required="" placeholder="NO Telphon">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-10 col-lg-offset-2">
                                    <button ID="btnSubmit" class="btn btn-danger" type="submit"> Create </button>                             
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
            </div>

            <!-- penutup div conainer -->
        </div>
    </div>

     <script src="<?php echo base_url('assets_login/'); ?>js/jquery.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets_login/'); ?>js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url('assets_login/'); ?>js/jquery.backstretch.js" type="text/javascript"></script>
    <script type="text/javascript">
        'use strict';

        /* ========================== */
        /* ::::::: Backstrech ::::::: */
        /* ========================== */
        // You may also attach Backstretch to a block-level element
        $.backstretch(
        [
            "<?php echo base_url('assets_login/'); ?>img/44.jpg",
            "<?php echo base_url('assets_login/'); ?>img/colorful.jpg",
            "<?php echo base_url('assets_login/'); ?>img/34.jpg",
            "<?php echo base_url('assets_login/'); ?>img/images.jpg"
        ],

        {
            duration: 4500,
            fade: 1500
        }
    );
    </script>
    </form>
</body>
</html>

    <!-- penutup form -->
   