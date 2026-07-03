$html = (Invoke-WebRequest -Uri "https://www.chikuro.com/").Content
$html = $html -replace 'href="public/', 'href="https://www.chikuro.com/public/'
$html = $html -replace 'src="public/', 'src="https://www.chikuro.com/public/'
$html = $html -replace 'href="assets/', 'href="https://www.chikuro.com/assets/'
$html = $html -replace 'src="assets/', 'src="https://www.chikuro.com/assets/'
$html = $html -replace "href='public/", "href='https://www.chikuro.com/public/"
$html = $html -replace "src='public/", "src='https://www.chikuro.com/public/"
Set-Content -Path "c:\xampp\htdocs\bikininwebsite.com\portfolio\fb.html" -Value $html
