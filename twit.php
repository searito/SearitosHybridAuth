<?php

require __DIR__ . '/vendor/autoload.php';

#require_once( "http://searitoshybridauth.com/src/hybrid.php" );
 
$config = array( 
   // "base_url" the url that point to HybridAuth Endpoint (where the index.php and config.php are found) 
   "base_url" => "http://searitoshybridauth.com/src/hybrid.php",
 
   "providers" => array ( 
       "Twitter" => array ( 
           "enabled" => true, "keys" => array ( "key" => "s01RSQAGUlSHUVGtns0OlAkSH", "secret" => "5N1Fa1FFXKcSIZy8adfa7QywUAGtkDiAn9OX5xfE9hebTe5BYC" )
       ) 
   ) 
);
 
$hybridauth = new Hybrid_Auth( $config );
    
    $adapter = $hybridauth->authenticate( "Twitter" );  
    
    $user_profile = $adapter->getUserProfile(); 