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
    <!-- penutup form -->
   