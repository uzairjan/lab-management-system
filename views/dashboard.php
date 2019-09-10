<?php 
	include 'header.php';
	include 'sidebar.php';
?>

	<div class="row-fluid">
		<div class="col-md-12 main">
			<div class="col-sm-9 col-lg-10 col-md-10 col-lg-offset-2 col-md-offset-2 col-sm-offset-3">
				
				
				<div class="row">
					<div class="col-lg-12">
						<h1 class="page-header">Dashboard</h1>
					</div>
				</div><!--/.row-->

				<!-- <div class="row">
					<div class="col-xs-12 col-md-6 col-lg-3">
						<div class="panel panel-blue panel-widget ">
							<div class="row no-padding">
								<div class="col-sm-3 col-lg-5 widget-left">
									<i class="fa fa-hourglass-half fa-3x"></i>
								</div>
								<div class="col-sm-9 col-lg-7 widget-right">
									<div class="large peding_val">120</div>
									<div class="text-muted">Pending reservation</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-3">
						<div class="panel panel-orange panel-widget">
							<div class="row no-padding">
								<div class="col-sm-3 col-lg-5 widget-left">
									<i class="fa fa-thumbs-up fa-3x"></i>
								</div>
								<div class="col-sm-9 col-lg-7 widget-right">
									<div class="large accept_val">52</div>
									<div class="text-muted">Accepted reservation</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-3">
						<div class="panel panel-teal panel-widget">
							<div class="row no-padding">
								<div class="col-sm-3 col-lg-5 widget-left">
									<i class="fa fa-ban fa-3x"></i>
								</div>
								<div class="col-sm-9 col-lg-7 widget-right">
									<div class="large cancel_val">24</div>
									<div class="text-muted">Cancelled Reservation</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-md-6 col-lg-3">
						<div class="panel panel-red panel-widget">
							<div class="row no-padding">
								<div class="col-sm-3 col-lg-5 widget-left">
									<i class="fa fa-user fa-3x"></i>
								</div>
								<div class="col-sm-9 col-lg-7 widget-right">
									<div class="large active_user">25.2k</div>
									<div class="text-muted">Number of active clients</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--/.row-->

				<!-- <hr/>
				<div class="row">

					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4 class="text-white">Inventory item</h4>
							</div>
							<div class="panel-body">
								<div class="col-md-12" id="inventory" style="height: 500px;"></div>
							</div>
						</div>
					</div>

				<hr/>
					<div class="col-md-12 col-xs-12 col-sm-12">
						<div class="panel panel-blue">
							<div class="panel-heading dark-overlay">
								History Logs
							</div>
							<div class="panel-body">
								<ul class="todo-list">
								
								</ul>
							</div>
						</div>
					</div> -->

				<!-- /div> -->
				<div class="row">
					<div class="col-sm-offset-3 col-sm-6">
						<h2 style="text-align:center;">Calendar of Reservation</h2>
						<div id="calendar"></div>
					</div>
				</div>
				<hr/>
				<div class="row">
					<table class="table table_dashboard">
						<thead>
							<tr>
								<td><strong>Model</strong></td>
								<td><strong>Category</strong></td>
								<td><strong>Brand</strong></td>
								<td><strong>Description</strong></td>
								<td><strong>Quantity</strong></td>
								<td><strong>Status</strong></td>
								
								
							</tr>
						</thead>
					</table>
				</div>

<hr/>
			</div>
		</div>
		
	</div>
<?php include 'footer.php'; ?>
<script type="text/javascript">
	$(document).ready(function() {
		$('#calendar').fullCalendar({
	      header: {
	        left: 'prev,next today',
	        center: 'title',
	        right: 'month,agendaWeek,agendaDay'
	      },
	      buttonText: {
	        today: 'today',
	        month: 'month',
	        week: 'week',
	        day: 'day'
	      },
	      events: {
	      	url: '../class/display/display',
	      	type: "POST",
	      	data: {
	      		key: "load_reservations_json"
	      	}
	      },
	      editable: false,
	      droppable: false
	    });
	});
</script>
<script>

$.ajax({
	type: "POST",
	url: "../class/display/display",
	data: {
			key: "chart_inventory"
		}
	})
.done(function(data){
	console.log(data);
	var provider = JSON.parse(data);
	var chart = AmCharts.makeChart("inventory", {
  "type": "pie",
  "startDuration": 0,
   "theme": "light",
  "addClassNames": true,
  "legend":{
   	"position":"right",
    "marginRight":100,
    "autoMargins":false
  },
  "innerRadius": "30%",
  "defs": {
    "filter": [{
      "id": "shadow",
      "width": "200%",
      "height": "200%",
      "feOffset": {
        "result": "offOut",
        "in": "SourceAlpha",
        "dx": 0,
        "dy": 0
      },
      "feGaussianBlur": {
        "result": "blurOut",
        "in": "offOut",
        "stdDeviation": 5
      },
      "feBlend": {
        "in": "SourceGraphic",
        "in2": "blurOut",
        "mode": "normal"
      }
    }]
  },
  "dataProvider": provider ,
  "valueField": "litres",
  "titleField": "country",
  "export": {
    "enabled": true
  }
});

chart.addListener("init", handleInit);

chart.addListener("rollOverSlice", function(e) {
  handleRollOver(e);
});

function handleInit(){
  chart.legend.addListener("rollOverItem", handleRollOver);
}

function handleRollOver(e){
  var wedge = e.dataItem.wedge.node;
  wedge.parentNode.appendChild(wedge);
}
});

</script>