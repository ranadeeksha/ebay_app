<?php 


if (!isset($_GET['etor'])) {
	die('Unauthorised Access value');
}


?>

<a href="https://signin.sandbox.ebay.com/authorize?client_id=deekshar-OrderDis-SBX-6134e8f72-71469deb&response_type=code&redirect_uri=deeksha_rana-deekshar-OrderD-zcgnjpjns&scope=https://api.ebay.com/oauth/api_scope https://api.ebay.com/oauth/api_scope/buy.order.readonly https://api.ebay.com/oauth/api_scope/buy.guest.order https://api.ebay.com/oauth/api_scope/sell.marketing.readonly https://api.ebay.com/oauth/api_scope/sell.marketing https://api.ebay.com/oauth/api_scope/sell.inventory.readonly https://api.ebay.com/oauth/api_scope/sell.inventory https://api.ebay.com/oauth/api_scope/sell.account.readonly https://api.ebay.com/oauth/api_scope/sell.account https://api.ebay.com/oauth/api_scope/sell.fulfillment.readonly https://api.ebay.com/oauth/api_scope/sell.fulfillment https://api.ebay.com/oauth/api_scope/sell.analytics.readonly">Get Outh Token</a>
