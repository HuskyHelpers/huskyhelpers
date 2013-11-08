<? require('inc/header.inc.php'); ?>
    <title>Husky Helpers - Organization Entry</title>
  </head>

  <body>
    <? require('inc/navbar.inc.php'); ?>
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
					<li class="list-group-item"> <form> Organization Name: <input type="text" name="Orgname"><?php if(isset($_REQUEST['Orgname'])) { echo 'value="'.$_REQUEST['Orgname'].'"' } ?> />> </form> </li>
					<li class="list-group-item"> <form> Address: <input type="text" name="Orgadd"></form><?php if(isset($_REQUEST['Orgadd'])) { echo 'value="'.$_REQUEST['Orgadd'].'"' } ?> />></li>
					<li class="list-group-item"> <form> Contact: <input type="text" name="Orgcon"></form><?php if(isset($_REQUEST['Orgcon'])) { echo 'value="'.$_REQUEST['Orgcon'].'"' } ?> />></li>
					<li class="list-group-item"> <form> Contact #: <input type="text" name="Orgcon#"> </form><?php if(isset($_REQUEST['Orgcon#'])) { echo 'value="'.$_REQUEST['Orgcon#'].'"' } ?> />></li>
					<li class="list-group-item"> <form> Contact email: <input type="text" name="Orgemail"> </form><?php if(isset($_REQUEST['Orgemail'])) { echo 'value="'.$_REQUEST['orgemail'].'"' } ?> />></li>
					</ul>
				</div>
			</div>
        </div>
		<p>
			<input type="submit" name="submit" value="Submit &raquo;" class="btn btn-lg btn-primary">
		</p>
    </div> <!-- /container -->

<? require("inc/footer.inc.php"); ?>
