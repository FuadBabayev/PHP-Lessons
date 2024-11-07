<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">My Account</div>
							<p>You can update you information whenever you want</p>
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
					<div class="title">Change User Information</div>
				</div>

				<!--  VALIDATION  -->
				<?php
				if (isset($_SESSION['status'])) {
					if ($_SESSION['status'] == 'different_password') { ?>
						<div class="alert alert-danger"><strong>Error: </strong> Passwords are not same</div>
					<?php } elseif ($_SESSION['status'] == 'short_password') { ?>
						<div class="alert alert-danger"><strong>Error: </strong> Passwords must have at least 6 characters</div>
					<?php } elseif ($_SESSION['status'] == 'user_not_updated') { ?>
						<div class="alert alert-danger"><strong>Error: </strong> Something went wrong while Registration</div>
					<?php } elseif ($_SESSION['status'] == 'user_updated') { ?>
						<div class="alert alert-success"><strong>Congratulation: </strong> Successfully Updated</div>
					<?php }
					unset($_SESSION['status']);
				}
				?>



				<?php
				if (isset($_SESSION['user_email'])) {
					$request_user = $db->prepare("SELECT * FROM User WHERE email=:email");
					$request_user->execute([
						'email' => $_SESSION['user_email']
					]);
					$read_user = $request_user->fetch(PDO::FETCH_ASSOC);
				}
				?>





				<div class="form-group dob">
					<div class="col-sm-12"><input type="text" class="form-control" required="" name="fullname" placeholder="Fullname" value="<?php if (isset($_SESSION['user_email'])) echo $read_user['fullname']; ?>"></div>
				</div>
				<div class="form-group">
					<div class="col-sm-12"><input type="email" class="form-control" required="" placeholder="Email" value="<?php if (isset($_SESSION['user_email'])) echo $read_user['email']; ?>" disabled=""></div>
					<!-- //! Input disabled olanda onun deyerini tuta bilmediyi ucun birinci inputun name-sini hidden inputune oturub oradan gonderirik -->
					<input type="hidden" class="form-control" required="" name="email" placeholder="Email" value="<?php if (isset($_SESSION['user_email'])) echo $read_user['email']; ?>">
				</div>

				<div class="form-group dob">
					<div class="col-sm-6"><input type="password" class="form-control" name="password1" id="password1" placeholder="Password"></div>
					<div class="col-sm-6"><input type="password" class="form-control" name="password2" id="password2" placeholder="Password"></div>
				</div>
				<button type="submit" name="update_user_data" class="btn btn-default btn-info">Update</button>
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