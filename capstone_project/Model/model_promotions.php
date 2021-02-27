
<?php

include (__DIR__ . '/db.php');

function get_promotions($store_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT promotion_ID, promotion_type, promotion_title, promotion_exp_date, promotion_description, promotion_code, store_ID FROM promotions_tbl WHERE store_ID = :store_ID");

    $stmt->bindValue(":store_ID", $store_ID);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}
/*

$results = get_promotions(46);
var_dump($results);
//var_dump($results[0]["store_category"]);
exit;*/

function add_promotions( $promotion_type, $promotion_title, $promotion_subheading, $promotion_address, $promotion_exp_date, $promotion_description, $promotion_code, $store_ID) {
    global $db;

    $results = 0;

    $stmt = $db->prepare("INSERT INTO promotions_tbl SET promotion_type = :promotion_type,  promotion_title = :promotion_title, promotion_subheading = :promotion_subheading, promotion_address = :promotion_address, promotion_exp_date = :promotion_exp_date, promotion_description = :promotion_description, promotion_code = :promotion_code, store_ID = :store_ID");

    $binds = array (
        ":promotion_type" => $promotion_type,
        ":promotion_title" => $promotion_title,
        ":promotion_subheading" => $promotion_subheading,
        ":promotion_address" => $promotion_address,
        ":promotion_exp_date" => $promotion_exp_date,
        ":promotion_description" => $promotion_description,
        ":promotion_code" => $promotion_code,
        ":store_ID" => $store_ID
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = 1;
    }

    return $results; 
}

//$testing = add_promotions("Coupon","50% OFF SALE","only on your dreams",NULL , "2021-02-25","WE WILL HAVE A SLE OF 50 ONLY TOMOEEOW", "456 - 4156 - FG5G","52");
//var_dump($testing);
//exit;
//46 47 48/*
/*date("m/d/Y") this will help you set your time  */
/*$testing = add_promotions("today", "Fall Big Sale", "2021-02-17", "Come buy fall color shirts 50%", 4561561210,52);


var_dump($testing);
exit;*/




//merid = 4
// name = 'Lamboguini Store'
//CONVERT NAME TO ID

function convert_storename_to_ID($store_name,$mer_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT store_ID, store_name, store_category, store_day_created, store_img_logo, mer_ID FROM merchant_stores_tbl WHERE store_name = :store_name AND mer_ID = :mer_ID");

    $stmt->bindValue(":store_name", $store_name);
    $stmt->bindValue(":mer_ID", $mer_ID);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    
    return $results[0]["store_ID"];

}


//$results = convert_storename_to_ID('Lamboguini Store',4);
//var_dump($results);

//exit;





















//EXPIRED       ************************************************************************************






























function get_promotions_expired($store_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_exp_date, promotion_address, promotion_code, store_ID FROM promotions_tbl WHERE store_ID = :store_ID AND promotion_exp_date <= :promotion_exp_date");

    $stmt->bindValue(":store_ID", $store_ID);
    $stmt->bindValue(":promotion_exp_date", date("Y-m-d"));

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}

/*
$results = get_promotions_expired(46);
var_dump($results);
//var_dump($results[0]["store_category"]);
exit;*/


//ACTIVE *********************************************************************

function get_promotions_active($store_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_exp_date, promotion_address, promotion_code, store_ID FROM promotions_tbl WHERE store_ID = :store_ID AND promotion_exp_date > :promotion_exp_date");

    $stmt->bindValue(":store_ID", $store_ID);
    $stmt->bindValue(":promotion_exp_date", date("Y-m-d"));

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}

//$results = get_promotions_active(52);
//var_dump($results);
//exit;
/*
$results = get_promotions_active(46);
var_dump($results);
//var_dump($results[0]["store_category"]);
exit;*/



function updatePromotions($promotion_ID) {
    global $db;

    $results = 0;

    $stmt = $db->prepare("UPDATE promotions_tbl SET promotion_exp_date = :promotion_exp_date WHERE promotion_ID = :promotion_ID");

    $binds = array (
        ":promotion_exp_date" => "1000-01-01",
        ":promotion_ID" => $promotion_ID,
      
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
        $results = 1;   
    }

    return $results;
}





//$results = updatePromotions(1);
//var_dump($results);
////exit;