
<?php

include (__DIR__ . '/db.php');


function add_merchants( $mer_fname, $mer_lname, $mer_email, $mer_phone, $mer_password) {
    global $db;

    $results = 0;

    $stmt = $db->prepare("INSERT INTO merchants_tbl SET  mer_fname = :mer_fname, mer_lname = :mer_lname, mer_email = :mer_email, mer_phone = :mer_phone, mer_password = :mer_password");

    $binds = array (
        ":mer_fname" => $mer_fname,
        ":mer_lname" => $mer_lname,
        ":mer_email" => $mer_email,
        ":mer_phone" => $mer_phone,
        ":mer_password" => $mer_password
      
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
        $results = 1;   
    }

    return $results;
}


/* TESTING FUNCTION ABOVE
$answers =  add_merchants( "Saimer", "Nieves", "Emailsamer@gmail.com", "401-999-9999","MySecretPaSS");
var_dump($answers);

exit;

*/

function add_customers( $cus_fname, $cus_lname, $cus_email, $cus_phone, $cus_password) {
    global $db;

    $results = 0;

    $stmt = $db->prepare("INSERT INTO customers_tbl SET  cus_fname = :cus_fname, cus_lname = :cus_lname, cus_email = :cus_email, cus_phone = :cus_phone, cus_password = :cus_password");

    $binds = array (
        ":cus_fname" => $cus_fname,
        ":cus_lname" => $cus_lname,
        ":cus_email" => $cus_email,
        ":cus_phone" => $cus_phone,
        ":cus_password" => $cus_password
      
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
        $results = 1;   
    }

    return $results;
}


/* TESTING FUNCTION ABOVE
$answers =  add_customers( "Saimer", "Nieves", "Emailsamer@gmail.com", "401-999-9999","MySecretPaSS");
var_dump($answers);

exit;*/



function get_customers() {
    global $db;

    $results = [];

    $stmt = $db->prepare("SELECT cus_ID,cus_fname,cus_lname, cus_email, cus_phone, cus_password FROM customers_tbl");

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}

function getCustomer($cus_ID) {
    global $db;

    $results = [];

    $stmt = $db->prepare("SELECT * FROM customers_tbl WHERE cus_ID = :cus_ID");

    $stmt->bindValue(":cus_ID", $cus_ID);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;
}

/*
$answers = getCustomer(2); //gets a specific element

    $cus_email = $answers["0"]["cus_email"]; //accessing these section of this element
    $cus_password = $answers["0"]["cus_password"];

    echo $cus_email,$cus_password ;
   
exit;*/