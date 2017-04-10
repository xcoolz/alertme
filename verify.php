<?php

$proxy = 'http://fixie:QoWxhK5CDYdiYPl@velodrome.usefixie.com:80';
$proxyauth = 'fixie:QoWxhK5CDYdiYPl';

$access_token = '1a3bQ341aEF6/M21JlXlE0aIpzvjnTyL0/aylNWA6lA+jUeRmw5asVZPeKnsC2VEdzQDmqeqPAS6Q9DVwBClS1S4Vc2hW8XhEhDdyXE+nfl3WsHC1cox4oSJl4vsx2Dwa3ysBnDySEyaKNR2x8b1KQdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $proxyauth);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

?>
