<?php  //show all errors - useful whilst developing
    error_reporting(E_ALL);


    // if ($production) {
    //     $devID = '38bd1407-6150-4a2a-87ea-563d0dd48b61';   // these prod keys are different from sandbox keys
    //     $appID = 'deekshar-OrderDis-PRD-4134e8f72-9b7ef546';
    //     $certID = 'PRD-134e8f72e55b-f2f6-4e5d-9b99-8b3f';
    //     //set the Server to use (Sandbox or Production)
    //     $serverUrl   = 'https://api.ebay.com/ws/api.dll';      // server URL different for prod and sandbox
    //     $shoppingURL = 'http://open.api.ebay.com/shopping';
    //     $findingURL= 'http://svcs.ebay.com/services/search/FindingService/v1';


    //     // This is used in the Auth and Auth flow

    //     // This is an initial token, not to be confused with the token that is fetched by the FetchToken call
      
    // } else {
        // sandbox (test) environment
        $devID  = '38bd1407-6150-4a2a-87ea-563d0dd48b61';   // insert your devID for sandbox
        $appID  = 'deekshar-OrderDis-SBX-6134e8f72-71469deb';   // different from prod keys
        $certID = 'SBX-134e8f724d4b-045d-4c91-b24f-d5c5';   // need three keys and one token
        //set the Server to use (Sandbox or Production)
        $serverUrl = 'https://api.sandbox.ebay.com/ws/api.dll';
        $shoppingURL = 'http://open.api.sandbox.ebay.com/shopping';
        $findingURL= 'http://svcs.sandbox.ebay.com/services/search/FindingService/v1';


        $loginURL = 'https://signin.sandbox.ebay.com/ws/eBayISAPI.dll'; // This is the URL to start the Auth & Auth process
        $feedbackURL = 'http://feedback.sandbox.ebay.com/ws/eBayISAPI.dll'; // This is used to for link to feedback

        $runame = 'deeksha_rana-deekshar-OrderD-zcgnjpjns';  // sandbox runame
        $token ='AgAAAA**AQAAAA**aAAAAA**lD4NWg**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4GnAJSBpw2dj6x9nY+seQ**e2MEAA**AAMAAA**VYxZnKO793nFBudW1KvWiHhpfIwa/kqWC4SmsapwwqwuLcbkYv2YUFIza68z+/8KfGKG+ybv9jY5FrObITyhnvgWAqCMv1EPJt3+eFQYFw5V3/aewWsf1KUaOokw/ILjjjSlevxj5BSJnM+TGO0wjLgh2DtMyMzBsFGTPIeVqGXp99CzL2GWMqoIA5KTehtyDsCqIQOdtkNJXH+wC06LfZ/anEm+xzOJwViNINMeq+oz/EnwvMLnQW8bczS8mmt8i8TNatUBhb0PN33A1Pv73MQQhdJ+fO+suzeRM+5YrC2mLiTS1fWhqNMqcQhB24Gbo9tH+g/LcIo+WzIZMvjqwjZEoZOeFPg+4G98UfoW712gBuy/pAS93LHZLUiRxcGWh3JMM79UOSuKQzaKqn9RCMMfY+UAAq6q/oEkrVCeq721azdhENGhx5BG52zVZChwTMAbh07yru2drDrzcmoCCzzDUcv7bI6AyATtnAn59Jy3+5uruYUDQLYU5pJy1lEv8lAl2jJeMxQ/DKp01Me6wSTYWDaqB26mEDpvzVxA2eXhCzOWttFTqVviIytaqoFShsRiS2mqExzxn82o2iZkKVpF5O45JWmhgs1frAfhdXUBYOFfHdWFXigbzWQ50jrs8tBxUndyo0Ekajm3tWF8YhPvxJzVnPcAfEP5b4+YCVWtEq5tFfXI6NfUTBBybiGhQk2R4BMqNWvLWyqhSeoEKZ9ZUiSxQHbKi3zlDbk9EnBrj3owXyzlJGpfczkPmGYK
';

        // This is the sandbox application token, not to be confused with the sandbox user token that is fetched.
        // This token is a long string - do not insert new lines.
      
    // }


?> 