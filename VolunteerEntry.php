<?php require('inc/header.inc.php'); ?>
    <title>Husky Helpers - Volunteer SignUp</title>
  </head>

  <body>
    <?php require('inc/navbar.inc.php'); ?>
    <div class="container">

    
      <!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Enter your information below</h1>
			<p></p>
		</div>
        <div class="panel panel-default">
         <!-- Default panel contents -->
			<div class="panel-heading">Volunteer Entry:
				<div class="panel-body">
					<!-- List group -->
					<ul class="list-group">
					<li class="list-group-item">
					<li class="list-group-item"> <form> Name: <input type="text" name="Volname" placeholder="John Doe"<?php if(isset($_REQUEST['Volname'])) { echo 'value="'.$_REQUEST['Volname'].'"'; } ?> /> </form> </li>
					<li class="list-group-item"> <form> Contact #: <input type="number" name="Volcon#" placeholder="(555)555-5555"<?php if(isset($_REQUEST['Volcon#'])) { echo 'value="'.$_REQUEST['Volcon#'].'"'; } ?> /></form></li>
					<li class="list-group-item"> <form> Contact email: <input type="text" name="Volemail" placeholder="name@domain.com"<?php if(isset($_REQUEST['Volemail'])) { echo 'value="'.$_REQUEST['Volemail'].'"'; } ?> /></form></li>
					</ul>
				</div>
			</div>
        </div>
		<p>
			<input type="submit" name="submit" value="Submit &raquo;" class="btn btn-lg btn-primary">
		</p>
    </div> <!-- /container -->

<?php require("inc/footer.inc.php"); ?>
