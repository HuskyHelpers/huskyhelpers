<?php

if(count($errors) == 0) {
    $mysqli = new mysqli("localhost", "huskyhelpers", "BDm73tbxbFVKT4ZC", "huskyhelpers");
    $stmt = $mysqli-prepare("INSERT INTO `event` (`Name`, `Location`, `Description`, `StartTime`, `EndTime`, `OrgID`) VALUES (?, ?,  ?,  ?,  ?,  ?);");
    $stmt->bind_param("sssssi", $_REQUEST['posname'], $_REQUEST['poslocation'], $_REQUEST['description'], $_REQUEST['starttime'], $_REQUEST['endtime'], $_REQUEST['orgid']); // etc
    $stmt->execute();
    $stmt->close();
    $mysqli->close();
}
