<?php

$url = "https://domainkamu.com/";
$sitemap = "https://domainkamu.com/sitemap.xml";

$engines = [
    "https://www.google.com/ping?sitemap=".$sitemap,
    "https://www.bing.com/ping?sitemap=".$sitemap,
    "https://search.yahoo.com/info/submit.html",
    "https://duckduckgo.com/",
    "https://yandex.com/indexnow?url=".$url,
    "https://api.indexnow.org/indexnow",
    "https://www.baidu.com/s?wd=".$url,
    "https://www.ecosia.org/search?q=".$url,
    "https://www.ask.com/web?q=".$url
];

foreach($engines as $engine){
    @file_get_contents($engine);
}

echo "Submit ke search engine selesai!";
?>