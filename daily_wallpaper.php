<?php
function redirectedUrl($url)
{
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, TRUE);
$html = curl_exec($curl);
$redirectedUrl = curl_getinfo($curl, CURLINFO_EFFECTIVE_URL);
curl_close($curl);
return $redirectedUrl;
}
$url="https://source.unsplash.com/random/1920x1080";
$img=date("Y-m-d").".png";
$image=redirectedUrl($url);
file_put_contents($img, file_get_contents($image));
?>