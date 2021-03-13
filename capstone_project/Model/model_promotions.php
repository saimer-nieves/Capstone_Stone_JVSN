
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


function get_One_promotion($promotion_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT promotion_ID, promotion_type, promotion_title, promotion_exp_date, promotion_description, promotion_code, store_ID FROM promotions_tbl WHERE promotion_ID = :promotion_ID");

    $stmt->bindValue(":promotion_ID", $promotion_ID);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}







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
/*
$testing = add_promotions("big sale","THIS SALE IS BIG","COOK",NULL , "2021-10-25","WE WILL HAVE A SLE OF 50 ONLY TOMOEEOW", "456 - 4156 - FG5G","53");
var_dump($testing);
exit;*/
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
    
    $stmt = $db->prepare("SELECT promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_address, promotion_exp_date, promotion_description, promotion_code, store_ID FROM promotions_tbl WHERE store_ID = :store_ID AND promotion_exp_date <= :promotion_exp_date");

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
    
    $stmt = $db->prepare("SELECT promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_address, promotion_exp_date, promotion_description, promotion_code, store_ID FROM promotions_tbl WHERE store_ID = :store_ID AND promotion_exp_date > :promotion_exp_date");

    $stmt->bindValue(":store_ID", $store_ID);
    $stmt->bindValue(":promotion_exp_date", date("Y-m-d"));

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}




function get_most_recent_promotion($promotion_title, $store_ID, $promotion_address, $promotion_exp_date, $promotion_description) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_address, promotion_exp_date, promotion_description, promotion_code, store_ID FROM promotions_tbl WHERE promotion_title = :promotion_title AND store_ID = :store_ID AND promotion_address = :promotion_address AND promotion_exp_date = :promotion_exp_date AND promotion_description = :promotion_description"); 
                                                                                                                                                                                                                                                        //$promotion_title, $store_ID, $promotion_address, $promotion_exp_date, $promotion_description
    $stmt->bindValue(":promotion_title", $promotion_title);
    $stmt->bindValue(":store_ID", $store_ID);
    $stmt->bindValue(":promotion_address", $promotion_address);
    $stmt->bindValue(":promotion_exp_date", $promotion_exp_date);
    $stmt->bindValue(":promotion_description", $promotion_description);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}

/*
$results = get_most_recent_promotion('France Shop', 71 ,'first floor hospittal', '2021-03-26 00:00:00', 'we will sale new fruits');
var_dump($results);
exit;*/
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


function get_active_Big_Sales($store_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_address, promotion_exp_date, promotion_description, promotion_code, store_ID FROM promotions_tbl WHERE store_ID = :store_ID AND promotion_exp_date > :promotion_exp_date AND promotion_type = :promotion_type");

    $stmt->bindValue(":store_ID", $store_ID);
    $stmt->bindValue(":promotion_exp_date", date("Y-m-d"));
    $stmt->bindValue(":promotion_type", 'big sale');

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}




function get_ONE_BIG_SALE($store_ID, $big_sale_title) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT promotion_ID, promotion_type, promotion_title, promotion_subheading, promotion_address, promotion_exp_date, promotion_description, promotion_code, store_ID FROM promotions_tbl WHERE store_ID = :store_ID AND promotion_exp_date > :promotion_exp_date AND promotion_title = :promotion_title");

    $stmt->bindValue(":store_ID", $store_ID);
    $stmt->bindValue(":promotion_exp_date", date("Y-m-d"));
    $stmt->bindValue(":promotion_title", $big_sale_title);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}

/*
$results =  get_ONE_BIG_SALE(53, 'Lambo BIGSL');
var_dump($results);
exit;*/


/*
$results = get_active_Big_Sales(53);
var_dump($results);
exit;*/









//$results = updatePromotions(1);
//var_dump($results);
////exit;