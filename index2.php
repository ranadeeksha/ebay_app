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
  CURLOPT_POSTFIELDS => "<?xml version=\"1.0\" encoding=\"utf-8\"?>\r\n<GetOrdersRequest xmlns=\"urn:ebay:apis:eBLBaseComponents\">\r\n\t<ErrorLanguage>en_US</ErrorLanguage>\r\n\t<WarningLevel>High</WarningLevel>\r\n<OrderRole>Seller</OrderRole>\r\n</GetOrdersRequest>\r\n",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache",
    "x-ebay-api-call-name: GetOrders",
    "x-ebay-api-compatibility-level: 967",
    "x-ebay-api-iaf-token: v^1.1#i^1#f^0#I^3#r^0#p^3#t^H4sIAAAAAAAAAOVXe2wURRi/64s0BYwP0KDIudYHhd3b1+3dbbgzV9qGKrSFa0ktoTC7O9su3ds9d3avPVByFFPfQRJAjaI1KgmoaCKESiIqJBqRiDFKDAaICkHBYMBEoxJw9vrgWgP0QWIT75/LfPO9ft/3+2Zn6ExRcVnXvK4/Jnkn5HVn6Eye18uU0MVFhbMm5+dNK/TQOQre7kxppqAz/6c5CCT0pLgIoqRpIOjrSOgGErPCCOFYhmgCpCHRAAmIRFsW47EF80WWosWkZdqmbOqEr7oiQsiQCbIgIAlKMMDyvIClRr/PejNCMIog05CFgipxDM25+wg5sNpANjDsCMHSTJBkGJIN1NNhkWNFXqCYEN9E+BZDC2mmgVUomohm0xWztlZOrldOFSAELRs7IaLVsap4bay6orKmfo4/x1e0rw5xG9gOGryaayrQtxjoDrxyGJTVFuOOLEOECH+0N8Jgp2KsP5lRpJ8tdZgNymEesCwnsYEATV+TUlaZVgLYV87DlWgKqWZVRWjYmp2+WkVxNaQVULb7VjXYRXWFz/1b6ABdUzVoRYjK8tiDDfHKRYQvXldnmSlNgYqLlOE4IcRzAkNEbYhwCaG1TIGwDbWCvlC9/voKPSTWXNNQNLdsyFdj2uUQ5w2HVofNqQ5WqjVqrZhquznl6DFMfxWDQpPb1t4+Onar4XYWJnApfNnl1XvQT4pLNLhWtJAgoMN49gAXDgVZqAyhhTvro6JG1O1OrK7O7+YCJZAmE8Bqg3ZSBzIkZVxeJwEtTRG5gMpyIRWSihBWST6sqqQUUASSUSGkIZQkORz6fzHEti1Ncmw4wJKhG1mYESIum0lYZ+qanCaGqmTPnT5OdKAI0WrbSdHvb29vp9o5yrRa/CxNM/7GBfPjcitMAGJAV7u6Mqll2SFDbIU00U4ncTYdmHw4uNFCRDlLqQOWnS530ngdh7qO//oJPCjD6FDpZaAiF+r4AunaI+wAJDXK5Tclmwm/CfA8u6Jl2Yx9w1HyS04ax1egRVkQKKahp4dv1+Jg/vZaD88I4W5QvaOIYQyK6M76SB2MIKhmpDCXTSs9QpiDjUdgA2TZdAx7NOH6TEdgoTq6qum6O66jCZhjPpI0DaCnbU1GAyHHNGWxZLJaGV9T1ncqW2StS/EKDZHx8kZSYDgehtQgSwYZXggrUBoTbgWmNBku08YZdsPR9THhqoCpy/UTz/or/9nnISQpDE8HcRsDNImvpIAMBSEgAwKn0IrChySBGRPuBS3jrZU1/tiYEM3VNXwy1KfH20dwnolsqIwNGr6Nji9Q7gnTf8DwCi+RNB9QSF4OM6TE8iqpBOTAcCEPEeRc6f51n/cPflJHPdkf0+n9gO70vo9f5XSQJplZ9Myi/IaC/IkE0mxIIWAoktlBaUClkNZi4BejBak2mE4Czcor8i659dR953Me891L6VsGnvPF+UxJztuevu3STiFz3c2TmCDDsAE6zLG80ETfeWm3gJlacFPRe38/QdzzSdcPz3ieruLWff7Wxcd/pycNKHm9hZ6CTq+n+GBJ07oMuwFt3S/uOZ+KV370YVebcGx2U9uqH187t3fjI1sOnwh/e9f0c4c9iSPvtP9yfEP8q571R04++ubLD0xY2L5w/7bVb8s9z154sXLWgZ3Udxd2pM82b980deuM5o037t67afX6h9YcK1U/u/6GGffOvP3TlT3+0sVl+w5W3d+z5+6ta3c2nGIPhL7PdKcmA23fS0e1Jah50fqvSz9eXvLndE/bmdVLfzt0+viKtnVV3yxfmypjDzdMfGzzri+qnjzuvPFu9I5NgaOhlZ6C52LRxsya1jnTTh0wnp/95ZRV1mOpyOkpO2aWcb9SKXNL89kzh1Zu3v76CXX/C9FX5y29ePLhn59qvLCrcre+7a/eNv4DEFBOIGYRAAA=",
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
  print_r($response);
}




?>
