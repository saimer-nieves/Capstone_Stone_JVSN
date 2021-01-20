<?php

    include (__DIR__ . '/db.php');

    function getCustomers() {
        global $db;

        $results = [];

        $stmt = $db->prepare("SELECT customerID, firstName, lastName, state, phone FROM Customers");

        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
        }

        return $results;

    }

    function getCustomer($id) {
        global $db;

        $results = [];

        $stmt = $db->prepare("SELECT * FROM Customers WHERE customerID = :customerID");

        $stmt->bindValue(":customerID", $id);

        if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
        }

        return $results;
    }

    function searchCustomers($f, $l, $bd, $city, $state) {
        global $db;

        $results = [];

        $sql = "";
        $bindsElements = [];
        

        if ($f != "") {
            $sql .= "AND firstName = :firstName ";
            $bindsElements[":firstName"] = $f;
        }

        if ($l != "") {
            $sql .= "AND lastName = :lastName ";
            $bindsElements[":lastName"] = $l;
        }

        if ($bd != "") {
            $sql .= "AND birthday = :birthday ";
            $bindsElements[":birthday"] = $bd;
        }

        if ($city != "") {
            $sql .= "AND city = :city ";
            $bindsElements[":city"] = $city;
        }

        if ($state != "") {
            $sql .= "AND state = :state ";
            $bindsElements[":state"] = $state;
        }

        $stmt = $db->prepare("SELECT * FROM Customers WHERE 0=0 $sql;");


        // $binds = array (
        //     ":firstName" => $f,
        //     ":lastName" => $l,
        //     ":birthday" => $bd,
        //     ":city" => $city,
        //     ":state" => $state
        // );

        $binds = $bindsElements;

        if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
        }

        return $results;
    }
   
    function add_businessO($userID, $company, $fname, $lname, $email, $phone, $bo_username, $bo_password) {
        global $db;

        $results = 0;

        $stmt = $db->prepare("INSERT INTO businessO_login SET userID = :userID, company = :company, fname = :fname, lname = :lname, email = :email, phone = :phone, bo_username = :bo_username, bo_password = :bo_password);

        $binds = array (
            ":userID" => $userID,
            ":company" => $company,
            ":fname" => $fname,
            ":lname" => $lname,
            ":email" => $email,
            ":phone" => $phone,
            ":bo_username" => $bo_username,
            ":bo_password" => $bo_password,
           
        );

        if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
            $results = 1;   
        }

        return $results;
    }

    function updateCustomers($cusID, $companyID, $pImg, $fName, $mName, $lName, $addr1, $addr2, $city, $state, $zip, $phone, $email, $purch, $bd) {
        global $db;

        $results = 0;

        $stmt = $db->prepare("UPDATE Customers SET companyID = :companyID, profileImg = :pImg, firstName = :fName, middleName = :mName, lastName = :lName, address1 = :addr1, address2 = :addr2, city = :city, state = :state, zip = :zip, phone = :phone, email = :email, purchases = :purch, birthday = :bd WHERE customerID = :cusID");

        $binds = array (
            ":cusID" => $cusID,
            ":companyID" => $companyID,
            ":pImg" => $pImg,
            ":fName" => $fName,
            ":mName" => $mName,
            ":lName" => $lName,
            ":addr1" => $addr1,
            ":addr2" => $addr2,
            ":city" => $city,
            ":state" => $state,
            ":zip" => $zip,
            ":phone" => $phone,
            ":email" => $email,
            ":purch" => $purch,
            ":bd" => $bd
        );

        if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
            $results = 1;   
        }

        return $results;
    }

    function deleteCustomers($id) {
        global $db;

        $results = "ERROR: Deletion failed.";

        $stmt = $db->prepare("DELETE FROM Customers WHERE customerID = :id");

        $stmt->bindValue(':id', $id);

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = "Customer record successfully deleted.";
        }

        return $results;
    }

    function custsPerState() {
        global $db;

        $results = array(); // Creating empty array to be filled by SELECT statement.

        $stmt = $db->prepare("SELECT state, COUNT(*) AS custsPerStateCtr from Customers GROUP BY state ORDER BY COUNT(*);");

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return ($results);
    }

    function custsAllAges() {
        global $db;

        $results = array();  // Creating empty array to be filled by SELECT statement.

        $stmt = $db->prepare("SELECT birthday from Customers;");

        if ($stmt->execute() && $stmt->rowCount() > 0) {
            $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        return ($results);
    }

    // Debugs
    // var_dump(getCustomers());
    // var_dump(getCustomer(1));
    // var_dump(searchCustomers("David", "Ted", "1998-05-22", "Arlington", "CA"));
    // var_dump(searchCustomers("David", "Ted", "1998-05-22", "", ""));
    // var_dump(addCustomers(1, "", "Isaac", "Jacob", "Benjamin", "17th Dust Road", "2nd Floor", "Charlestown", "MA", "75102", "(401) 111-5511", "IsaacBenjamin@yahoo.com", 1, "1980-07-28"));
    // var_dump(addCustomers(1, "", "Abraham", "Jacob", "Salvador", "7th Dust Road", "10th Floor", "Kingston", "MA", "75100", "(401) 111-5500", "AbrahamSalvador@yahoo.com", 0, "1955-07-28"));
    // var_dump(updateCustomers(10, 1, "", "Abraham1", "Jacob1", "Salvador1", "1st Dust Road", "1th Floor", "Kingston1", "CA", "75101", "(401) 111-5501", "AbrahamSalvador1@yahoo.com", 10, "1955-01-28"));
    // var_dump(deleteCustomers(4));
    // var_dump(custsPerState());
    // var_dump(custsAllAges());






?>