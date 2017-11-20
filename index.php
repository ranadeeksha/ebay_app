<?php 


if (!isset($_GET['etor'])) {
	die('Unauthorised Access');
}


?>

<a href="https://signin.ebay.com/authorize?client_id=AtsushiK-Etoren-PRD-e132041a0-f9c6b726&response_type=code&state=etor&redirect_uri=Atsushi_Kurihar-AtsushiK-Etoren-noiupgut&scope=https://api.ebay.com/oauth/api_scope https://api.ebay.com/oauth/api_scope/sell.marketing.readonly https://api.ebay.com/oauth/api_scope/sell.marketing https://api.ebay.com/oauth/api_scope/sell.inventory.readonly https://api.ebay.com/oauth/api_scope/sell.inventory https://api.ebay.com/oauth/api_scope/sell.account.readonly https://api.ebay.com/oauth/api_scope/sell.account https://api.ebay.com/oauth/api_scope/sell.fulfillment.readonly https://api.ebay.com/oauth/api_scope/sell.fulfillment https://api.ebay.com/oauth/api_scope/sell.analytics.readonly">Get Outh Token</a>