import requests
from random import random, randint
from datetime import datetime

# Generating data to submit
sensor = randint(0,10)
date = datetime.now()
predict = random()

request_url = 'http://localhost'

# Request POST method
face_response = requests.post(
    request_url,
    data = {
        "sensor": sensor,
        "date": ('"{}"'.format(date)),
        "predict": predict
    }
)

# Getting text response from server
print(face_response.text)

# Request GET method
# print(f'https://localhost/?sensor={sensor}&date={date}&predict={predict}')
# req = requests.get(f'http://localhost/?sensor={sensor}&date="{date}"&predict={predict}')
# print(req.text)