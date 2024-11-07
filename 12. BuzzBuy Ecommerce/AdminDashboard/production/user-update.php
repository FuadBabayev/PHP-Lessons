<?php include 'header.php';
?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>User Edit<small>different form elements

                                <?php
                                if (isset($_SESSION['userUpdated'])) {
                                    if ($_SESSION['userUpdated'] == 'ok') {
                                        ?>
                                        <span
                                            style="background-color: green; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                                            Succesfully Updated!</span>
                                        <?php
                                    } else if ($_SESSION['userUpdated'] == 'no') {
                                        ?>
                                            <span
                                                style="background-color: red; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                                                Something went wrong!</span>
                                        <?php
                                    }
                                }
                                unset($_SESSION['userUpdated']);             // ! Eger ki bu hisse olmasa update olanda span gorsenecek ama refresh edende hec zaman getmiyecek
                                ?>

                            </small>
                        </h2>
                        <?php

                        ?>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button"
                                    aria-expanded="false"><i class="fa fa-wrench"></i></a>
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
                        <form action="../connection/netting.php" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">

                            <input type="hidden" name="id" value="<?php echo $read_one_user['id']; ?>">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Seriya №<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="sx"
                                        value="<?php echo $read_one_user['sx']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Fullname <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="fullname"
                                        value="<?php echo $read_one_user['fullname']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Email <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="email"
                                        value="<?php echo $read_one_user['email']; ?>" disabled="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Phone <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="gsm"
                                        value="<?php echo $read_one_user['gsm']; ?>">
                                </div>
                            </div>

                            <?php $time = explode(" ", $read_one_user['time']); ?>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Created Date <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="date" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="time"
                                        value="<?php echo $time[0] ?>" disabled="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Created Time <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="time" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="time"
                                        value="<?php echo $time[1] ?>" disabled="">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" id="heard" name="status" required>
                                        <option value="1" <?php echo $read_one_user['status'] == '1' ? 'selected=""'   : '' ?> >Admin</option>
                                        <option value="0" <?php echo $read_one_user['status'] == '0' ? 'selected=""'   : '' ?>>Customer</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"
                                    style="display: flex; justify-content: end;">
                                    <button type="submit" class="btn btn-success" name="update_user">Update</button>
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