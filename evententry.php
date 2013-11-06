<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Husky Helpers - Event Entry</title>
    <? require('inc/header.inc.php'); ?>
  </head>

  <body>
    <? require('inc/navbar.inc.php'); ?>
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
    <script src="/js/bootstrap.min.js"></script>
  </body>
</html>
