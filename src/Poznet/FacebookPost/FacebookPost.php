<?php

namespace Poznet\FacebookPost;

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphObject;
use Facebook\FacebookRequestException;

 
class FacebookPost {
    
    private $config = array();
    
    public function __construct($id=NULL,$secret=NULL,$token) {
        $this->config['appId'] = $id;
        $this->config['secret'] = $secret;
        $this->config['fileUpload'] =false;
        
        $fb = new Facebook($config);
 
// define your POST parameters (replace with your own values)
$params = array(
  "access_token" => "YOUR_ACCESS_TOKEN", // see: https://developers.facebook.com/docs/facebook-login/access-tokens/
  "message" => "Here is a blog post about auto posting on Facebook using PHP #php #facebook",
  "link" => "http://www.pontikis.net/blog/auto_post_on_facebook_with_php",
  "picture" => "http://i.imgur.com/lHkOsiH.png",
  "name" => "How to Auto Post on Facebook with PHP",
  "caption" => "www.pontikis.net",
  "description" => "Automatically post on Facebook with PHP using Facebook PHP SDK. How to create a Facebook app. Obtain and extend Facebook access tokens. Cron automation."
);
        
        //
     
}
}
