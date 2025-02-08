from flask import Flask
from flask_cors import CORS

app = Flask(__name__)

@app.after_request
def disable_cors(response):
    response.headers["Access-Control-Allow-Origin"] = "*"
    response.headers["Access-Control-Allow-Methods"] = "GET, POST, PUT, DELETE, OPTIONS"
    response.headers["Access-Control-Allow-Headers"] = "Content-Type, Authorization"
    return response

@app.route("/")
def home():
    return "CORS is enabled!"

if __name__ == "__main__":
    app.run(host="0.0.0.0", port=6969)
