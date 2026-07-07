<?php
$url = "https://www.jagocoffee.com/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
$html = curl_exec($ch);
curl_close($ch);

// Fix relative URLs
$html = preg_replace('/href="(?!\/|http|#|mailto|tel|javascript)/i', 'href="https://www.jagocoffee.com/', $html);
$html = preg_replace('/src="(?!\/|http|data)/i', 'src="https://www.jagocoffee.com/', $html);
$html = str_replace('href="/', 'href="https://www.jagocoffee.com/', $html);
$html = str_replace('src="/', 'src="https://www.jagocoffee.com/', $html);
$html = str_replace('https://www.jagocoffee.com//', 'https://www.jagocoffee.com/', $html);

file_put_contents(__DIR__ . '/portfolio/coffeeshop.html', $html);
echo "Scraped successfully!";
?>
