from keras.models import load_model  # TensorFlow is required for Keras to work
from PIL import Image, ImageOps  # Install pillow instead of PIL
import numpy as np

import os
path = 'C:/xampp/htdocs/smartFarm/ImageNhanDien'
from flask import Flask, request, render_template

app = Flask(__name__)

@app.route('/')
def home():
    return render_template('NhanDienSauBenh.php')

@app.route('/process_data', methods=['POST'])
def NhanDien(url):
    url = path . request.form['name']
    # Disable scientific notation for clarity
    np.set_printoptions(suppress=True)

    # Load the model
    model = load_model(os.path.join(path, "keras_model.h5"), compile=False)

    # Load the labels
    class_names = open(os.path.join(path, "labels.txt"), "r").readlines()

    # Create the array of the right shape to feed into the keras model
    # The 'length' or number of images you can put into the array is
    # determined by the first position in the shape tuple, in this case 1
    data = np.ndarray(shape=(1, 224, 224, 3), dtype=np.float32)

    # Replace this with the path to your image
    image = Image.open(url).convert("RGB")

    # resizing the image to be at least 224x224 and then cropping from the center
    size = (224, 224)
    image = ImageOps.fit(image, size, Image.Resampling.LANCZOS)

    # turn the image into a numpy array
    image_array = np.asarray(image)

    # Normalize the image
    normalized_image_array = (image_array.astype(np.float32) / 127.5) - 1

    # Load the image into the array
    data[0] = normalized_image_array

    # Predicts the model
    prediction = model.predict(data)
    index = np.argmax(prediction)
    class_name = class_names[index]
    confidence_score = prediction[0][index]
    rs = class_name[2:]
    return rs[:len(rs)-1]



if __name__ == '__main__':
    app.run(debug=True)
