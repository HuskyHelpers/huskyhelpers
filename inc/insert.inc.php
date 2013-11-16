<?php
require 'settings.inc.php';
if(count($errors) == 0) {
    $mysqli = new mysqli($SETTINGS['mysql']['host'], $SETTINGS['mysql']['user'], $SETTINGS['mysql']['pass'], $SETTINGS['mysql']['db']);
    if($mysqli->connect_error) {
        die("Connection error: " .$mysqli->connect_error);
    }
    if(!$stmt = $mysqli->prepare("INSERT INTO `event` (`Name`, `Location`, `Description`, `StartTime`, `EndTime`, `OrgID`) VALUES (?, ?,  ?,  ?,  ?,  ?);")) {
        echo "<pre>";
        print_r($stmt->error_list);
        echo "</pre>";
        die("Statement error. You suck at SQL");
    }
    $stmt->bind_param("sssssi", $_REQUEST['posname'], $_REQUEST['poslocation'], $_REQUEST['posdescription'], $_REQUEST['starttime'], $_REQUEST['endtime'], $_REQUEST['orgid']); 
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
}
