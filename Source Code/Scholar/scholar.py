import requests
from bs4 import BeautifulSoup
import pandas

query = "Dr.%20Usharani%20Hareesh%20Govindarajan"
url = 'https://scholar.google.com/scholar?q=' + query + '&ie=UTF-8&oe=UTF-8&hl=en&btnG=Search'

content = requests.get(url).text
page = BeautifulSoup(content, 'lxml')
results = []
for entry in page.find_all("h3", attrs={"class": "gs_rt"}):
    results.append({"TITLE": entry.a.text, "LINK": entry.a['href']})

tables = pandas.DataFrame(results)
tables