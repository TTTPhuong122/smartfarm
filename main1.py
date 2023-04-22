from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('index.php')

@app.route('/process_data', methods=['POST'])
def process_data():
    name = request.form['name']
    return f'Hello {name}!'

if __name__ == '__main__':
    app.run(debug=True)
