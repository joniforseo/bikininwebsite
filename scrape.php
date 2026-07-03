<?php
$url = "https://www.chikuro.com/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
$html = curl_exec($ch);
curl_close($ch);

$html = str_replace('href="public/', 'href="https://www.chikuro.com/public/', $html);
$html = str_replace('src="public/', 'src="https://www.chikuro.com/public/', $html);
$html = str_replace('href="assets/', 'href="https://www.chikuro.com/assets/', $html);
$html = str_replace('src="assets/', 'src="https://www.chikuro.com/assets/', $html);
$html = str_replace("href='public/", "href='https://www.chikuro.com/public/", $html);
$html = str_replace("src='public/", "src='https://www.chikuro.com/public/", $html);

// Remove the base tag if any, or maybe just fix relative URLs
$html = str_replace('url("public/', 'url("https://www.chikuro.com/public/', $html);
$html = str_replace("url('public/", "url('https://www.chikuro.com/public/", $html);

file_put_contents(__DIR__ . '/portfolio/fb.html', $html);
echo "Scraped successfully!";
?>
