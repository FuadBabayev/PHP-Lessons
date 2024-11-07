<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Register</div>
							<p>New User? By creating an account you be able to shop faster, be up to date on an order's
								status... .</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="../AdminDashboard/connection/netting.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">User Information</div>
				</div>

				<!--  VALIDATION  -->
				<?php
				if (isset($_SESSION['status'])) {
					if ($_SESSION['status'] == 'different_password') { ?>
						<div class="alert alert-danger"><strong>Error: </strong> Passwords are not same</div>
					<?php } elseif ($_SESSION['status'] == 'short_password') { ?>
						<div class="alert alert-danger"><strong>Error: </strong> Passwords must have at least 6 characters</div>					
					<?php } elseif ($_SESSION['status'] == 'used_email') { ?>
						<div class="alert alert-danger"><strong>Error: </strong> Email you provide is already in use</div>
					<?php } elseif ($_SESSION['status'] == 'not_registered') { ?>
						<div class="alert alert-danger"><strong>Error: </strong> Something went wrong while Registration</div>
					<?php } elseif ($_SESSION['status'] == 'registered') { ?>
						<div class="alert alert-success"><strong>Congratulation: </strong> Successfully Registered</div>
					<?php }
					unset($_SESSION['status']);
				}
				?>







				<div class="form-group dob">
					<div class="col-sm-12"><input type="text" class="form-control" required="" name="fullname"
							placeholder="Fullname"></div>
				</div>
				<div class="form-group">
					<div class="col-sm-12"><input type="email" class="form-control" required="" name="email"
							placeholder="Email"></div>
				</div>
				<div class="form-group dob">
					<div class="col-sm-6"><input type="password" class="form-control" name="password1"
							placeholder="Password"></div>
					<div class="col-sm-6"><input type="password" class="form-control" name="password2"
							placeholder="Password"></div>
				</div>
				<button type="submit" name="register" class="btn btn-default btn-red">Register</button>
			</div>
			<div class="col-md-6">
				<div class="title-bg">
					<div class="title">Forget Password?</div>
				</div>
				<center><img width="200" src="https://sharek.om/wp/wp-content/uploads/2023/01/forp.png"></center>
			</div>
		</div>
</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>