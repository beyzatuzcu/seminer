import requests
from bs4 import BeautifulSoup

url = 'https://csb.gov.tr/'
response = requests.get(url)
soup = BeautifulSoup(response.content, 'html.parser')

haber_div = soup.find('div', {'class': 'haberler'})
haberler = haber_div.find_all('a')

for haber in haberler:
    print(home.php)
