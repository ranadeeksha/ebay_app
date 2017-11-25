<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.sandbox.ebay.com/ws/api.dll",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<GetOrdersRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">\r\n\t<ErrorLanguage>en_US</ErrorLanguage>\r\n\t<WarningLevel>High</WarningLevel>\r\n  <OrderIDArray>\r\n    <OrderID>110244356306</OrderID>\r\n  </OrderIDArray>\r\n  <OrderRole>Seller</OrderRole>\r\n</GetOrdersRequest>\r\n",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "x-ebay-api-call-name: GetOrders",
    "x-ebay-api-compatibility-level: 967",
    "x-ebay-api-iaf-token: v^1.1#i^1#f^0#p^3#r^1#I^3#t^Ul4xMF8zOjNDREM2M0I3RjVENTdGNUJGRjAxNjZDQzRBMzY2OEU3XzFfMSNFXjEyODQ= ",
    "x-ebay-api-siteid: 3"
  ),
));

$response = curl_exec($curl);

$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 
     
 echo $response;
}




?>
