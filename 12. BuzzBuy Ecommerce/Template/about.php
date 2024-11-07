<?php include 'header.php' ?>


<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-4">
							<div class="bread"><a href="#">Home</a> &rsaquo; About</div>
							<div class="bigtitle">About</div>
						</div>
						<div class="col-md-3 col-md-offset-5"><button class="btn btn-default btn-red btn-lg">Purchase
								Theme</button></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div class="title-bg">
				<div class="title"><?php echo $read_about['title'] ?></div>
			</div>
			<div class="page-content">
				<p><?php echo $read_about['content'] ?></p>
			</div>

			<div class="title-bg">
				<div class="title">Video promotion</div>
			</div>
			<iframe width="560" height="315" src="https://www.youtube.com/embed/<?php echo $read_about['video'] ?>"
				title="YouTube video player" frameborder="0"
				allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
				referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


			<div class="title-bg">
				<div class="title">Vision</div>
			</div>
			<blockquote><?php echo $read_about['vision'] ?></blockquote>

			<div class="title-bg">
				<div class="title">MIssion</div>
			</div>
			<blockquote><?php echo $read_about['mission'] ?></blockquote>
		</div>

		<?php include 'sidebar.php' ?>

	</div>
	<div class="spacer"></div>
</div>

<?php include 'footer.php' ?>