
<?php

include (__DIR__ . '/db.php');

function get_merchant_stores($mer_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT store_ID, store_name, store_category, store_day_created, store_img_logo,mer_ID FROM merchant_stores_tbl WHERE mer_ID = :mer_ID");

    $stmt->bindValue(":mer_ID", $mer_ID);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}

/*
$results = get_merchant_stores(1);
var_dump($results[0]["store_category"]);
exit;*/

function add_merchant_stores($store_name, $store_category, $store_day_created, $store_img_logo, $mer_ID) {
    global $db;

    $results = 0;

    $stmt = $db->prepare("INSERT INTO merchant_stores_tbl SET store_name = :store_name, store_category = :store_category, store_day_created = :store_day_created, store_img_logo = :store_img_logo, mer_ID = :mer_ID");

    $binds = array (
        ":store_name" => $store_name,
        ":store_category" => $store_category,
        ":store_day_created" => $store_day_created,
        ":store_img_logo" => $store_img_logo,
        ":mer_ID" => $mer_ID
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = 1;
    }

    return $results; 
}
/*date("m/d/Y") this will help you set your time  */
/*
$testing = add_merchant_stores("JC Providence", "Clothing", date("Y-m-d"), "myLogo.png", 1);
var_dump($testing);
exit;*/



function deleteStore($store_ID) {
    global $db;

    $results = "ERROR: Deletion failed.";

    $stmt = $db->prepare("DELETE FROM merchant_stores_tbl WHERE store_ID = :store_ID");

    $stmt->bindValue(':store_ID', $store_ID);

    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = "Store record successfully deleted.";
    }

    return $results;
}



function get_merchant_stores_with_storesID($store_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT store_ID, store_name, store_category, store_day_created, store_img_logo,mer_ID FROM merchant_stores_tbl WHERE store_ID = :store_ID");

    $stmt->bindValue(":store_ID", $store_ID);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}


// $answer = get_merchant_stores_with_storesID(69);
// var_dump($answer);
// exit;
function get_searched_stores($store_name) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT store_ID, store_name, store_category, store_day_created, store_img_logo,mer_ID FROM merchant_stores_tbl WHERE store_name LIKE :store_name");

    $stmt->bindValue(":store_name", $store_name);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}

// $answer = get_searched_stores("am store");
// var_dump($answer);
// exit;



function add_admin_stores($store_name, $store_category, $store_day_created, $store_img_logo) {
    global $db;

    $results = 0;

    $stmt = $db->prepare("INSERT INTO admin_stores_tbl SET store_name = :store_name, store_category = :store_category, store_day_created = :store_day_created, store_img_logo = :store_img_logo");

    $binds = array (
        ":store_name" => $store_name,
        ":store_category" => $store_category,
        ":store_day_created" => $store_day_created,
        ":store_img_logo" => $store_img_logo
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = 1;
    }

    return $results; 
}
/*
$testing_this = add_admin_stores('American Eagle', 'Clothes', date('Y-m-d'), 'ae_logo.png');
$testing_this1 = add_admin_stores('The Cheesecake Factory', 'Arcade & Family', date('Y-m-d'), 'cheesecake_logo.jpg');
$testing_this2 = add_admin_stores("The Children's Place", 'Restaurant', date('Y-m-d'), 'childrenplace_logo.jpg');


/*
var_dump($testing_this);
exit;*/



function get_all_admin_stores($admin_store_ID_minimum) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT admin_store_ID, store_name, store_category, store_day_created, store_img_logo FROM admin_stores_tbl WHERE admin_store_ID > :admin_store_ID_minimum");

    $stmt->bindValue(":admin_store_ID_minimum", $admin_store_ID_minimum);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}

/*
$mee = get_all_admin_stores(0);
var_dump($mee);
exit;*/