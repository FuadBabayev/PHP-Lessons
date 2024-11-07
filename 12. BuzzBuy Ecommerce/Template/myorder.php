<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="page-title-wrap">
				<div class="page-title-inner">
					<div class="row">
						<div class="col-md-12">
							<div class="bigtitle">Order Information</div>
							<p>Orders that you ordered in table</p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<form action="nedmin/netting/islem.php" method="POST" class="form-horizontal checkout" role="form">
		<div class="row">
			<div class="col-md-12">
				<div class="title-bg"><div class="title">Order Datas</div></div>

				<div class="table-responsive">
					<table class="table table-bordered chart">
						<thead>
							<tr>
								<th>№</th>
								<th>Order</th>
								<th>Date</th>
								<th>Price</th>
								<th>Actions</th>

							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1</td>
								<td>Some Camera</td>
								<td>03.09.2024</td>
								<td>500$</td>
								<td><a href=""><button class="btn btn-primary btn-xs">Detay</button></a></td>
							</tr>
						</tbody>
					</table>
				</div>

			</div>
		</div>
</div>
</form>
<div class="spacer"></div>
</div>

<?php include 'footer.php'; ?>