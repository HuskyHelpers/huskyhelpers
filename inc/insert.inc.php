<?php
require 'settings.inc.php';
if(count($errors) == 0) {
    $mysqli = new mysqli($SETTINGS['mysql']['host'], $SETTINGS['mysql']['user'], $SETTINGS['mysql']['pass'], $SETTINGS['mysql']['db']);
    $stmt = $mysqli-prepare("INSERT INTO `event` (`Name`, `Location`, `Description`, `StartTime`, `EndTime`, `OrgID`) VALUES (?, ?,  ?,  ?,  ?,  ?);");
    $stmt->bind_param("sssssi", $_REQUEST['posname'], $_REQUEST['poslocation'], $_REQUEST['description'], $_REQUEST['starttime'], $_REQUEST['endtime'], $_REQUEST['orgid']); // etc
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
