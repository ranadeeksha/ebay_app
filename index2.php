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
  CURLOPT_POSTFIELDS => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<GetOrdersRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">\r\n\t<ErrorLanguage>en_US</ErrorLanguage>\r\n\t<WarningLevel>High</WarningLevel>\r\n <OrderIDArray>\r\n    <OrderID>142553041443-1460358999004</OrderID>\r\n </OrderIDArray>\r\n<OrderRole>Seller</OrderRole>\r\n</GetOrdersRequest>\r\n",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "x-ebay-api-call-name: GetOrders",
    "x-ebay-api-compatibility-level: 967",
    "x-ebay-api-iaf-token: v^1.1#i^1#f^0#I^3#r^0#p^3#t^H4sIAAAAAAAAAOVXW2wUVRju9moDBTWihIrZjCRSyuzO2ZnZy8Bu3bYQGmm7dkuFApYzM2e6Q2dnljkzbZebbSPlYpQYRWIMpDGKiSQSfCBAxAQTH+SFGEnUYKSKEm7GhChgQoxnthe2a4BeSGzivmzmnP/2ff/3n5nD9BSXLupf0X+rzFWSP9DD9OS7XGAGU1pcVDmrIH9eUR6TZeAa6FnQU9hXcHkphkktJTQhnDJ0jNzdSU3HQmYxTNmmLhgQq1jQYRJhwZKEeLR+peDzMELKNCxDMjTKXVcbpoIiYCTJ7wNiIMRLHE9W9ZGYzUaYConBkCJJkIFBjpMB2cbYRnU6tqBuhSkfAwI0ALSPbwZA4BgB8B6O9bVS7hZkYtXQiYmHoSKZaoWMr5lV6v0rhRgj0yJBqEhddHm8MVpXu6yheak3K1ZkmIa4BS0bj32qMWTkboGaje6fBmeshbgtSQhjyhsZyjA2qBAdKWYS5WeYJhzLIU6CEgoBKLLyQ6FyuWEmoXX/OpwVVaaVjKmAdEu10g9ilLAhbkSSNfzUQELU1bqdvxdtqKmKiswwtaw6umZVfFkT5Y7HYqbRqcpIdpAClvUHOdYPqIiFMKEQmW0yQh04AYdTDcUbJjonV42hy6pDG3Y3GFY1InWjXHbYLHaIUaPeaEYVy6kp244dYdHHtTptHeqjbSV0p7MoSahwZx4f3IMRUdyVwUOTheTnRD4QkPwsCLKskisLZ9YnI42I051oLOZ1akEiTNNJaHYgK6URBdISoddOIlOVBZZXfGxQQbTsDyk0F1IUWuRlPw0UhBiERFEKBf9fCrEsUxVtC42qJHcjAzNMxSUjhWKGpkppKtckc+4Ma6Ibh6mEZaUEr7erq8vTxXoMs93rYxjgXV2/Mi4lUBJSo7bqg41pNaMOCREvrApWOkWq6SbiI8n1dirCmnIMmla62k6T5zjSNPI3IuAxFUZyV+8BFTtQpxdIxx+TADClehx9eyQj6TUgmWdnqS1TsXs8Rl7RTpP8MjI9JoKyoWvp8fu120S/Q97jc8KkG56hUSQwxmZ0Zn2CASaQVNU7iZYNMz1BmGOdJ+ADJcmwdWsy6YZdJ+Ch2JqiapozrpNJmOU+kTJ1qKUtVcKjKac0ZdFUqk6eXlM2fCqbdKMj8VoV0/Hq1bQfsBwKKgEfHQCcPyQjcUq4ZdSpSqhNnWbYdVvTpoSrFnXes59k1g/+V6+HoCgDjgmQNvIMzUEfpIMBBGnez8qMLHNB0Q+mhLu+fbq1ssEbnRKiGk0lJ0Nzerq9BFcY2ELy1KCRr9HpBco5YUYOGE7mRJrheJnmpBCgRR+n0DIv8eOFnLOQ9Un3r+9579gbdSQv8wN9rlNMn+sEuZQzAYYGlUxFccGqwoKZFFYt5MFQl0Wj26NCxYPVdp3cGE3k6UDpFFTN/GLX2vKrVXey7vID65m5o7f50gIwI+tqzzx9d6cIzH6qDAQA8PGAzCrgW5ln7+4WgicLn7ixBVXN+WHftTe2tvx16TCL1h44VMuUjRq5XEV5hX2uvJLB44ljC89ebDGO00tm5Q/8cf7rm99sOPDrumAlaq659tiNxv53q9LVF+t7NzzedvnMvCvBj4tOf7b31QvlBw/s2L73kQWhFRx+oarxtXO75las+WROpPy7V07/vCWYWPxLxa3Sgj2739vFN515/4vG+df7WxYWXt36aV7H/Eer9Lf1O9LGbR9sn3nkzUuBbccv9K7d81IJ3XvoNyjfOXU0/u31ypfPFu9buTnddXvWFZd55PVFX90qD/29Y9ONJX3R9TWz62sql14//MySnd/v3PRW+Y8njg1+WbFu/+e/7xpYPFh5O/Dn88/9NPhRWWuotz5WXNu1+Z0SvPnDQ4Gt+5uO3jx38vzJedvOJfZsmhPeN9TGfwCSdFbaZREAAA==",
    "x-ebay-api-siteid: 3"
  ),
));

$response = curl_exec($curl);
$val = json_encode($response,true);
print_r($val);

$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
 
     
 echo $response;
  print_r($response);
}




?>
