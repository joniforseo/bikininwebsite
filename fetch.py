import urllib.request

url = 'https://www.chikuro.com/'
req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
try:
    with urllib.request.urlopen(req) as response:
        html = response.read().decode('utf-8')
        
    html = html.replace('href="public/', 'href="https://www.chikuro.com/public/')
    html = html.replace('src="public/', 'src="https://www.chikuro.com/public/')
    html = html.replace('href="assets/', 'href="https://www.chikuro.com/assets/')
    html = html.replace('src="assets/', 'src="https://www.chikuro.com/assets/')
    html = html.replace('href=\'public/', 'href=\'https://www.chikuro.com/public/')
    html = html.replace('src=\'public/', 'src=\'https://www.chikuro.com/public/')
    html = html.replace('url("public/', 'url("https://www.chikuro.com/public/')
    html = html.replace('url(\'public/', 'url(\'https://www.chikuro.com/public/')
    
    with open('portfolio/fb.html', 'w', encoding='utf-8') as f:
        f.write(html)
    print("Done")
except Exception as e:
    print(f"Error: {e}")
