<?php
include 'header.php';
if ($_GET['sef']) {

	$menu_request = $db->prepare("SELECT * FROM Menu WHERE seo_url=:query");
	$menu_request->execute([
		"query" => $_GET['sef']
	]);
	$menu_response = $menu_request->fetch(PDO::FETCH_ASSOC);
}
?>


<div class="container">
	<div class="row">
		<div class="col-md-9">
			<div class="title-bg">
				<div class="title"><?php echo $read_about['title'] ?></div>
			</div>
			<div class="page-content">
				<p><?php echo $menu_response['detail'] ?></p>
			</div>
		</div>

		<?php include 'sidebar.php' ?>

	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php' ?>