#!/usr/bin/env python3

import json

from flask import Flask
from flask import request

from utils import Utils

app = Flask(__name__)
u = Utils()

@app.route("/hello_world")
def hello_world():
    return u.get_hello_world()


@app.route("/post_data", methods=["POST"])
def post_data():
    data = json.loads(request.data)
    return data["key"]


@app.route("/form_post", methods=["POST"])
def form_post():
    data = json.loads(request.data)
    greeting = "Greetings, {0}!".format(data["name"].capitalize())
    return greeting


if __name__ == "__main__":
    app.run(host="localhost", port=5000, debug=True)
