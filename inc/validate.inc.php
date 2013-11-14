<?php
$errors = array();
// check that the required fields are filled in
if(!isset($_REQUEST['orgid'])) {
    //should pull from DB
} else {
    if(!is_int($_REQUEST['orgid'])) {
       // $errors['orgid'] = "This needs to be a number!";
    }
}
if(!isset($_REQUEST['orgname'])) {
	$errors['orgname'] = "This field can not be blank.";
} else {
    if(strlen($_REQUEST['orgname']) > 1) {
        $error['orgname'] = "Organization name can not be over 50 characters";
    } else {
	
	// Joe: check database to see if org name already exists
	//if it does $error['orgname'] = "Organization name already exists";
	}
}
if(!isset($_REQUEST['posname'])) {
	$errors['posname'] = "This field can not be blank.";
} else {
    if(strlen($_REQUEST['posname']) > 50) {
        $error['orgname'] = "Position Name can not be over 50 characters";
    }

}
if(!isset($_REQUEST['poslocation'])) {
	$errors['posname'] = "This field can not be blank.";
} else {
	if(strlen($_REQUEST['posname']) > 50) {
        $error['orgname'] = "Position Location can not be over 50 characters";
    }
}
if(!isset($_REQUEST['posdate'])) {
} else {
    /*
     * Format: 2018-04-03
     * Rules:
     *  should be a valid date (<13 months and the right number of days for that month)
     *  should be within x years
     *  should be today or later
     */
}
if(!isset($_REQUEST['posdescription'])) {


}
if(!isset($_REQUEST['posnum'])) {
}
