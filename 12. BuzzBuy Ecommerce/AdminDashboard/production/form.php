<?php include 'header.php'; ?>

<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Main Settings<small>different form elements

                                <?php
                                if (isset($_SESSION['titleUpdated'])) {
                                    if ($_SESSION['titleUpdated'] == 'ok') {
                                        ?>
                                        <span
                                            style="background-color: green; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                                            Succesfully Updated!</span>
                                        <?php
                                    } else if ($_SESSION['titleUpdated'] == 'no') {
                                        ?>
                                            <span
                                                style="background-color: red; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                                                Something went wrong!</span>
                                        <?php
                                    }
                                }
                                unset($_SESSION['titleUpdated']);             // ! Eger ki bu hisse olmasa update olanda span gorsenecek ama refresh edende hec zaman getmiyecek
                                ?>

                                <?php
                                if (isset($_SESSION['logoUpdated'])) {
                                    if ($_SESSION['logoUpdated'] == 'ok') { ?>
                                        <span style="background-color: green; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">Logo Succesfully Updated!</span>
                                <?php } else if ($_SESSION['logoUpdated'] == 'no') { ?>
                                        <span style="background-color: red; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">Something went wrong!</span>
                                 <?php } } unset($_SESSION['logoUpdated']); ?>

                            </small>
                        </h2>
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

                        <!--//! UPLOADING PICTURES INTO DATABASE (enctype="multipart/form-data" mutleq yazilmalidir sekil yuklenmesi ucun) -->
                        <form action="../connection/netting.php" method="POST" enctype="multipart/form-data"
                            id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Website Logo
                                    <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <?php
                                    if (strlen($read_title['logo']) > 0) { ?>
                                        <img width="200" src="images/<?php echo $read_title['logo']; ?>">
                                        <?php
                                    } else { ?>
                                        <img width="200" src="images/nologo.png">
                                        <?php
                                    }
                                    ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Choose
                                    Photo <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="file" id="first-name" class="form-control col-md-7 col-xs-12"
                                        name="website_logo">
                                </div>
                            </div>

                            <!-- //! Burada evvelki Logo URL -da gonderirik ki eger ard arda sekil gonderilse evvelkini silsin -->
                            <input type="hidden" name="website_logo_previous" value="<?php echo $read_title['logo'] ?>">

                            <div align="right" class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                <button type="submit" name="update_logo" class="btn btn-primary">Update</button>
                            </div>

                        </form>


                        <hr>



                        <form action="../connection/netting.php" method="POST" id="demo-form2" data-parsley-validate
                            class="form-horizontal form-label-left">
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Website Title
                                    <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="title"
                                        value="<?php echo $read_title['title']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description
                                    <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="description"
                                        value="<?php echo $read_title['description']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Keywords <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="keywords"
                                        value="<?php echo $read_title['keywords']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Author <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="author"
                                        value="<?php echo $read_title['author']; ?>">
                                </div>
                            </div>
                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"
                                    style="display: flex; justify-content: end;">
                                    <button type="submit" class="btn btn-success" name="update_title">Update</button>
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