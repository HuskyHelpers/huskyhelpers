<? require('inc/header.inc.php'); ?>
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
					<!-- List group -->
					<ul class="list-group">
					<li class="list-group-item"> <form> Organization ID: <input type="text" name="Orgid"> </form> </li>
					<li class="list-group-item"> <form> Organization Name: <input type="text" name="Orgname"> </form> </li>
					<li class="list-group-item"> <form> UW Affiliation: <input type="text" name="affiliation"></form></li>
					<li class="list-group-item"> <form> Position Name:  <input type="text" name="Posname" ></form></li>
					<li class="list-group-item"> <form> Position Location: <input type="text" name="Poslocation"></form></li>
					<li class="list-group-item"> <form> Position Date: <input type="date" name="Posdate"></form></li>
					<li class="list-group-item"> <form> Position Description: <input type="text" name="Posdescription"> </form> 
					<li class="list-group-item"> <form> Number of Positions: <input type="number" name="Posnum"></form></li>
					</ul>
				</div>
				<p>
					<a class="btn btn-lg btn-primary" role="button">Submit &raquo;</a>
				</p>
			</div>
		</div>
    </div> <!-- /container -->

<? require("inc/footer.inc.php"); ?>
