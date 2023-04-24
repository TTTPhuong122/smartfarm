<?php
session_start();

if(isset($_SESSION['id_user'])) {
    unset($_SESSION['id_user']);
    unset($_SESSION['user_name']);
    header('location:login.php');
}
else {
    echo 'Người dùng chưa đăng nhập. Không thể đăng xuất dược!'; die;
}
?>