
<?php
// /*  © 2013 eBay Inc., All Rights Reserved */ 
// /* Licensed under CDDL 1.0 -  http://opensource.org/licenses/cddl1.php */
// ?>
// <?php
// session_start();
// set_time_limit(0);
// ini_set("display_errors", 1);
// require 'keys.php';
// require 'eBaySession.php';
// $siteID = 0;
// $verb = 'GetOrders';
// $CreateTimeFrom = gmdate("Y-m-d\TH:i:s",time()-1800);
// $CreateTimeTo = gmdate("Y-m-d\TH:i:s");

// $requestXmlBody = '<?xml version="1.0" encoding="utf-8" ?>';
// $requestXmlBody .= '<GetOrdersRequest xmlns="urn:ebay:apis:eBLBaseComponents">';
// $requestXmlBody .= '<DetailLevel>ReturnAll</DetailLevel>';
// $requestXmlBody .= "<CreateTimeFrom>$CreateTimeFrom</CreateTimeFrom><CreateTimeTo>$CreateTimeTo</CreateTimeTo>";
// $requestXmlBody .= '<OrderRole>Seller</OrderRole><OrderStatus>Active</OrderStatus>';
// $requestXmlBody .= "<RequesterCredentials><eBayAuthToken>$userToken</eBayAuthToken></RequesterCredentials>";
// $requestXmlBody .= '</GetOrdersRequest>';
// print_r($requestXmlBody);
// $session = new eBaySession($userToken, $devID, $appID, $certID, $serverUrl, $compatabilityLevel, $siteID, $verb);
// print_r($session );
// $responseXml = $session->sendHttpRequest($requestXmlBody);
// print_r($responseXml);
//  if (stristr($responseXml, 'HTTP 404') || $responseXml == '' )
//      die('<P>Error sending request');
// //Xml string is parsed and creates a DOM Document object
// $responseDoc = new DomDocument();
// $responseDoc->loadXML($responseXml);
// //get any error nodes
// $errors = $responseDoc->getElementsByTagName('Errors');
// $response = simplexml_import_dom($responseDoc);
// $entries = $response->PaginationResult->TotalNumberOfEntries;
// //if there are error nodes
// if ($errors->length > 0) {
//     echo '<P><B>eBay returned the following error(s):</B>';
//     //display each error
//     //Get error code, ShortMesaage and LongMessage
//     $code = $errors->item(0)->getElementsByTagName('ErrorCode');
//     $shortMsg = $errors->item(0)->getElementsByTagName('ShortMessage');
//     $longMsg = $errors->item(0)->getElementsByTagName('LongMessage');
    
//     //Display code and shortmessage
//     echo '<P>', $code->item(0)->nodeValue, ' : ', str_replace(">", "&gt;", str_replace("<", "&lt;", $shortMsg->item(0)->nodeValue));
    
//     //if there is a long message (ie ErrorLevel=1), display it
//     if (count($longMsg) > 0)
//         echo '<BR>', str_replace(">", "&gt;", str_replace("<", "&lt;", $longMsg->item(0)->nodeValue));
// }else { //If there are no errors, continue
//     if(isset($_GET['debug']))
//     {  
//        header("Content-type: text/xml");
//        print_r($responseXml);
//     }else
//      {  //$responseXml is parsed in view.php
//         include_once 'view.php';
//     }
// }
 
 
 
 
 
 
?>
 <?php
 error_reporting(E_ALL);          // useful to see all notices in development
require_once('keys.php');
require_once('eBaySession.php');


class Token
{
    public $resp;  // This is the entire response as a Simple XML object
    public $token;
    public $expiration;

	function __construct($username, $theID)
    {
        global  $devID, $appID, $certID, $serverUrl, $compatabilityLevel, $siteID; // defined in keys.php

        $verb = 'FetchToken';

        ///Build the request Xml string
        $requestXmlBody = '<?xml version="1.0" encoding="utf-8" ?>';
        $requestXmlBody .= '<FetchTokenRequest xmlns="urn:ebay:apis:eBLBaseComponents">';
       // $requestXmlBody .= "<RequesterCredentials><Username>$username</Username></RequesterCredentials>";
        $requestXmlBody  .=' <Version>613</Version>';
        $requestXmlBody .=' <RequesterCredentials>
                            <DevId>$devID</DevId>
                            <AppId>$appID </AppId>
                            <AuthCert>$certID </AuthCert>
                            </RequesterCredentials>';
        $requestXmlBody .= "<SessionID>$theID</SessionID>";
        $requestXmlBody .= '</FetchTokenRequest>';
        print_r( $requestXmlBody);
        //Create a new eBay session with all details pulled in from included keys.php
        $session = new eBaySession($devID, $appID, $certID, $serverUrl, $compatabilityLevel, $siteID, $verb);
        //send the request and get response
        $responseXml = $session->sendHttpRequest($requestXmlBody);
       print( $responseXml);
        if(stristr($responseXml, 'HTTP 404') || $responseXml == '')
            die('<P>Error sending request');

        $resp = simplexml_load_string($responseXml);
        $this->token = (string)$resp->eBayAuthToken;  // need to cast to string (not SimpleXML element) to persist in SESSION
        $this->expiration = $resp->HardExpirationTime;


    } // __construct

} // class

 
 ?>
 
 
 
