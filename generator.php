<?php

$keywords = [
"kimcil only",
"pejuang pascol",
"video pascol",
"streaming pascol",
"asupan pascol"
];

shuffle($keywords);

$title = ucfirst($keywords[0])." Viral Terbaru";

$content = "Konten ".$keywords[0]." sedang viral saat ini. Banyak pengguna mencari ".$keywords[1]." karena menarik dan trending. ";

echo "<h1>$title</h1>";
echo "<p>$content</p>";
echo '<a href="https://kimcilonly.github.io/pejuangpascol">Kunjungi situs</a>';

?>
