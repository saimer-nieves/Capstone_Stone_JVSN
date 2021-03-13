
<?php

include (__DIR__ . '/db.php');

function get_products($promotion_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT product_ID, promotion_ID, big_sale_title, product_title, product_img, product_price FROM products_library_BG WHERE promotion_ID = :promotion_ID");

  

    $binds = array (
        ":promotion_ID" => $promotion_ID
     
    );

    if ( $stmt->execute($binds) && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }


    return $results;

}

/*
$results = get_products(37);
var_dump($results);
exit;
*/



function add_products($promotion_ID, $big_sale_title , $product_title, $product_img, $product_price) {
    global $db;

    $results = 0;

    $stmt = $db->prepare("INSERT INTO products_library_BG SET promotion_ID = :promotion_ID , big_sale_title = :big_sale_title, product_title = :product_title, product_img = :product_img,  product_price = :product_price");

    $binds = array (
        ":promotion_ID" => $promotion_ID,
        ":big_sale_title" => $big_sale_title,
        ":product_title" => $product_title,
        ":product_img" => $product_img,
        ":product_price" => $product_price
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = 1;
    }

    return $results; 
}

/*
$testing = add_products(38,"LAMBORGUINI", "ROKU","imge.png", "10.99");
var_dump($testing);
exit;*/


function deleteProduct($store_ID) {
    global $db;

    $results = "ERROR: Deletion failed.";

    $stmt = $db->prepare("DELETE FROM merchant_stores_tbl WHERE store_ID = :store_ID");

    $stmt->bindValue(':store_ID', $store_ID);

    if ($stmt->execute() && $stmt->rowCount() > 0) {
        $results = "Store record successfully deleted.";
    }

    return $results;
}


