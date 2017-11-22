<?php 

ini_set('error_reporting', E_ALL);

if (isset($_GET['code'])) {
  $Authorization_code = $_GET['code'];
}
else
{
  die();
}

include_once 'keys.php';
$auth_code=$Authorization_code;
$curl_params="grant_type=authorization_code&code=$auth_code&redirect_uri=$runame";

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


$file = fopen("access_token.txt","w");
fwrite($file,$user_access_token_array['access_token']);
fclose($file);


$file2 = fopen("refresh_token.txt","w");
fwrite($file2,$user_access_token_array['refresh_token']);
fclose($file2);

?>
