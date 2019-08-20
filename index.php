<?php 
include('header.php');
?>
<title>Calendar | IRSC</title>
<link rel="stylesheet" href="css/calendar.css">
<link rel="stylesheet" type="text/css" href="custom.css">
<div class="container">	
	<div class="page-header">
		<div class="pull-right form-inline">
			<div class="btn-group">
				<button class="btn btn-primary" data-calendar-nav="prev"><< Prev</button>
				<button class="btn btn-default" data-calendar-nav="today">Today</button>
				<button class="btn btn-primary" data-calendar-nav="next">Next >></button>
			</div>
			<div class="btn-group">
				<button class="btn btn-warning" data-calendar-view="year">Year</button>
				<button class="btn btn-warning active" data-calendar-view="month">Month</button>
				<button class="btn btn-warning" data-calendar-view="week">Week</button>
				<button class="btn btn-warning" data-calendar-view="day">Day</button>
			</div>
		</div>
		<h3></h3>
	</div>
	<div class="row">
		<div class="col-md-9">
			<div id="showEventCalendar" class="main-card"></div>
		</div>
		<div class="col-md-3 event-card">
			<h4>Events List</h4>
			<ul id="eventlist" class="nav nav-list"></ul>
		</div>
	</div>	
</div>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
<script type="text/javascript" src="js/calendar.js"></script>
<script type="text/javascript" src="js/events.js"></script>
<?php include('footer.php');?>
