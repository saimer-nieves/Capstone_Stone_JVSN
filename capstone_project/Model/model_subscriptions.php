
<?php

include (__DIR__ . '/db.php');

function add_subscriber($subscription_active, $subscription_date,$subscription_exit_date, $store_ID, $cus_ID) {
    global $db;

    $results = 0;

    $stmt = $db->prepare("INSERT INTO subscriptions_tbl SET subscription_active = :subscription_active, subscription_date = :subscription_date, subscription_exit_date = :subscription_exit_date, store_ID = :store_ID, cus_ID = :cus_ID");

    $binds = array (
        ":subscription_active" => $subscription_active,
        ":subscription_date" => $subscription_date,
        ":subscription_exit_date" => $subscription_exit_date,
        ":store_ID" => $store_ID,
        ":cus_ID" => $cus_ID
  
    );

    if ($stmt->execute($binds) && $stmt->rowCount() > 0) {
        $results = 1;
    }

    return $results; 
}

//stores 52 53 54 55//

// $test = add_subscriber("true", date("Y-m-d"), null, 53, 5);
// $test = add_subscriber("true", date("Y-m-d"), null, 56, 5);
 //$test = add_subscriber("true", date("Y-m-d"), null, 76, 5);
 //$test = add_subscriber("true", date("Y-m-d"), null, 77, 5);
// ////var_dump($test);
// exit;

//customer 5 6 7 



function get_subscriptions($cus_ID) {
    global $db;

    $results = [];
    
    $stmt = $db->prepare("SELECT subscription_ID, subscription_active, subscription_date, subscription_exit_date, store_ID, cus_ID FROM subscriptions_tbl WHERE cus_ID = :cus_ID");

    $stmt->bindValue(":cus_ID", $cus_ID);

    if ( $stmt->execute() && $stmt->rowCount() > 0 ) {
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);   
    }

    return $results;

}



//$test = get_subscriptions(4);
//var_dump($test);
//exit;