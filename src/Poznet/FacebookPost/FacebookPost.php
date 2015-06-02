<?php

namespace Poznet\FacebookPost;

use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphUser;
use Facebook\FacebookRequestException;

 
class FacebookPost {
    
    private $config = array();
    private $data=array();
    
    public function __construct($id=NULL,$secret=NULL,$token=NULL,$url=NULL) {
        $this->config['appId'] = $id;
        $this->config['secret'] = $secret;
        $this->config['fileUpload'] =false;
        $this->config['url'] =$url;
        $this->data['access_token']=$token;        
        FacebookSession::setDefaultApplication($this->config['appId'], $this->config['secret']);
    }
    
    public function setMessage($txt){
        $this->data['message']=$txt;
    }
    
    public function setLink($link){
        $this->data['link']=$link;
    }
    
     public function setPicture($image){
        $this->data['picture']=$image;
    }
    
    public function setName($name){
        $this->data['name']=$name;
    }
    
    public function setDescription($txt){
        $this->data['description']=$txt;
    }
    
    public function post(){
        $session = new FacebookSession($this->data['access_token']);
 
try {
    $post_id = (new FacebookRequest(
        $session, 
        'POST', 
        '/'.$this->config['url'].'/feed', 
        $this->data )
    )->execute()->getGraphObject()->asArray();
} catch (FacebookRequestException $e) {
    echo 'ERROR! ' . __LINE__ . $e->getMessage();   
} catch (Exception $e) {
    echo 'ERROR! ' . __LINE__ . $e->getMessage();
}
        
        //
     
}
}
