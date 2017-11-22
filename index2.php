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
    "x-ebay-api-iaf-token: v^1.1#i^1#f^0#p^3#r^0#I^3#t^H4sIAAAAAAAAAOVXe2wURRjv9fqwImCCARQflwW1SPZuZm/vtXBnrlwJRfqAK6XyCJnbmW2X7u1ednZ7PTGxaRAr+h+P+CCC8g8RBY2CkChGQqKAfxjAxNCIQRJt0BgMJtYA0dnrg2sN0AeJTbx/LjPzvX7f9/tm5wOdZRVPbVm65c+prvLiPZ2gs9jlglNARVnpgmnu4odKi0CBgGtP57zOki537yKK0lpGWkloxtAp8XSkNZ1K+c0oZ5u6ZCCqUklHaUIlS5aS8drlkuAFUsY0LEM2NM5Tk4hyfhLxIwgITGGoiDJku/qgzUYjyqGwHA4pqQAIi0rQHxbYOaU2qdGphXQrygkAhngIeUFohEASgQSD3og/sobzNBGTqobORLyAi+XDlfK6ZkGstw8VUUpMixnhYjXxJcn6eE2iuq5xka/AVmwgD0kLWTYdvlpsYOJpQppNbu+G5qWlpC3LhFLOF+v3MNyoFB8MZhzh51MdCuCQIgM5jEORcFiR70oqlxhmGlm3j8PZUTGv5EUloluqlbtTRlk2UhuJbA2s6piJmoTH+VthI01VVGJGueqq+LOrktUrOU+yocE02lVMsIMU+v3BsOgPQi5mEcpSSMwNmJA22ooGXPXbG0j0CF+LDR2rTtqop86wqgiLm4zMjr8gO0yoXq8344rlxFQoJwxlUVjjlLW/jrbVqjuVJWmWCk9+eecaDJLiJg3uGi2ggAUFQQjkEIYhOIIWTq+PixoxpzrxhgafEwtJoRyfRmYbsTIakgkvs/TaaWKqWPIHFMEfVgiPgxGFFyOKwqcCOMhDhRBASColR8L/L4ZYlqmmbIsMsWTkQR5mlEvKRoY0GJoq57iRIvl7Z4ATHTTKtVpWRvL5stmsN+v3GmaLTwAA+pprlyflVpJG3JCsemdhXs2zQyZMi6qSlcuwaDoY+ZhzvYWL+U3cgEwrV2Xn2DpJNI39DRJ4WISxkbu3gEodqJMLpKNPmQGUUb0Ov72ykfYZiPWzs7UhH7FnNEK+lJ1j/jExvSZB2NC13Oj1WmzG337t0SlRVg1vfysyGMM8Or0+VgNjcKrq7YzLhpkbI8zhymPQQbJs2Lo1HncDqmPQUGxNUTXNadfxOCxQH0uYOtJylirTIZcT6rJ4JlODJ1eXDdzKJl/vUDyhUj5Z1cwHoV8kYSUk8CEoBiOYpCaEG5N2VSYb1EmGXbc1bUK4EqT9VvVkvb77P/s8hNlrXwQhVsYA4EUkID4cIogPBP0YYCyGU0E4Idy1LZOtlHW++IQQLdZUdjM05ibbR3CpQS2CJwaNvUYnFyjnhhm8YEQspnggBjAvyhHIpwRR4XFADowW8oiNgifdv97zvuEjdawo/4Ndrs9Al+som8pBCPBwAZhf5l5V4r6Po6pFvBTpOGV0eFWkeKnaorOJ0STeNpLLINUsLnOtnXP56esFw/ye9WD20Dhf4YZTCmZ78PDNk1I4fdZUNg5AQYBABDC4Bsy9eVoCZ5Y88NP0yi/Ofbu8e0fPpky6+8V7+p67fgFMHRJyuUqLSrpcRbtkd2XvoWyFWfn+mVMHgocuNMnHFl4v/+6q/MjOtW37ruGt/pOWdWL1Rldv70uedVnzc/Jga/SjdPzq2bajtX1fzbgy+8j3xzpnPIFnPvnoQff8H0//kD6X29/5h6d7AZX2b/1m1ZxN3OF3H2/b6dOXNHVtL9sWfevtyC/LPpl2Y2H95Zd3vc7tTUw/v2vzx0bp8Z2VtWc3Fz8W8b0QSFza23Okqfy9V+7dse618nTTjTciOHYyW9qz7Z2vMyj41/MzV195U91y4szWU33uyPqTB06HLh5L/Las7PceKPx68JnZ5z/I7qu+/8K2w82zPrWPX0xvn3epubn71e2LNlfOv/Zl3d8/f7gs3rfbs6K/jP8AeKqLNmYRAAA=",
    "x-ebay-api-siteid: 3"
  ),
));

$response = curl_exec($curl);
$response_arry=json_decode($response,true)
$err = curl_error($curl);

curl_close($curl);

// if ($err) {
//   echo "cURL Error #:" . $err;
// } else {
  echo $response;
//}


?>
