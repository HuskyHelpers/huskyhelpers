<?php
    require('inc/validate.inc.php');
    require('inc/insert.inc.php');
    require('inc/header.inc.php');
    ?>
    <title>Husky Helpers - Position Entry</title>
  </head>

  <body>
    <?php require('inc/navbar.inc.php'); ?>
    <div class="container">

    
		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Create Your Position Listing</h1>
			<p>In order to create your position, fill out all the information in the forms below.</p>
			
		</div>
		<div class="panel panel-default">
			 <!-- Default panel contents -->
             <pre><?php
                // For debugging purposes 
                print_r($_REQUEST["posdate"]);
                print_r($errors);
                ?></pre>             
             <form action="evententry.php" method="POST">
			<div class="panel-heading">Position Entry:
				<div class="panel-body">
                    
					<!-- List group -->
					<ul class="list-group">
					<li class="list-group-item"> Organization ID: <input type="text" name="orgid" placeholder="123456"> </li>
					<li class="list-group-item"> Organization Name: <input type="text" name="orgname" placeholder="Husky Helpers"<?php if(isset($_REQUEST['orgname'])) { echo 'value="'.$_REQUEST['orgname'].'"'; } ?> /></li>
					<li class="list-group-item"> Position Start Time: <input type="time" name="starttime" placeholder=" " <?php if(isset($_REQUEST['starttime'])) { echo 'value="'.$_REQUEST['starttime'].'"'; } ?> /></li>
					<li class="list-group-item"> Position End Time: <input type="time" name="endtime" placeholder=" " <?php if(isset($_REQUEST['endtime'])) { echo 'value="'.$_REQUEST['endtime'].'"'; } ?> /></li>
					<li class="list-group-item"> Position Description: <input type="text" name="posdescription" placeholder="Help our organization with the children during summer vacation. "<?php if(isset($_REQUEST['posdescription'])) { echo 'value="'.$_REQUEST['posdescription'].'"'; } ?> /></li>
					<li class="list-group-item"> Position Location: <input type="text" name="location" placeholder="Bothell"<?php if(isset($_REQUEST['date'])) { echo 'value="'.$_REQUEST['date'].'"'; } ?> /></li>
					<!-- Number selector thing for NUMBER OF POSITIONS can go below 0.  Need to validate input. -->
					</ul>
                    
				</div>
				<p>
                    <input type="submit" name="submit" value="Submit &raquo;" class="btn btn-lg btn-primary">
				</p>
                </form>
			</div>
		</div>
    </div> <!-- /container -->

<?php require("inc/footer.inc.php"); ?>
