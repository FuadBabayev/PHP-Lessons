<?php include 'header.php'; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>SMTP Settings<small>different form elements
                    
                        <?php
                            if(isset($_SESSION['smtpUpdated'])){
                                if($_SESSION['smtpUpdated'] == 'ok'){
                        ?>
                        <span style="background-color: green; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;"> Succesfully Updated!</span>                        
                        <?php
                            } else if ($_SESSION['smtpUpdated'] == 'no'){
                        ?>
                        <span style="background-color: red; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;"> Something went wrong!</span>                    
                        <?php
                                }
                            }
                            unset($_SESSION['smtpUpdated']);             // ! Eger ki bu hisse olmasa update olanda span gorsenecek ama refresh edende hec zaman getmiyecek
                        ?>

                        </small>                    
                    </h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Settings 1</a></li>
                                    <li><a href="#">Settings 2</a></li>
                                </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content"><br />
                        <form action="../connection/netting.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMTP Host<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="smtp_host"
                                    value="<?php echo $read_title['smtp_host'];?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMTP User<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="smtp_user"
                                    value="<?php echo $read_title['smtp_user'];?>" >
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMTP Password<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="smtp_password" 
                                    value="<?php echo $read_title['smtp_password'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">SMTP Port <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12" name="smtp_port" 
                                    value="<?php echo $read_title['smtp_port'];?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3" style="display: flex; justify-content: end;">
                                    <button type="submit" class="btn btn-success" name="update_smtp">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php include './footer.php'; ?>