<?php  //show all errors - useful whilst developing
   defined('ENV') || define('ENV', 'DEVELOPMENT');
    error_reporting(E_ALL);
 


    if ($production) {
        $devID = '38bd1407-6150-4a2a-87ea-563d0dd48b61';   // these prod keys are different from sandbox keys
        $appID = 'deekshar-OrderDis-PRD-4134e8f72-9b7ef546';
        $certID = 'PRD-134e8f72e55b-f2f6-4e5d-9b99-8b3f';
        //set the Server to use (Sandbox or Production)
        $serverUrl   = 'https://api.ebay.com/ws/api.dll';      // server URL different for prod and sandbox
        $shoppingURL = 'http://open.api.ebay.com/shopping';
        $findingURL= 'http://svcs.ebay.com/services/search/FindingService/v1';

        $appToken = 'v^1.1#i^1#p^1#r^0#f^0#I^3#t^H4sIAAAAAAAAAOVXa2wUVRTu9mmFQoy8QiCug0oCzOy9M7O73Um7ZKHU1tAHbFsslcDszB320tmZzdwZ240opVCC4OOHpn9UAiiJRqVqqj9UMKIJmIgKhhjCQxONoiBRiTFEot6ZXcq2Ep5FSJw/kzn33HO/7zvn3DsX9JSWz9pQt+GPCl9Z4dYe0FPo88ExoLy0ZPa4osKpJQUgz8G3teeenuLeohNVRE7paWkxImnTIMjfndINInnGasaxDMmUCSaSIacQkWxFiscaFko8B6S0ZdqmYuqMv76mmpGRKKuVES2kKeFQOChSq3E+ZotZzagiUFQNKFqiUlOEhEbHCXFQvUFs2bCrGR7AMAshC8MtICjxIUnkOQHApYy/DVkEmwZ14QAT9eBK3lwrD+ulocqEIMumQZhofaw23hSrr1nQ2FIVyIsVzekQt2XbIcO/5psq8rfJuoMuvQzxvKW4oyiIECYQza4wPKgUOw/mGuB7UquaIPAa5JVQBMJwJDgqUtaaVkq2L43DtWCV1TxXCRk2tjOXU5SqkViFFDv31UhD1Nf43dciR9axhpFVzSyYF2uPNTczURWhTpKULbbJUpFVgwnbvLiGFaEgokotzLORRBhpQTGUWygbLSfziJXmm4aKXdGIv9G05yGKGo3UBuZpQ52ajCYrptkuony/cE5DPhJc6iY1m0XHThpuXlGKCuH3Pi+fgaHZtm3hhGOjoQgjBzyJaFul01hlRg56tZgrn25SzSRtOy0FAl1dXVyXwJnWygAPAAw82LAwriRRSmaor9vrWX98+Qks9qgoiM4kWLIzaYqlm9YqBWCsZKJ8iKdPTvfhsKIjrf8y5HEODO+I0eoQWYCqIItiQkskQkCAo9Eh0VyRBlwcKCFn2JRsdSI7rcsKYhVaZ04KWViVhKDGC5UaYtVQRGPFiKaxiaAaYqGGEEAokVAilf+nRrnSUo8rZho1mzpWMqNS8KNW7IKlNsuWnYkjXaeGK636i5IkLskbTs/t9aui6MYgNIicxpxb25xipgKmTDc117TcQ31dvDE9D2+ppFKCWaZYzR5knEeXIw8rnIWI6Vj0DOea3H29xexEBu0S2zJ1HVlt8LqUGL0d/Sbt5hdlpeiYyrj8VmN2ldvkNda2bN9E1sW9vo6LMIdBCCojIRFcX17ne3ltyfwHm9ZVJbbOJDZSb8APSGD4dSha4D2w1/c26PW9SW9UIADuhTPA3aVFrcVFY6cSbCMOyxpH8EqD/uVbiOtEmbSMrcJSX8e0N15ZnncB27oMTBm6gpUXwTF59zEw7cJICRw/uQKGIf29B0E+JPJLwYwLo8VwUvGE6Q0l8HDpuDvh/g2zft83c39EHTgNKoacfL6SAloZBcKEQWNAn/lDctuUuhNnY7tXbTvjvL8JT+iqX0HWbip38L4tDWqYkN1HbxtQP75rz5Z1oUX3b94pvrpoev+zx5NL2MOPPpDZqP3WgZpWf7Tx3Oxd771czL4jvfbUkScf2nPkhaPff3ffmSNlq9s3L1lzgP1aJOML9ef77jh4tNXp++LA02ptf/fO0p/Kjq05xW9ZMGvyY3NOnT44yN++Tt/8or9u4vZf9pftGPvp3+0fftl37tfu1s/m/PlX3/Gqb9Z3bn/mpdfPhg9Naqud699TeGxwzOGFHclHGqu+fevH4CHpwJqavrmrmp846dsRHPi5fe9BYe2S/g/Wv7vsc35Xh7x+x97HV1RM9D138iv8STZ9/wDJw8fcGg8AAA==';
        // This is used in the Auth and Auth flow

        // This is an initial token, not to be confused with the token that is fetched by the FetchToken call
      
    } else {
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
//         $token ='AgAAAA**AQAAAA**aAAAAA**lD4NWg**nY+sHZ2PrBmdj6wVnY+sEZ2PrA2dj6wFk4GnAJSBpw2dj6x9nY+seQ**e2MEAA**AAMAAA**VYxZnKO793nFBudW1KvWiHhpfIwa/kqWC4SmsapwwqwuLcbkYv2YUFIza68z+/8KfGKG+ybv9jY5FrObITyhnvgWAqCMv1EPJt3+eFQYFw5V3/aewWsf1KUaOokw/ILjjjSlevxj5BSJnM+TGO0wjLgh2DtMyMzBsFGTPIeVqGXp99CzL2GWMqoIA5KTehtyDsCqIQOdtkNJXH+wC06LfZ/anEm+xzOJwViNINMeq+oz/EnwvMLnQW8bczS8mmt8i8TNatUBhb0PN33A1Pv73MQQhdJ+fO+suzeRM+5YrC2mLiTS1fWhqNMqcQhB24Gbo9tH+g/LcIo+WzIZMvjqwjZEoZOeFPg+4G98UfoW712gBuy/pAS93LHZLUiRxcGWh3JMM79UOSuKQzaKqn9RCMMfY+UAAq6q/oEkrVCeq721azdhENGhx5BG52zVZChwTMAbh07yru2drDrzcmoCCzzDUcv7bI6AyATtnAn59Jy3+5uruYUDQLYU5pJy1lEv8lAl2jJeMxQ/DKp01Me6wSTYWDaqB26mEDpvzVxA2eXhCzOWttFTqVviIytaqoFShsRiS2mqExzxn82o2iZkKVpF5O45JWmhgs1frAfhdXUBYOFfHdWFXigbzWQ50jrs8tBxUndyo0Ekajm3tWF8YhPvxJzVnPcAfEP5b4+YCVWtEq5tFfXI6NfUTBBybiGhQk2R4BMqNWvLWyqhSeoEKZ9ZUiSxQHbKi3zlDbk9EnBrj3owXyzlJGpfczkPmGYK
// ';

        // This is the sandbox application token, not to be confused with the sandbox user token that is fetched.
        // This token is a long string - do not insert new lines.
      
     }
?> 
