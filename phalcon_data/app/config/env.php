<?php

/* 测试 */
$img_url = 'http://localhost:8085/';

/* 正式 */
// $img_url = 'https://api.webmis.vip/';

return [
  'title'=>'WebMIS',
  'version'=>'0.0.1',
  /* 加密 */
  'key'=>'a06f77041c729548d34f06d26dda5120',
  'token_name'=>'DataToken_',
  'token_time'=>7*24*3600,
  /* 本地资源 */
  'img_url'=>$img_url,
  /* 数据库 */
  'database' => [
    'adapter'=>'Mysql',
    'host'=>'39.108.152.251',
    'username'=>'webmis',
    'password'=>'webmis',
    'dbname'=>'data',
    'charset'=>'utf8',
  ],
  /* 缓存 */
  'redis'=>[
    'host'=>'127.0.0.1',
    'port'=>6379,
    'pwd'=>'',
    'db'=>0,
  ],
  /* APP配置 */
  'application' => [
    'appDir'=>APP_PATH.'/',
    'cacheDir'=> BASE_PATH.'/cache/',
    'baseUri'=>'',
  ],
  /* 百度AI */
  'baidu_appKey'=>'fFu2i5oNALIrRQ1KAhAvV5v5',
  'baidu_appSecret'=>'AQsHFNfgugbGErIdu7Dwxap6Pvreiu0z',
  /* 钉钉 */
  'ding_appKey'=>'',
  'ding_appSecret'=>'',
  /* 微信小程序 */
  'wechat_token'=>'',
  'wechat_EncodingAESKey'=>'',
  'wechat_AppID'=>'',
  'wechat_AppSecret'=>'',
  'wechat_MchID'=>'',
  'wechat_Key'=>'',
  /* 支付宝 */
  'alipay_appId'=>'',
  'alipay_signType'=>'RSA2',
  'alipay_charset'=>'UTF-8',
  'alipay_version'=>'1.0',
  'alipay_rsaPrivateKey'=>'',
  'alipay_rsaPublicKey'=>'',
];