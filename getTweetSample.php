<?php

// OAuthライブラリの読み込み
require "twitteroAuth/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
require_once("config.php");

//認証情報４つ
$consumerKey = API_KEY;
$consumerSecret = API_SECRET;
$accessToken = ACCESS_TOKEN;
$accessTokenSecret = ACCESS_SECRET;

//接続
$twObj = new TwitteroAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

$res= $twObj->get("search/tweets", array("q" => "hoge"));

     foreach ($res->statuses as $content){
       echo $content->text."\n";
       echo "************************************************";
       echo "\n";
     }
