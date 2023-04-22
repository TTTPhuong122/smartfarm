from keras.models import load_model  # TensorFlow is required for Keras to work
from PIL import Image, ImageOps  # Install pillow instead of PIL
import numpy as np

import os
path = 'C:/xampp/htdocs/smartFarm'

def NhanDien(url):

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
    return rs[:len(rs)-1], confidence_score



def DoChinhXac():
    folder_path = "C:/xampp/htdocs/smartFarm/data/Test"

    # Lấy danh sách các tệp tin trong thư mục
    file_list = os.listdir(folder_path)
    sum = 0
    # Duyệt qua từng tệp tin và đọc nội dung
    for file_name in file_list:
        # Tạo đường dẫn đầy đủ đến tệp tin
        file_path = os.path.join(folder_path, file_name)
        
        # Kiểm tra xem đây có phải là một tệp tin không
        if os.path.isfile(file_path):
            rs, DoChinhXacFile = (NhanDien(file_path))
            #just get file name
            file_name_without_ext, file_ext = os.path.splitext(file_name)
            if (rs in file_name_without_ext):
                sum = sum + 1
    return (sum/len(file_list)*100)
print(DoChinhXac())



