<?
    require('inc/validate.inc.php');
    require('inc/header.inc.php');
    ?>
    <title>Husky Helpers - Position Entry</title>
  </head>

  <body>
    <? require('inc/navbar.inc.php'); ?>
    <div class="container">

    
		<!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Create Your Position Listing</h1>
			<p>In order to create your position, fill out all the information in the forms below.</p>
			
		</div>
		<div class="panel panel-default">
			 <!-- Default panel contents -->
			<div class="panel-heading">Position Entry:
				<div class="panel-body">
                    <form action="evententry.php" method="POST">
					<!-- List group -->
					<ul class="list-group">
					<li class="list-group-item"> Organization Name: <input type="text" name="orgname"> </li>
					<li class="list-group-item"> UW Affiliation: <input type="text" name="affiliation"></li>
					<li class="list-group-item"> Position Name:  <input type="text" name="posname" ></li>
					<li class="list-group-item"> Position Location: <input type="text" name="poslocation"></li>
					<li class="list-group-item"> Position Date: <input type="date" name="posdate"></li>
					<li class="list-group-item"> Position Description: <input type="text" name="posdescription"> </form> 
					<li class="list-group-item"> Number of Positions: <input type="number" name="posnum"></li>
					</ul>
                    </form>
				</div>
				<p>
					<a class="btn btn-lg btn-primary" role="button">Submit &raquo;</a>
				</p>
			</div>
		</div>
    </div> <!-- /container -->

<? require("inc/footer.inc.php"); ?>
