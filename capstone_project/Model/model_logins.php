<?php 

include (__DIR__ . '/db.php');

function check_customer_login($cus_email, $cus_password) {
    global $db;
    $results = [];  // User is neither an employee or manager (i.e. Invalid user & login credentials).

    $stmt = $db->prepare("SELECT cus_ID, cus_fname, cus_lname, cus_email, cus_phone, cus_password FROM customers_tbl WHERE cus_email = :cus_email AND cus_password = :cus_password");

    $stmt->bindValue(":cus_email", $cus_email);
    $stmt->bindValue(":cus_password", sha1($cus_password));




    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $tempArr = $stmt->fetch(PDO::FETCH_ASSOC);   // Returns an associative array of an employee.


        if (($tempArr["cus_email"] == $cus_email) && ($tempArr["cus_password"] == sha1($cus_password) )) {
            $results = 1;
            
        } 
        
    }
    else
    {
        $results = 0;
    }

    
    
    
   

    return  $results;
            
}

/*
$asd = check_customer_login("saimer.nieves@gmail.com", "saimer");
echo $asd;
exit;*/



// Debugs
// var_dump(checkEmployeeLogin("Zach", "Frost"));
// var_dump(checkEmployeeLogin("Jack", "Password"));
