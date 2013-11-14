<?php require('inc/header.inc.php'); ?>
    <title>Husky Helpers - Volunteer SignUp</title>
  </head>

  <body>
    <?php require('inc/navbar.inc.php'); ?>
    <div class="container">

    
      <!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Volunteer Preferences</h1>
			<p>Change your search and user information.</p>
		</div>
        <div class="panel panel-default">
         <!-- Default panel contents -->
			<div class="panel-heading">
				<div class="panel-body">
					<!-- List group -->
					<p>Personal Information</p>
					<ul class="list-group">
					<li class="list-group-item"> <form> Name: <input type="text" name="Volname" placeholder="John Doe"<?php if(isset($_REQUEST['Volname'])) { echo 'value="'.$_REQUEST['Volname'].'"'; } ?> /> </form> </li>
					<li class="list-group-item"> <form> Contact #: <input type="text" name="Volcon#" placeholder="(555)555-5555"<?php if(isset($_REQUEST['Volcon#'])) { echo 'value="'.$_REQUEST['Volcon#'].'"'; } ?> /></form></li>
					<li class="list-group-item"> <form> Contact email: <input type="text" name="Volemail" placeholder="name@domain.com"<?php if(isset($_REQUEST['Volemail'])) { echo 'value="'.$_REQUEST['Volemail'].'"'; } ?> /></form></li>
					</ul>
					<p>Areas of interest</p>
					<ul class="list-group">
					<li class="list-group-item"> <form> 
					<input type="checkbox" name="kids" value="children"> Children & Youth
					<input type="checkbox" name="animals" value="animals"> Animals
					<input type="checkbox" name="arts" value="arts"> Arts & Culture<br>
					<input type="checkbox" name="aducation" value="education"> Education & Literacy 
					<input type="checkbox" name="environtment" value="environment"> Environment
					<input type="checkbox" name="hunger" value="hunger"> Hunger<br>
					<input type="checkbox" name="homeless" value="homeless"> Homeless & Housing
					<input type="checkbox" name="sports" value="sports"> Sports & Recreation
					</form></li>
					</ul>
				</div>
				<p>
					<input type="submit" name="submit" value="Update &raquo;" class="btn btn-lg btn-primary">
				</p>
			</div>
        </div>
    </div> <!-- /container -->

<?php require("inc/footer.inc.php"); ?>
