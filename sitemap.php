<?php
header("Content-Type: application/xml; charset=utf-8");

$base = "https://domainkamu.com";

// daftar URL (bisa kamu tambah)
$urls = [
    "",
    "/#streaming-pascol",
    "/#video-pascol",
    "/#kimcil-only",
    "/#asupan-pascol"
];

echo '<?xml version="1.0" encoding="UTF-8"?>';
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<?php foreach($urls as $url): ?>
<url>
    <loc><?php echo $base . $url; ?></loc>
    <lastmod><?php echo date("Y-m-d"); ?></lastmod>
    <changefreq>daily</changefreq>
    <priority>0.9</priority>
</url>
<?php endforeach; ?>

</urlset>