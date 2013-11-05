<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="resources/favicon.ico">
    <!--link rel="shortcut icon" href="../../docs-assets/ico/favicon.png"-->

    <title>Husky Helpers - Event Entry</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <? require('header.inc.php'); ?>
    <div class="container">

    
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Create Your Event Listing</h1>
        <p>In order to create your event, fill out all the information in the forms below.</p>
        <p>
        </p>
      </div>
        <div class="panel panel-default">
         <!-- Default panel contents -->
         <div class="panel-heading">Event Entry:
         <div class="panel-body">
         <!-- List group -->
         <ul class="list-group">
        <li class="list-group-item">
            <form> Organization ID: <input type="text" name="Orgid"> </form> </li>
        <li class="list-group-item"> <form> Organization Name: <input type="text" name="Orgname"> </form> </li>
        <li class="list-group-item"> <form> Event Name:  <input type="text" name="Eventname" ></form></li>
        <li class="list-group-item"> <form> Event Location: <input type="text" name="Eventlocation"></form></li>
        <li class="list-group-item"> <form> Event Date: <input type="text" name="Eventdate"></form></li>
        <li class="list-group-item"> <form> Event Description: <input type="text" name="Eventdescription"> </form> 
        </li>
        </ul>
        </div>
    </div> <!-- /container -->
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
