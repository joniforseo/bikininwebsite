<?php
$url = "https://trading.paskomnas.id/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
$html = curl_exec($ch);
curl_close($ch);

// Fix relative URLs
$html = preg_replace('/href="(?!\/|http|#|mailto|tel|javascript)/i', 'href="https://trading.paskomnas.id/', $html);
$html = preg_replace('/src="(?!\/|http|data)/i', 'src="https://trading.paskomnas.id/', $html);
$html = str_replace('href="/', 'href="https://trading.paskomnas.id/', $html);
$html = str_replace('src="/', 'src="https://trading.paskomnas.id/', $html);
$html = str_replace('https://trading.paskomnas.id//', 'https://trading.paskomnas.id/', $html);

file_put_contents(__DIR__ . '/portfolio/agribisnis.html', $html);
echo "Scraped successfully!";
?>
