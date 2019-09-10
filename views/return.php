<?php 
	include 'header.php';
	include 'sidebar.php';
?>


	<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">
		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Returned Items</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<table class="table table-bordered tbl_return">
							<thead>
								<tr>
									<th>Borrower Name</th>
									<th>Returned Items</th>
									<th>Borrowed Date</th>
									<th>Returned Date</th>
									
								</tr>
							</thead>
						</table>
					</div>
				</div>
			</div>
		</div>

	</div>



<?php include 'footer.php'; ?>