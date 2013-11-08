<?php
    require('inc/validate.inc.php');
    //require('inc/insert.inc.php');
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
                print_r($_REQUEST['posdate']);
                print_r($errors);
                ?></pre>             
             <form action="evententry.php" method="POST">
			<div class="panel-heading">Position Entry:
				<div class="panel-body">
                    
					<!-- List group -->
					<ul class="list-group">
					<li class="list-group-item"> Organization ID: <input type="text" name="orgid"> </li>
					<li class="list-group-item"> Organization Name: <input type="text" name="orgname" <?php if(isset($_REQUEST['orgname'])) { echo 'value="'.$_REQUEST['orgname'].'"'; } ?> /></li>
					<li class="list-group-item"> UW Affiliation: <input type="text" name="affiliation" <?php if(isset($_REQUEST['affiliation'])) { echo 'value="'.$_REQUEST['affiliation'].'"'; } ?> /></li>
					<li class="list-group-item"> Position Name:  <input type="text" name="posname" <?php if(isset($_REQUEST['posname'])) { echo 'value="'.$_REQUEST['posname'].'"'; } ?> /></li>
					<li class="list-group-item"> Position Location: <input type="text" name="poslocation" <?php if(isset($_REQUEST['poslocation'])) { echo 'value="'.$_REQUEST['poslocation'].'"'; } ?> /></li>
					<li class="list-group-item"> Position Date: <input type="date" name="posdate" <?php if(isset($_REQUEST['posdate'])) { echo 'value="'.$_REQUEST['posdate'].'"'; } ?> /></li>
					<li class="list-group-item"> Position Description: <input type="text" name="posdescription" <?php if(isset($_REQUEST['posdescription'])) { echo 'value="'.$_REQUEST['posdescription'].'"'; } ?> /></li>
					<!-- Number selector thing for NUMBER OF POSITIONS can go below 0.  Need to validate input. -->
					<li class="list-group-item"> Number of Positions: <input type="number" name="posnum" <?php if(isset($_REQUEST['posnum'])) { echo 'value="'.$_REQUEST['posnum'].'"'; } ?> /></li>
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
