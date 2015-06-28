<?php

// OAuthライブラリの読み込み
require "twitteroAuth/vendor/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;
require_once("config.php");

class getLocation{

  private $twObj;
  private $locationArray;

  function __construct(){
    $consumerKey = API_KEY;
    $consumerSecret = API_SECRET;
    $accessToken = ACCESS_TOKEN;
    $accessTokenSecret = ACCESS_SECRET;


    $this->twObj = new TwitteroAuth($consumerKey, $consumerSecret, $accessToken, $accessTokenSecret);

    $this->locationArray = array();
  }

  function getLocationArrayWith($name){
    $jsonRes=$this->twObj->get("search/tweets", array("q" => $name));

    foreach ($jsonRes->statuses as $content){
      array_push($this->locationArray,$content->text);
      }

  }

  function debugLog()
  {

    $fp = fopen('debugLog.txt', 'w');

    if ($fp){
    if (flock($fp, LOCK_EX)){
      foreach ($this->locationArray as $line) {
        fwrite($fp,$line."\n");
      }

    flock($fp, LOCK_UN);
    }else{
        print('ファイルロックに失敗しました');
    }
  }
    fclose($fp);
  }
}
?>
