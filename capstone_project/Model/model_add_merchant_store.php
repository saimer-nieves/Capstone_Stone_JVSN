
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