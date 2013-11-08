<?php require('inc/header.inc.php'); ?>
    <title>Husky Helpers - Organization Entry</title>
  </head>

  <body>
    <?php require('inc/navbar.inc.php'); ?>
    <div class="container">

    
      <!-- Main component for a primary marketing message or call to action -->
		<div class="jumbotron">
			<h1>Enter your organization information below</h1>
			<p></p>
		</div>
        <div class="panel panel-default">
         <!-- Default panel contents -->
			<div class="panel-heading">Organization Entry:
				<div class="panel-body">
					<!-- List group -->
					<ul class="list-group">
					<li class="list-group-item">
					<li class="list-group-item"> <form> Organization Name: <input type="text" name="Orgname" placeholder="Husky Helpers"<?php if(isset($_REQUEST['Orgname'])) { echo 'value="'.$_REQUEST['Orgname'].'"'; } ?> /> </form> </li>
					<li class="list-group-item"> <form> Address: <input type="text" name="Orgadd" placeholder="1234 Main St."<?php if(isset($_REQUEST['Orgadd'])) { echo 'value="'.$_REQUEST['Orgadd'].'"'; } ?> /></form></li>
					<li class="list-group-item"> <form> Contact: <input type="text" name="Orgcon" placeholder="Joe Smith"<?php if(isset($_REQUEST['Orgcon'])) { echo 'value="'.$_REQUEST['Orgcon'].'"'; } ?> /></form></li>
					<li class="list-group-item"> <form> Contact #: <input type="number" name="Orgcon#" placeholder="(555) - 5555"<?php if(isset($_REQUEST['Orgcon#'])) { echo 'value="'.$_REQUEST['Orgcon#'].'"'; } ?> /></form></li>
					<li class="list-group-item"> <form> Contact email: <input type="text" name="Orgemail" placeholder="name@domain.com"<?php if(isset($_REQUEST['Orgemail'])) { echo 'value="'.$_REQUEST['orgemail'].'"'; } ?> /></form></li>
					</ul>
				</div>
			</div>
        </div>
		<p>
			<input type="submit" name="submit" value="Submit &raquo;" class="btn btn-lg btn-primary">
		</p>
    </div> <!-- /container -->

<?php require("inc/footer.inc.php"); ?>
