<?php require('inc/header.inc.php'); ?>
    <title>Event List</title>

  </head>

  <body>
<?php require('inc/navbar.inc.php'); ?>
    <div class="container">

      <!-- Search Section -->
		<div class="jumbotron">
			<h1>Event List</h1>
			<p>Search for volunteer opportunities.</p>
		</div>
		<div class="panel panel-default">
        <!-- Default panel contents -->
		<div class="panel-heading">Event list:
			<div class="panel-body">
			<!-- List group -->
			<form>
				<!-- Single button -->
					<div>
					<select name="mydropdown" type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
						Action <span class="caret"></span>
						<option value="Not">Start Time</option>
						<option value="1">1:00 AM</option>
						<option value="2">2:00 AM</option>
						<option value="3">3:00 AM</option>
						<option value="4">4:00 AM</option>
						<option value="5">5:00 AM</option>
						<option value="6">6:00 AM</option>
						<option value="7">7:00 AM</option>
						<option value="8">8:00 AM</option>
						<option value="9">9:00 AM</option>
						<option value="10">10:00 AM</option>
						<option value="11">11:00 AM</option>
						<option value="12">12:00 PM</option>
						<option value="13">1:00 PM</option>
						<option value="14">2:00 PM</option>
						<option value="15">3:00 PM</option>
						<option value="16">4:00 PM</option>
						<option value="17">5:00 PM</option>
						<option value="18">6:00 PM</option>
						<option value="19">7:00 PM</option>
						<option value="20">8:00 PM</option>
						<option value="21">9:00 PM</option>
						<option value="22">10:00 PM</option>
						<option value="23">11:00 PM</option>
						<option value="24">12:00 AM</option>
					</select>
					to
					<select name="mydropdown" type="button" class="btn btn-sm dropdown-toggle" data-toggle="dropdown">
						Action <span class="caret"></span>
						<option value="Not">End Time</option>
						<option value="1">1:00 AM</option>
						<option value="2">2:00 AM</option>
						<option value="3">3:00 AM</option>
						<option value="4">4:00 AM</option>
						<option value="5">5:00 AM</option>
						<option value="6">6:00 AM</option>
						<option value="7">7:00 AM</option>
						<option value="8">8:00 AM</option>
						<option value="9">9:00 AM</option>
						<option value="10">10:00 AM</option>
						<option value="11">11:00 AM</option>
						<option value="12">12:00 PM</option>
						<option value="13">1:00 PM</option>
						<option value="14">2:00 PM</option>
						<option value="15">3:00 PM</option>
						<option value="16">4:00 PM</option>
						<option value="17">5:00 PM</option>
						<option value="18">6:00 PM</option>
						<option value="19">7:00 PM</option>
						<option value="20">8:00 PM</option>
						<option value="21">9:00 PM</option>
						<option value="22">10:00 PM</option>
						<option value="23">11:00 PM</option>
						<option value="24">12:00 AM</option>
					</select>
				</div>
			</form>
			<h1></h1>
			<form>
				<p>Please select your areas of interest</p>
				<ul class="list-group">
				<li class="list-group-item"> <form> 
				<input type="checkbox" name="kids" value="children"> Children & Youth
				<input type="checkbox" name="animals" value="animals"> Animals
				<input type="checkbox" name="arts" value="arts"> Arts & Culture<br>
				<input type="checkbox" name="education" value="education"> Education & Literacy 
				<input type="checkbox" name="environment" value="environment"> Environment
				<input type="checkbox" name="hunger" value="hunger"> Hunger<br>
				<input type="checkbox" name="homeless" value="homeless"> Homeless & Housing
				<input type="checkbox" name="sports" value="sports"> Sports & Recreation
				</form></li>
				</ul>
			</form> 
			<h1></h1>
			<p>
				<a class="btn btn-lg btn-primary" role="button">Search &raquo;</a>
			</p>
		</div>
		<div class="panel panel-default">
			<!-- Default panel contents -->
			<div class="panel-heading">Search Results</div>
			<!-- Table -->
			<table class="table">
			INSERT SEARCH RESULTS TABLE/LIST HERE
			</table>
		</div>
    </div> <!-- /container -->
<?php require("inc/footer.inc.php"); ?>
