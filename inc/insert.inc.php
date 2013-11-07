<?php

if(count($errors) == 0) {
    $mysqli = new mysqli("localhost", "huskyhelpers", "password", "huskyhelpers");
    $stmt = $mysqli-prepare("INSERT INTO `event` (`Name`, `Location`, `EventID`, `Description`, `StartTime`, `EndTime`, `OrgID`) VALUES (?, ?, ?,  ?,  ?,  ?,  ?);");
    $stmt->bind_param("ssisssi", $_REQUEST['posname'], $_REQUEST['poslocation'], $_REQUEST['posdescription']); // etc
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
}
