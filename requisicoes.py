import requests
from random import random, randint
from datetime import datetime

sensor = randint(0,10)
predict = random()
data = datetime.now()

req = requests.get(f'https://example.com/?sensor={sensor}&data{data}&predict{randomNumber}')
print( req.status_code )

print(f'https://example.com/?sensor={sensor}&data={data}&predict={predict}')