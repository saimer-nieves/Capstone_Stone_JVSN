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



function check_customer_login_return_info($cus_email, $cus_password) {
    global $db;
    $results = [];  // User is neither an employee or manager (i.e. Invalid user & login credentials).

    $stmt = $db->prepare("SELECT cus_ID, cus_fname, cus_lname, cus_email, cus_phone, cus_password FROM customers_tbl WHERE cus_email = :cus_email AND cus_password = :cus_password");

    $stmt->bindValue(":cus_email", $cus_email);
    $stmt->bindValue(":cus_password", sha1($cus_password));




    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $tempArr = $stmt->fetch(PDO::FETCH_ASSOC);   // Returns an associative array of an employee
        return  $tempArr;
    }
    else
    {

    }
   
    
    
    
   

    
            
}


//$testing = check_customer_login_return_info("sam@gmail.com", "1111");
//var_dump($testing["cus_fname"]);
//echo $testing["cus_fname"];
//exit;


/*************************************************************************** */













function check_merchant_login($mer_email, $mer_password) {
    global $db;
    $results = [];  // User is neither an employee or manager (i.e. Invalid user & login credentials).

    $stmt = $db->prepare("SELECT mer_ID, mer_fname, mer_lname, mer_email, mer_phone, mer_password FROM merchants_tbl WHERE mer_email = :mer_email AND mer_password = :mer_password");

    $stmt->bindValue(":mer_email", $mer_email);
    $stmt->bindValue(":mer_password", sha1($mer_password));




    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $tempArr = $stmt->fetch(PDO::FETCH_ASSOC);   // Returns an associative array of an employee.


        if (($tempArr["mer_email"] == $mer_email) && ($tempArr["mer_password"] == sha1($mer_password) )) {
            $results = 1;
            
        } 
        
    }
    else
    {
        $results = 0;
    }

    
    
    
   

    return  $results;
            
}











function check_merchant_login_return_info($mer_email, $mer_password) {
    global $db;
    $results = [];  // User is neither an employee or manager (i.e. Invalid user & login credentials).

    $stmt = $db->prepare("SELECT mer_ID, mer_fname, mer_lname, mer_email, mer_phone, mer_password FROM merchants_tbl WHERE mer_email = :mer_email AND mer_password = :mer_password");

    $stmt->bindValue(":mer_email", $mer_email);
    $stmt->bindValue(":mer_password", sha1($mer_password));




    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $tempArr = $stmt->fetch(PDO::FETCH_ASSOC);   // Returns an associative array of an employee
        return  $tempArr;
    }
    else
    {

    }
   
    
    
    
   

    
            
}