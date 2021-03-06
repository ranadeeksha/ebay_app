<?php
/*  © 2013 eBay Inc., All Rights Reserved */ 
/* Licensed under CDDL 1.0 -  http://opensource.org/licenses/cddl1.php */
?>
<?php
session_start();
set_time_limit(0);
ini_set("display_errors", 1);
require 'keys.php';
require 'eBaySession.php';
$siteID = 3;
$verb = 'GetOrders';
echo $verb ;
$CreateTimeFrom = gmdate("Y-m-d\TH:i:s",time()-1800);
$CreateTimeTo = gmdate("Y-m-d\TH:i:s");
$requestXmlBody = '<?xml version="1.0" encoding="utf-8" ?>';
$requestXmlBody .= '<GetOrdersRequest xmlns="urn:ebay:apis:eBLBaseComponents">';
$requestXmlBody .= "<RequesterCredentials><eBayAuthToken>$userToken</eBayAuthToken></RequesterCredentials>";
$requestXmlBody .= "<CreateTimeFrom>$CreateTimeFrom</CreateTimeFrom><CreateTimeTo>$CreateTimeTo</CreateTimeTo>";
$requestXmlBody .= "<OrderIDArray><OrderID>142553041443-1460358999004</OrderID></OrderIDArray>";
$requestXmlBody .= '<OrderRole>Seller</OrderRole><OrderStatus>Active</OrderStatus>';
$requestXmlBody .= '</GetOrdersRequest>';
print_r($requestXmlBody);
$session = new eBaySession($userToken , $devID, $appID, $certID, $serverUrl, $compatabilityLevel, $siteID, $verb);
print_r($session);
$responseXml = $session->sendHttpRequest($requestXmlBody);
print_r($responseXm);
if (stristr($responseXml, 'HTTP 404') || $responseXml == '')
    die('<P>Error sending request');
//Xml string is parsed and creates a DOM Document object
$responseDoc = new DomDocument();
$responseDoc->loadXML($responseXml);
//get any error nodes
$errors = $responseDoc->getElementsByTagName('Errors');
$response = simplexml_import_dom($responseDoc);
$entries = $response->PaginationResult->TotalNumberOfEntries;
//if there are error nodes
if ($errors->length > 0) {
    echo '<P><B>eBay returned the following error(s):</B>';
    //display each error
    //Get error code, ShortMesaage and LongMessage
    $code = $errors->item(0)->getElementsByTagName('ErrorCode');
    $shortMsg = $errors->item(0)->getElementsByTagName('ShortMessage');
    $longMsg = $errors->item(0)->getElementsByTagName('LongMessage');
    
    //Display code and shortmessage
    echo '<P>', $code->item(0)->nodeValue, ' : ', str_replace(">", "&gt;", str_replace("<", "&lt;", $shortMsg->item(0)->nodeValue));
    
    //if there is a long message (ie ErrorLevel=1), display it
    if (count($longMsg) > 0)
        echo '<BR>', str_replace(">", "&gt;", str_replace("<", "&lt;", $longMsg->item(0)->nodeValue));
}else { //If there are no errors, continue
    if(isset($_GET['debug']))
    {  
       header("Content-type: text/xml");
       print_r($responseXml);
    }else
     {  //$responseXml is parsed in view.php
        include_once 'view.php';
    }
} 
?>
