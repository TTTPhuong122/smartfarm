<?php
session_start();

if(isset($_SESSION['userid'])) {
    unset($_SESSION['userid']);
    unset($data1['user_name']);
    header('location:login.php');
}
else {
    echo 'Người dùng chưa đăng nhập. Không thể đăng xuất dược!'; die;
}
?>