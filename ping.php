<?php
$sitemap = "https://kimcilonly.github.io/pejuangpascol/sitemap.xml";

$urls = [
    "https://www.google.com/ping?sitemap=".$sitemap,
    "https://www.bing.com/ping?sitemap=".$sitemap
];

foreach($urls as $url){
    file_get_contents($url);
}

echo "Ping sukses ke Google & Bing!";
?>
