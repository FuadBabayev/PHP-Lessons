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
                        <h2>Menu Update<small>different form elements

                                <?php
                                if (isset($_SESSION['menuUpdated'])) {
                                    if ($_SESSION['menuUpdated'] == 'ok') {
                                        ?>
                                        <span
                                            style="background-color: green; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                                            Succesfully Updated!</span>
                                        <?php
                                    } else if ($_SESSION['menuUpdated'] == 'no') {
                                        ?>
                                            <span
                                                style="background-color: red; padding: 5px; display: inline-block; border-radius: 5px; color: #fff; margin-left: 15px;">
                                                Something went wrong!</span>
                                        <?php
                                    }
                                }
                                unset($_SESSION['menuUpdated']);             // ! Eger ki bu hisse olmasa update olanda span gorsenecek ama refresh edende hec zaman getmiyecek
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

                            <input type="hidden" name="id" value="<?php echo $read_one_menu['id']; ?>">

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Web Link <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required" value="<?php 
                                    echo $read_title['web_url'];
                                    // $_SERVER['HTTP_HOST']."/".$_SERVER['REQUEST_URI'];
                                    ?>page-<?php echo seo($read_one_menu['name']) ?>"
                                        class="form-control col-md-7 col-xs-12" name="time" disabled>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu name
                                    <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="name"
                                        value="<?php echo $read_one_menu['name']; ?>">
                                </div>
                            </div>

                            <!-- CK Editor -->
                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Detail <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <textarea class="ckeditor" id="editor1"
                                        name="detail"><?php echo $read_one_menu['detail']; ?></textarea>
                                </div>
                            </div>
                            <script type="text/javascript">
                                CKEDITOR.replace('editor1',
                                    {
                                        filebrowserBrowseUrl: 'ckfinder/ckfinder.html',
                                        filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                                        filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash',
                                        filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                        filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                        filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
                                        forcePasteAsPlainText: true
                                    }
                                );
                            </script>
                            <!-- CK Editor -->


                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Menu URL
                                    <span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" 
                                        class="form-control col-md-7 col-xs-12" name="url"
                                        value="<?php echo $read_one_menu['url']; ?>">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Line<span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <input type="text" id="first-name" required="required"
                                        class="form-control col-md-7 col-xs-12" name="line"
                                        value="<?php echo $read_one_menu['line']; ?>" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Status <span
                                        class="required">*</span></label>
                                <div class="col-md-6 col-sm-6 col-xs-12">
                                    <select class="form-control" id="heard" name="status" required>
                                        <option value="1" <?php echo $read_one_menu['status'] == '1' ? 'selected=""' : '' ?>>Admin</option>
                                        <option value="0" <?php echo $read_one_menu['status'] == '0' ? 'selected=""' : '' ?>>Customer</option>
                                    </select>
                                </div>
                            </div>


                            <div class="ln_solid"></div>
                            <div class="form-group">
                                <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3"
                                    style="display: flex; justify-content: end;">
                                    <button type="submit" class="btn btn-success" name="update_menu">Update</button>
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