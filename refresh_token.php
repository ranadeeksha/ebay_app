<?php 

$refresh_token = file_get_contents('refresh_token.txt');
include_once 'keys.php';
$auth_code=$Authorization_code;
$curl_params="grant_type=refresh_token&refresh_token=$refresh_token&scope=https://api.ebay.com/oauth/api_scope https://api.ebay.com/oauth/api_scope/buy.order.readonly https://api.ebay.com/oauth/api_scope/buy.guest.order https://api.ebay.com/oauth/api_scope/sell.marketing.readonly https://api.ebay.com/oauth/api_scope/sell.marketing https://api.ebay.com/oauth/api_scope/sell.inventory.readonly https://api.ebay.com/oauth/api_scope/sell.inventory https://api.ebay.com/oauth/api_scope/sell.account.readonly https://api.ebay.com/oauth/api_scope/sell.account https://api.ebay.com/oauth/api_scope/sell.fulfillment.readonly https://api.ebay.com/oauth/api_scope/sell.fulfillment https://api.ebay.com/oauth/api_scope/sell.analytics.readonly";

$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, $ebay_token_url);
curl_setopt($curl_handle, CURLOPT_HTTPHEADER, array(
  "Content-Type: application/x-www-form-urlencoded",
  "Authorization: Basic " . base64_encode($appID . ':' . $certID)
  ));
curl_setopt($curl_handle, CURLOPT_POST, true);
curl_setopt($curl_handle, CURLOPT_POSTFIELDS, $curl_params);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);

$curl_response = curl_exec($curl_handle);
$user_access_token_array = json_decode($curl_response,true);
print_r($user_access_token_array);
$curl_error = curl_errno($curl_handle);
if ($curl_error) {
  $curl_error = curl_error($curl_handle);
  die();
}

$user_access_token_array['access_token'];
$file = fopen("access_token.txt","w");
fwrite($file,$user_access_token_array['access_token']);
fclose($file);

?>
