<?php 

require __DIR__ . '/vendor/autoload.php';

  $config = array( 
    "base_url" => "http://searitoshybridauth.com/src/hybrid.php",  
     "providers" => array (
        "Facebook" => array ( 
          "enabled" => true,
          "keys"    => array ( "id" => "753326938062513", "secret" => "3b5846d143b0db83eef185f96c95d282" ), 
          "scope"   => "email, user_about_me, user_birthday, user_hometown" // optional
    )));    
    
    $hybridauth = new Hybrid_Auth( $config );
    
    $adapter = $hybridauth->authenticate( "Facebook" );  
    
    $user_profile = $adapter->getUserProfile(); 