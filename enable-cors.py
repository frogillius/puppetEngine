from flask import Flask, send_from_directory

app = Flask(__name__)

@app.route('/static/test.html')
def serve_test_html():
    return send_from_directory('static', 'test.html')

if __name__ == '__main__':
    app.run(debug=False, port=6969)
