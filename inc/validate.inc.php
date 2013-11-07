<?
$errors = array();
// check that the required fields are filled in
if(!isset($_REQUEST['orgid'])) {
    $errors['orgid'] = "This needs to be set!";
} else {
    if(!is_int($_REQUEST['orgid'])) {
        $errors['orgid'] = "This needs to be a number!";
    } else {
        // check the database to make sure it's a real org!
    }
}
if(!isset($_REQUEST['orgname'])) {
} else {
    if(strlen($_REQUEST['orgname']) > 20) {
        $error['orgname'] = "Whoops! This can't be over 20 characters, sorry";
    }
}
if(!isset($_REQUEST['posname'])) {
}
if(!isset($_REQUEST['poslocation'])) {
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

// For debugging purposes 
print_r($_REQUEST['posdate']);
print_r($errors);
