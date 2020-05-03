<?php
session_start();

//Include Google client library 
include_once 'src/Google_Client.php';
include_once 'src/contrib/Google_Oauth2Service.php';

/*
 * Configuration and setup Google API
 */
$clientId = '1001027523751-dalh52ak5qcua08lh7f2tvfj9pcmhepu.apps.googleusercontent.com'; //Google client ID
$clientSecret = 'DGfk55r0mtHsYpG7rdrV25JL'; //Google client secret
$redirectURL = 'http://localhost/google_login/'; //Callback URL

//Call Google API
$gClient = new Google_Client();
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectURL);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>