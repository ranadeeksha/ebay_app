<?php

/*  © 2013 eBay Inc., All Rights Reserved */ 
/* Licensed under CDDL 1.0 -  http://opensource.org/licenses/cddl1.php */
//require 'databaseconfig.php';

header("Content-Type: text/plain; charset=UTF-8");
//$response = simplexml_import_dom($responseDoc);
if ($entries == 0) {
    echo "Sorry No entries found in the Time period requested. Change CreateTimeFrom/CreateTimeTo and Try again";
} else {
    $orders = $response->OrderArray->Order;
    if ($orders != null) {
        foreach ($orders as $order) {
            echo "Order Information:\n";
            echo "OrderID ->" . $order->OrderID . "\n";
            // echo "Order -> Status:" . $orderStatus = $order->OrderStatus . "\n";
       }
   }
       else{
	echo "No Order Found";
	}
}
?>
