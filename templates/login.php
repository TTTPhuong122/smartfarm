<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Đăng nhập vào Smart Farm</title>
    <meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=0.7 , user-scalable=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css"
        integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"
        integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/login.css">
</head>
<!-- Coded With Love By Mutiullah Samim-->

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center">
            <div class="card mt-5 col-md-8 animated bounceInDown myForm">
                <div class="card-header">
                    <h4>Đăng nhập</h4>
                </div>

                    <div class="card-body">

                        <div id="dynamic_container">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15">
                                        <i class="fa fa-address-card" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="text" placeholder="Email" class="form-control" id="email"
                                    name="email" />
                            </div>
                            <div class="input-group mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                    </span>
                                </div>
                                <input type="password" placeholder="Password" class="form-control" id="password"
                                    name="password" />
                            </div>
                        </div>

                    </div>
                    <div class="">
                        <a class="btn btn-secondary btn-sm" id="add_more" onclick="$('.register').show(400);">
                            <i class="fas fa-plus-circle"></i> Đăng kí </a>

                        <button type="button" class="btn btn-success btn-sm float-right submit_btn" id="btnLogIn">
                            <i class="fas fa-arrow-alt-circle-right"></i> Đăng nhập </button>
                    </div>


                <br>

                <div class="card-header register" style="display:none;">
                    <h4>Đăng kí</h4>
                </div>
                <form action="phpregister.php" method="post" class="register">
                    <div class="card-body register" style="display:none;">

                        <div class="row">
                            <div class="input-group px-3 mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15">Họ và tên</span>
                                </div>
                                <input type="text" class="form-control" id="name" name="name" required />
                            </div>
                            <div class="input-group  col-sm-6 mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15">Email </i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="rEmail" name="rEmail" required />
                            </div>
                            <div class="input-group  col-sm-6 mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15">Mật khẩu </i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="rPassword" name="rPassword" required />
                            </div>
                            <div class="input-group col-sm-6 mt-3">
                                <select name="Sex" id="Sex" required>
                                    <option value="">--Giới tính--</option>
                                    <option value="M">Nam</option>
                                    <option value="F">Nữ</option>
                                </select>
                            </div>
                            <div class="input-group  col-sm-6 mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15">SĐT </i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" id="phone" name="phone" required />
                            </div>
                            <div class="input-group px-3 mt-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text br-15">Địa chỉ</span>
                                </div>
                                <input type="text" class="form-control" id="address" name="address" required />
                            </div>
            ~                
                            
                        </div>

                    </div>
                    <div class="register" style="display:none;">
                        <a class="btn btn-danger btn-sm" id="close" onclick="$('.register').hide(400);">
                            <i class="fa fa-window-close"></i> Đóng </a>
                        <button class="btn btn-success btn-sm float-right submit_btn">
                            <i class="fas fa-arrow-alt-circle-right"></i> Xác nhận </button>
                    </div>
                </form>



            </div>
        </div>
    </div>
    <script type="module">
        // Import the functions you need from the SDKs you need
        import { initializeApp } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-app.js";
        import { getAuth, signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-auth.js";
        // TODO: Add SDKs for Firebase products that you want to use
        // https://firebase.google.com/docs/web/setup#available-libraries

        // Your web app's Firebase configuration
        // For Firebase JS SDK v7.20.0 and later, measurementId is optional
        const firebaseConfig = {
            apiKey: "AIzaSyBhgjYth2xS9y09F5I7N6j1y4G2h1cLbGA",
            authDomain: "smart-farm-feeb2.firebaseapp.com",
            databaseURL: "https://smart-farm-feeb2-default-rtdb.firebaseio.com",
            projectId: "smart-farm-feeb2",
            storageBucket: "smart-farm-feeb2.appspot.com",
            messagingSenderId: "419032023754",
            appId: "1:419032023754:web:40855cd3b3406c3faf2a33",
            measurementId: "G-27EG728Y3P"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
        const auth = getAuth();
        
        document.getElementById("btnLogIn").addEventListener('click', function(){
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;

            signInWithEmailAndPassword(auth, email, password)
            .then((userCredential) => {
                // Signed in 
                const user = userCredential.user;
                window.location.assign('phplogin.php?userid=' + user["uid"]);
               
            })
            .catch((error) => {
                const errorCode = error.code;
                const errorMessage = error.message;
                alert(errorMessage);

            });
        });
        
    </script>

</body>

</html>