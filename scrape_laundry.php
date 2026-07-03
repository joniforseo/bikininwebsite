<?php
$url = "https://siiplaundry.com/";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0');
$html = curl_exec($ch);
curl_close($ch);

// Fix relative URLs
$html = preg_replace('/href="(?!\/|http|#|mailto|tel|javascript)/i', 'href="https://siiplaundry.com/', $html);
$html = preg_replace('/src="(?!\/|http|data)/i', 'src="https://siiplaundry.com/', $html);
$html = str_replace('href="/', 'href="https://siiplaundry.com/', $html);
$html = str_replace('src="/', 'src="https://siiplaundry.com/', $html);
// Re-fix in case it became https://siiplaundry.com//
$html = str_replace('https://siiplaundry.com//', 'https://siiplaundry.com/', $html);

file_put_contents(__DIR__ . '/portfolio/laundry.html', $html);
echo "Scraped successfully!";
?>
