<?php
$access_token = 'p2tNOuR1m5zaEpjpvWf61x5TBrKEsjhqrXmBwmVpG8XqA2ui4/Ww2HTQaQEJO4rQDwzZnQ2dCycskHDFRuzs3AfEDvnB7m3a3VMuLIkrYcq3WCcixq7ElnrdrAHcJ4c3N+n5eUzSCoNUWZjrNeyj9QdB04t89/1O/w1cDnyilFU=';

$url = 'https://api.line.me/v1/oauth/verify';

$headers = array('Authorization: Bearer ' . $access_token);

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$result = curl_exec($ch);
curl_close($ch);

echo $result;
