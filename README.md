# twitterProject

## twitterOAuthの導入手順

1. twitterOAuthを配置
OAuth認証ライブラリを
https://github.com/abraham/twitteroauth
からzipで落として配置する
```
$ cp ~/Downloads/twitteroauth-master.zip
$ unzip twitteroauth-master.zip
$ mv twitteroauth-master twitterOAuth
$ rm twitteroauth-master.zip
```

2. Composerのインストール
```
$ curl -sS https://getcomposer.org/installer | php
```
3. composer.phar移動
```
$ sudo mv composer.phar /usr/local/bin/composer
```
4. 1で作成したtwitterOAuthでcomposer.jsonを作成する
```
{
    "require": {
        "php": ">=5.4.0",
        "abraham/twitteroauth": "0.5.0"
    }
{
```
5. composer インストール
```
$composer install
```
