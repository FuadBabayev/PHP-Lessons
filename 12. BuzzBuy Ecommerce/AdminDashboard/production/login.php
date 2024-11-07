<?php include '../connection/netting.php' ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BuzzBuy Ecommerce</title>
    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
    <div>

        <a class="hiddenanchor" id="signup"></a>
        <a class="hiddenanchor" id="signin"></a>
        <div class="login_wrapper">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="../connection/netting.php" method="POST">
                        <h1>Login Panel </h1>
                        <div><input type="email" name="email" class="form-control" placeholder="Email" required="" />
                        </div>
                        <div><input type="password" name="password" class="form-control" placeholder="Password"
                                required="" /></div>
                        <div><button style="width: 100%; background-color: #73879C; color:white;" type="submit"
                                name="login" class="btn btn-default">Login</button></div>
                        <?php
                        if (isset($_SESSION['isLogged'])) {
                            if ($_SESSION['isLogged'] == 'no') { ?>
                                <span style="color: red;"> Incorrect email or password</span>
                            <?php }
                            unset($_SESSION['isLogged']);
                        }
                        ?>
                        <div class="clearfix"></div>

                        <div class="separator">
                            <p class="change_link"></p>
                            <div class="clearfix"></div> <br />
                            <div>
                                <h1><i class="fa fa-paw"></i> Code Academy</h1>
                                <p>©2024 Code Academy MMC</p>
                            </div>
                        </div>
                    </form>
                </section>
            </div>
        </div>
    </div>
</body>

</html>