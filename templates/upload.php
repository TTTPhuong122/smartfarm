<?php
session_start();
$url = $_POST["url"];
if(isset($_POST['url'])){
  // echo $_FILES["fileImg"]["name"];
  // $target_dir = "ImageNhanDien/";
  // $target_file = $target_dir . basename($_FILES["fileImg"]["name"]);
  //   if (move_uploaded_file($_FILES["fileImg"]["tmp_name"], $target_file)) {
  //     $name = basename($_FILES["fileImg"]["name"]);
  //     // Mở file để ghi (nội dung cũ bị xóa) hoặc tạo file mới nếu không tồn tại
      $myfile = fopen("names.txt", "w+");
      fwrite($myfile, $url);      
      fclose($myfile);
      $output = exec('python main.py');
      // echo $output;
      $_SESSION['rsNhanDien']=$output;
  //   } else {
  //     echo '<script>alert("Sorry, there was an error uploading your file.");</script>';
  //   }
}
else{
  echo '<script>alert("Image not found!");</script>';
}
// Lấy URL của trang trước đó
$previousPage = $_SERVER['HTTP_REFERER'];

// Chuyển hướng đến trang trước đó
header('Location: ' . $previousPage);
die;
?>

    
    
