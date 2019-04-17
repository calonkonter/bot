<?php

    $url = 'https://linkduit.net/T2end';

    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_COOKIEJAR, 'cookies_linkduit.txt');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies_linkduit.txt');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36');
    $result = curl_exec($ch);
    curl_close($ch);

    if(preg_match("/<a style=\"display:none;\" class=\"btn btn-success\" target=\"_blank\" rel=\"nofollow\" href=\"(.*?)\">/", $result, $links));

    $getLink = 'https://linkduit.net'.$links[1];

    $ch = curl_init($getLink);
    curl_setopt($ch, CURLOPT_URL, $getLink);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
    curl_setopt($ch, CURLOPT_COOKIEFILE, 'cookies_linkduit.txt');
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/73.0.3683.103 Safari/537.36');
    $execute = curl_exec($ch);
    print $execute;
    curl_close($ch);


?>
