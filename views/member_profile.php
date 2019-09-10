<?php 
include 'header.php';
include 'sidebar.php';
?>

<div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2 col-lg-10 col-lg-offset-2 main">	
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="dashboard"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active"><a href="members">Borrower</a></li>
			<li class="active"><?php echo $_GET['name'];?> Profile</li>
		</ol>
		<!-- <div class="breadcrumb">
			<button class="btn btn-primary col-sm-offset-7 add_member">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Upload CSV File
			</button>
			<button class="btn btn-primary add_student">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Add Student
			</button>
			<button class="btn btn-primary add_faculty">
				<svg class="glyph stroked plus sign">
					<use xlink:href="#stroked-plus-sign"/>
				</svg>
				Add Faculty
			</button>
		</div> -->
	</div><!--/.row-->
	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-body">
					<table class="table table-bordered tbl_member_profile">
						<thead>
							<tr>
								<th>Borrowed Date</th>
								<th>Items Borrowed</th>
								<th>Room</th>
								<th>Status</th>
							</tr>
						</thead>
					</table>
				</div>
			</div><!-- panel -->
		</div><!-- panel -->
	</div><!-- row -->
	
</div>

<div class="right-sidebar member-side">
	<div class="sidebar-form">
		<div class="container-fluid">
			<h4 class="alert bg-success">Add Member</h4>
			<div class="form-group">
				<a class="btn btn-primary btn-block" target="_blank" download="member_format.csv" href="../assets/downloadables/member_format.csv">
					<i class="fa fa-download"></i>
					Download Format
				</a>
			</div>
			<form class="frm_addmember" enctype="multipart/form-data">
				<div class="form-group">
					<label>Upload File</label>
					<input type="file" name="file" class="form-control" required>
					<input type="hidden" name="key" value="add_member">
				</div>
				<div class="form-group">
					<button class="btn btn-danger cancel_member" type="button">Cancel</button>
					<button class="btn btn-success" type="submit">Upload</button>
				</div>
			</form>	
		</div>
	</div>
</div>

<div class="right-sidebar divedit-member">
	<div class="container-fluid">
		<br>
		<br>
		<div class="member-form"></div>
	</div>
</div>



<?php include 'footer.php'; ?>

<script type="text/javascript">
	var id = '<?php echo $_GET['id']; ?>';
	console.log(id);
	member_profile(id);
</script>