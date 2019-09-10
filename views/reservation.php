<?php 
	include 'header.php';
	include 'sidebar.php';
?>


	<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3 main">
		
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Reservation</li>
			</ol>
		</div><!--/.row-->

		<div class="row">
			<div class="col-md-12">
				<ul class="nav nav-pills">
					<li class="active"><a href="#pending" data-toggle="tab"><i class="fa fa-list"></i>&nbsp;&nbsp;Pending Reservation</a></li>
					<li><a href="#reserved" data-toggle="tab"><i class="fa fa-question"></i>&nbsp;&nbsp;Accepted Reservation</a></li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="tab-content">

							<div class="tab-pane fade in active" id="pending">
								<table class="table table-bordered tbl_pendingres">
									<thead>
										<tr>
											<th>Name</th>
											<th>Items</th>
											<th>Reservation Date</th>
											<th>Rooms</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
							</div>

							<div class="tab-pane" id="reserved">
								<table class="table table-bordered tbl_reserved">
									<thead>
										<tr>
											<th>Name</th>
											<th>Items</th>
											<th>Reservation Date</th>
											<th>Rooms</th>
											<th>Action</th>
										</tr>
									</thead>
								</table>
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>

	</div>

	<!-- Modal -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<form class="frm_cancelreservation">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title" id="myModalLabel">Cancel Reservation</h4>
					</div>
					<div class="modal-body">
					<div class="form-group">
						<label>Cancellation Remarks</label>
						<textarea name="remarks_cancel" class="form-control" required style="height: 200px"></textarea>
						<input type="hidden" name="codereserve">
					</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="submit" class="btn btn-primary">Save changes</button>
					</div>
				</form>
			</div>
		</div>
	</div>


<?php include 'footer.php'; ?>