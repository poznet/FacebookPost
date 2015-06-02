#FacebookPost
### Simply Posting on facebook via php 

Class is wrapper for  facebook sdk 4 , and main goal is to make  posting on FB as simple as possible;


###### Configuration
1. Register your APP  on   https://developers.facebook.com/ and  copy  AppId and Secret
2. On [FB Api Explorer](https://developers.facebook.com/tools/explorer/) 
 - on Apllication select registered in 1st step
 - on Get Token -> Get Access Token select "manage_pages" and "publish_pages" on extended prmission.
 - change Get Token to FB where you want to publish
 - copy Access Token
 
###### Installation 
Via Composer  (content  for  composer.json)

```
"repositories": [
       	{
            "type": "vcs",
            "url": "https://github.com/poznet/FacebookPost"
        }
    ],
    "require": {        
	"poznet/FacebookPost":"dev-master"
    }
```

###### Usage

Ass simple as it can be

```
<?php
$id='yourappid';
$pass='your secret';
$token='your token';
$url='name of  facebook page (copy from url) ';


$fb=new FacebookPost($id,$pass,$token,$url);
$fb->setDescription('Pozycjonowanie stron');
$fb->setLink('www.pozycjoner.net');
$fb->setMessage('firma od pozycjonowania');
$fb->setName('Pozycjonowanie');
$fp->setPicture('urlto pisture');
$fb->post();
```

