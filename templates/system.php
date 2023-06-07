<?php
include("config/config.php");
include("config/firebaseRDB.php");
$db = new firebaseRDB($databaseURL);
session_start();
if(isset($_GET['id_system'])){
  $data = $db->retrieve("system", "id_system", null, $_GET['id_system']);
  $data = json_decode($data, 1);
  // $user = $db->retrieve("system", "id_system", null, $_SESSION['userid']);
  // $user = json_decode($data, 1);
}
else{
}
$id = $_SESSION['userid'];
$data1 = $db->retrieve("user/$id");
$data1 = json_decode($data1,1);
?>
<html lang="vi" class="translated-ltr">

<head>
  <title>trang trại thông minh</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/personal_farm.css">
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/52/4/common.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/52/4/util.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/52/4/map.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/52/4/marker.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/52/4/common.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/52/4/util.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/52/4/map.js"></script>
  <script type="text/javascript" charset="UTF-8"
    src="https://maps.googleapis.com/maps-api-v3/api/js/52/4/marker.js"></script>
  <link type="text/css" rel="stylesheet" charset="UTF-8"
    href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.cYEbrOmw59Q.L.W.O/d=0/rs=AN8SPfpU282joXDlbkUblMtWLWoZn4bb2g/m=el_main_css">
</head>

<body class="">
  <nav class=" nav navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">

        <a class="navbar-brand" href="#">
          <font style="vertical-align: inherit;">
            <font style="vertical-align: inherit;">Vườn cây thông minh(
              <?php
                echo $data1['name_system'] ?? '';
              ?>
            )</font>
          </font>
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-user"></span>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">
              <?php
                echo $data1['user_name'] ?? '';
              ?>
            </font>
            </font>
          </a>
        </li>
        <li>
          <a href="./phplogout.php">
            <span class="glyphicon glyphicon-log-out"></span>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Đăng xuất</font>
            </font>
          </a>
        </li>
      </ul>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row content">
    <div class=" content  col-sm-2 sidenav">
        <img src="./img/iconuser.png" style="width:100%;padding-top: 10%;">
        <hr>
        <!-- <h4>ชื่อ : สวนยาง ฟาร์ม</h4> -->

        <hr>
        <ul class="nav nav-pills nav-stacked">
        <li class="active">
            <a href="NhanDienSauBenh.php?id_system=<?php echo $_GET['id_system']?>">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Nhận diện sâu bệnh</font>
              </font>
            </a>
          </li>



          <li class="active">
            <a href="" data-toggle="modal" data-target="#myModalProfile">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Thông tin vườn</font>
              </font>
            </a>
          </li>

          <li class="active">
            <a href="./status.php?id_system=<?php echo $_GET['id_system'] ?>" >
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Trạng thái</font>
              </font>
            </a>
          </li>

          <li class="active">
            <a href="./control.php?id_system=<?php echo $_GET['id_system'] ?>">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Điều khiển</font>
              </font>
            </a>
          </li>

          <li class="active">
            <a href="./system.php?id_system=<?php echo $_GET['id_system'] ?>">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Cài đặt hệ thống</font>
              </font>
            </a>
          </li>
          <!-- //////////////////////////////////////////////  Modal run location (in lop) ////////////////////////////////////////////////////-->

          <!-- Modal -->
          <div id="myModalLocation1" class="modal fade">
            <div class="modal-dialog modal-lg">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">×</font>
                    </font>
                  </button>
                  <h4 class="modal-title">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Vườn cây thông minh</font>
                    </font>
                  </h4>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">Tắt</font>
                    </font>
                  </button>
                </div>
              </div>

            </div>
          </div>
          
        </ul>
      </div>
        <!-- ################################################################################## -->
        <div class="col-sm-10">
        <div class="container-fluid TapAuto" style="">
          <div class="col-sm-12">
            <p>
            </p>
            <h4 class="col-sm-12 alert alert-danger">Cài đặt hệ thống</h4>
            <h6 style="color:red;"> * Nếu chế độ thiết lập thời gian đang bật thì chế độ tự động hóa sẽ không hoạt động và ngược lại </h6>
            <h6>
            </h6>

          </div>


          <div class="well col-sm-6" style="background-color: #ffffff;">
            <div class="col-sm-12">

              <div class="col-sm-12">
                <div class="col-sm-12 alert alert-danger">
                  <h4 class="col-sm-9 " style=" padding-top: 10px;">Thiết lập thời gian làm việc</h4>
                </div>
              </div>


              <div class="col-sm-12 ">
                <div class="col-sm-12 alert alert-info">
                  <h4 class="col-sm-10">Quạt</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onSet1" name="onSet1" class="onSet1">


                    <span class="slider round"></span>
                  </label>
                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="time" class="form-control" name="TS1" id="TS1" value="" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="time" class="form-control" name="TE1" id="TE1" value="" disabled="">
                  </div>
                  <!-- <div class="form-group col-sm-12">
                    <button type="button" class="btn btn-danger" onclick="AddTimeSetTable('75','2','')">Xóa bỏ</button>
                    <button type="button" class="btn btn-warning"
                      onclick=" $('#TS1').attr( 'disabled', false );$('#TE1').attr( 'disabled', false );">Thay đổi
                    </button>
                    <button type="button" class="btn btn-success"
                      onclick="submitEdittime('75',$('#TS1').val(),$('#TE1').val())">Xác nhận</button>
                  </div> -->

                  <!-- <div class="form-group col-sm-1">
                  Thứ 2<input type="checkbox" id="monday1" name="Day1" class="Day1" 
                      >
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 3<input type="checkbox" id="tuesday1" name="Day1" class="Day1"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 4<input type="checkbox" id="tuesday1" name="Day1" class="Day1"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 5<input type="checkbox" id="thursday1" name="Day1" class="Day1"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 6<input type="checkbox" id="friday1" name="Day1" class="Day1"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 7<input type="checkbox" id="saturday1" name="Day1" class="Day1"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                  Chủ nhật<input type="checkbox" id="sunday1" name="Day1" class="Day1"
                      >
                  </div> -->

                </div>
              </div>

              <div class="col-sm-12 ">
                <div class="col-sm-12 alert alert-warning">
                  <h4 class="col-sm-10">Máy bơm nước</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onSet2" name="onSet2" class="onSet2">

                    <span class="slider round"></span>
                  </label>
                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="time" class="form-control" name="TS2" id="TS2" value="" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="time" class="form-control" name="TE2" id="TE2" value="" disabled="">
                  </div>
                  <!-- <div class="form-group col-sm-12">
                    <button type="button" class="btn btn-danger" onclick="AddTimeSetTable('82','2','')">Xóa bỏ</button>
                    <button type="button" class="btn btn-warning"
                      onclick=" $('#TS2').attr( 'disabled', false );$('#TE2').attr( 'disabled', false );">Thay đổi
                    </button>
                    <button type="button" class="btn btn-success"
                      onclick="submitEdittime('82',$('#TS2').val(),$('#TE2').val())">Xác nhận</button>
                  </div> -->

                  <!-- <div class="form-group col-sm-1">
                    Thứ 2<input type="checkbox" id="monday2" name="Day2" class="Day2">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 3<input type="checkbox" id="tuesday2" name="Day2" class="Day2"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 4<input type="checkbox" id="wednesday2" name="Day2" class="Day2"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 5<input type="checkbox" id="thursday2" name="Day2" class="Day2"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 6<input type="checkbox" id="friday" name="Day2" class="Day2"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 7<input type="checkbox" id="saturday2" name="Day2" class="Day2"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Chủ nhật<input type="checkbox" id="sunday2" name="Day2" class="Day2"
                      >
                  </div> -->

                </div>
              </div>

              <div class="col-sm-12 ">
                <div class="col-sm-12 alert alert-success">
                  <h4 class="col-sm-10">Đèn</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onSet3" name="onSet3" class="onSet3">


                    <span class="slider round"></span>
                  </label>
                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="time" class="form-control" name="TS3" id="TS3" value="" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="time" class="form-control" name="TE3" id="TE3" value="" disabled="">
                  </div>
                  <!-- <div class="form-group col-sm-12">
                    <button type="button" class="btn btn-danger" onclick="AddTimeSetTable('2','2','')">Xóa bỏ</button>
                    <button type="button" class="btn btn-warning"
                      onclick=" $('#TS3').attr( 'disabled', false );$('#TE3').attr( 'disabled', false );">Thay đổi
                    </button>
                    <button type="button" class="btn btn-success"
                      onclick="submitEdittime('2',$('#TS3').val(),$('#TE3').val())">Xác nhận</button>
                  </div> -->

                  <!-- <div class="form-group col-sm-1">
                    Thứ 2<input type="checkbox" id="monday3" name="Day3" class="Day3" onchange="DaySet('2','4','1','Monday')"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 3<input type="checkbox" id="tuesday3" name="Day3" class="Day3" onchange="DaySet('2','4','1','Tuesday')"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 4<input type="checkbox" id="wednesday3" name="Day3" class="Day3"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 5<input type="checkbox" id="thursday3" name="Day3" class="Day3"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 6<input type="checkbox" id="friday3" name="Day3" class="Day3" onchange="DaySet('2','4','1','Friday')"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 7<input type="checkbox" id="saturday3" name="Day3" class="Day3"
                      >
                  </div>
                  <div class="form-group col-sm-1">
                    Chủ nhật<input type="checkbox" id="sunday3" name="Day3" class="Day3" onchange="DaySet('2','4','1','Sunday')"
                      >
                  </div> -->

                </div>
              </div>
            </div>
          </div>


          <!-- #################################################################### thiết lập tự động hóa ##################################################################################################### -->



          <div class="well col-sm-6" style="background-color: #ffffff;">

            <div class="col-sm-12">

              <div class="col-sm-12">
                <div class="col-sm-12 alert alert-danger">
                  <h4 class="col-sm-6 " style=" padding-top: 10px;">Thiết lập tự động hóa</h4>
                </div>
              </div>

              <div class="col-sm-12">
                <h4 class="col-sm-10">Bộ 1</h4>
                <div class=" col-sm-12 alert alert-info">
                  <h4 class="col-sm-10">Điều kiện nhiệt độ không khí (Quạt)</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onoff1" name="onoff1" class="onoff1">

                    <span class="slider round"></span>
                  </label>

                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="number" class="form-control SAuto1" name="SAuto1" id="SAuto1" value="" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="number" class="form-control EAuto1" name="EAuto1" id="EAuto1" value="" disabled="">
                  </div>

                  <input type="hidden" name="arrid1" id="arrid1" class="arrid1" value="\'118\',\'119\',\'120\'">

                </div>

                <h4 class="col-sm-10">Bộ 2</h4>


                <div class="col-sm-12 alert alert-warning">
                  <h4 class="col-sm-10">Điều kiện độ ẩm đất (Máy bơm nước)</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onoff2" name="onoff2" class="onoff2"
                      >

                    <span class="slider round"></span>
                  </label>

                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="number" class="form-control SAuto2" name="SAuto2" id="SAuto2" value="" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="number" class="form-control EAuto2" name="EAuto2" id="EAuto2" value="" disabled="">
                  </div>

                  <input type="hidden" name="arrid2" id="arrid2" class="arrid2" value="\'145\',\'146\',\'147\'">
                </div>

                <h4 class="col-sm-10">Bộ 3</h4>


                <div class="col-sm-12 alert alert-success">
                  <h4 class="col-sm-10">Điều kiện cường độ ánh sáng (Đèn)</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onoff3" name="onoff3" class="onoff3"
                      >

                    <span class="slider round"></span>
                  </label>

                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="number" class="form-control SAuto3" name="SAuto3" id="SAuto3" value="" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="number" class="form-control EAuto3" name="EAuto3" id="EAuto3" value="" disabled="">
                  </div>


                  <input type="hidden" name="arrid3" id="arrid3" class="arrid3" value="\'145\',\'146\',\'147\'">
                </div>

              </div>
           </div>
          </div>

        </div>
        
      </div>
      </div>
    </div>
    </div>
  </div>
  <div id="myModalProfile" class="modal fade" style="display: none;">
    <div class="modal-dialog modal-lg">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">×</font>
            </font>
          </button>
          <h4 class="modal-title">
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Thông tin vườn</font>
            </font>
          </h4>
        </div>
        <div class="modal-body">

          <p>


          </p>
          <div class="container col-sm-12  ">

            <div class="list-group">
              <a href="#" class="list-group-item active">
                <font style="vertical-align: inherit;">
                  <font style="vertical-align: inherit;">Vườn trồng cây thông minh</font>
                </font>
              </a>
              <a href="#" class="list-group-item"><b>
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Chủ vườn : </font>
                  </font><b>
                    <font style="vertical-align: inherit;">
                      <font style="vertical-align: inherit;">
                      <?php
                        echo $data1['user_name'] ?? '';
                          ?>
                    </font>
                    </font>
                  </b>
                </b></a><b><b>
                  <a href="#" class="list-group-item"><b>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Địa chỉ : </font>
                      </font><b>
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">
                          <?php
                            echo $data1['address'] ?? '';
                            
                            ?>
                        </font>
                        </font>
                      </b>
                    </b></a><b><b>
                      <a href="#" class="list-group-item"><b>
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Số điện thoại liên hệ : </font>
                          </font><b>
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">
                              <?php
                                  echo $data1['phone'] ?? '';
                                  
                                  ?>
                            </font>
                            </font>
                          </b>
                        </b></a><b><b>
                          <a href="#" class="list-group-item"><b>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Loại cây trồng : </font>
                              </font><b>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">
                                  <?php
                                    echo $data1['name_system'] ?? '';
                                    
                                    ?>
                                </font>
                                </font>
                              </b>
                            </b></a><b><b>
                              <!-- <a href="#" class="list-group-item"><b><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tin tức cần trình bày:</font></font><b></b></b></a><b><b> -->


                            </b></b></b></b></b></b></b></b>
            </div><b><b><b>
                </b></b></b>
          </div><b><b><b>

                <p></p>
                <hr>



              </b></b></b>
        </div><b><b><b>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Tắt</font>
                  </font>
                </button>
              </div>
            </b></b></b>
      </div><b><b><b>

          </b></b></b>
    </div><b><b><b>
        </b></b></b>
  </div>
  <div id="goog-gt-" class="skiptranslate VIpgJd-yAWNEb-L7lbkb" dir="ltr">
    <div style="padding: 8px;">
      <div>
        <div class="VIpgJd-yAWNEb-l4eHX"><img
            src="https://www.gstatic.com/images/branding/product/1x/translate_24dp.png" width="20" height="20"
            alt="Google Translate"></div>
      </div>
    </div>
    <div style="padding: 8px; float: left; width: 100%;">
      <h1 class="VIpgJd-yAWNEb-r4nke VIpgJd-yAWNEb-mrxPge">Original text</h1>
    </div>
    <div style="padding: 8px;">
      <div class="VIpgJd-yAWNEb-nVMfcd-fmcmS"></div>
    </div>
    <div class="VIpgJd-yAWNEb-cGMI2b" style="padding: 8px;">
      <div class="VIpgJd-yAWNEb-Z0Arqf-PLDbbf"><span class="VIpgJd-yAWNEb-Z0Arqf-hSRGPd">Contribute a better
          translation</span></div>
      <div class="VIpgJd-yAWNEb-fw42Ze-Z0Arqf-haAclf">
        <hr style="color: #ccc; background-color: #ccc; height: 1px; border: none;">
        <div class="VIpgJd-yAWNEb-Z0Arqf-H9tDt"></div>
      </div>
    </div>
    <div class="VIpgJd-yAWNEb-jOfkMb-Ne3sFf" style="display: none;"></div>
  </div>
  <script type="module">
    // Import the functions you need from the SDKs you need
    import { initializeApp } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-app.js";
    import { getAnalytics } from "https://www.gstatic.com/firebasejs/9.20.0/firebase-analytics.js";
    import { getDatabase, ref, set, child, update, remove, onValue} from "https://www.gstatic.com/firebasejs/9.20.0/firebase-database.js";
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
    const db = getDatabase();
    var checkbox1 = document.getElementById("onoff1");
    var checkbox2 = document.getElementById("onoff2");
    var checkbox3 = document.getElementById("onoff3");


    function insert1() {
      if (checkbox1.checked == true) {
        alert("Bạn muốn bật chế độ tự động");

        update(ref(db, "state/state1"), {
            state: true
          });

        const value1 = parseInt(document.getElementById("SAuto1").value, 10);
        const value2 = parseInt(document.getElementById("EAuto1").value, 10);
  
          update(ref(db, "state/state1"), {
            start: value1,
            end: value2, 
          });

        $('#SAuto1').attr('disabled', true);
        $('#EAuto1').attr('disabled', true);

      } else {
        alert("Bạn muốn tắt chế độ tự động");
        update(ref(db, "state/state1"), {
            state: false
          });

        $('#SAuto1').attr('disabled', false);
        $('#EAuto1').attr('disabled', false);
      }
    }


  const hummidityRef = ref(db, "system/hummidity");
  const stateRef = ref(db, "state/state1/state");
  const startRef = ref(db, "state/state1/start");
  const endRef = ref(db, "state/state1/end");

  onValue(stateRef, (snapshot) => {
    const state = snapshot.val();
    const checkbox = document.getElementById("onoff1");
    if (state == true){
      checkbox.checked = true;
    }
    else{
      checkbox.checked = false;
      $('#SAuto1').attr('disabled', false);
      $('#EAuto1').attr('disabled', false);
    }
  });

  onValue(startRef, (startSnapshot) => {
    const start = startSnapshot.val();
    $('#SAuto1').attr('value', start);
    });

  onValue(endRef, (endSnapshot) => {
    const end = endSnapshot.val();
    $('#EAuto1').attr('value', end);
  });

  onValue(hummidityRef, (hummiditySnapshot) => {
  const hummidity = hummiditySnapshot.val();

  onValue(startRef, (startSnapshot) => {
    const start = startSnapshot.val();

    onValue(endRef, (endSnapshot) => {
      const end = endSnapshot.val();

      onValue(stateRef, (stateSnapshot) => {
        const state = stateSnapshot.val();

        const stateRef444 = ref(db, "state/state4/state");

          onValue(stateRef444, (stateSnapshot444) => {
            const state444 = stateSnapshot444.val();
        
            if (state444 == false){

              if (start < hummidity && hummidity < end && state == true) {
                update(ref(db, "device/device2"), {
                  state: 1
                });
              } else {
                update(ref(db, "device/device2"), {
                  state: 0
                });
              }
            }
          });

      });
    });
  });
});
//======================================================== máy bơm nước ================================

function insert2() {
      if (checkbox2.checked == true) {
        alert("Bạn muốn bật chế độ tự động");

        update(ref(db, "state/state2"), {
            state: true
          });

        const value1 = parseInt(document.getElementById("SAuto2").value, 10);
        const value2 = parseInt(document.getElementById("EAuto2").value, 10);
  
          update(ref(db, "state/state2"), {
            start: value1,
            end: value2, 
          });

        $('#SAuto2').attr('disabled', true);
        $('#EAuto2').attr('disabled', true);

      } else {
        alert("Bạn muốn tắt chế độ tự động");
        update(ref(db, "state/state2"), {
            state: false
          });

        $('#SAuto2').attr('disabled', false);
        $('#EAuto2').attr('disabled', false);
      }
    }


  const soil_moistureRef = ref(db, "system/soil_moisture");
  const stateRef2 = ref(db, "state/state2/state");
  const startRef2 = ref(db, "state/state2/start");
  const endRef2 = ref(db, "state/state2/end");

  onValue(stateRef2, (snapshot2) => {
    const state2 = snapshot2.val();
    const checkbox = document.getElementById("onoff2");
    if (state2 == true){
      checkbox.checked = true;
    }
    else{
      checkbox.checked = false;
      $('#SAuto2').attr('disabled', false);
      $('#EAuto2').attr('disabled', false);
    }
  });

  onValue(startRef2, (startSnapshot2) => {
    const start2 = startSnapshot2.val();
    $('#SAuto2').attr('value', start2);
    });

  onValue(endRef2, (endSnapshot2) => {
    const end2 = endSnapshot2.val();
    $('#EAuto2').attr('value', end2);
  });

  onValue(soil_moistureRef, (soil_moistureSnapshot) => {
  const soil_moisture = soil_moistureSnapshot.val();

  onValue(startRef2, (startSnapshot2) => {
    const start2 = startSnapshot2.val();

    onValue(endRef2, (endSnapshot2) => {
      const end2 = endSnapshot2.val();

      onValue(stateRef2, (stateSnapshot2) => {
        const state2 = stateSnapshot2.val();
        const stateRef555 = ref(db, "state/state5/state");

          onValue(stateRef555, (stateSnapshot555) => {
            const state555 = stateSnapshot555.val();
        
            if (state555 == false){

              if (start2 < soil_moisture && soil_moisture < end2 && state2 == true) {
                update(ref(db, "device/device1"), {
                  state: 1
                });
              } else {
                update(ref(db, "device/device1"), {
                  state: 0
                });
              }
            }
          });

      });
    });
  });
});

//=================================================== đèn==================================

function insert3() {
  if (checkbox3.checked == true) {
    alert("Bạn muốn bật chế độ tự động");

    update(ref(db, "state/state3"), {
        state: true
      });

    const value1 = parseInt(document.getElementById("SAuto3").value, 10);
    const value2 = parseInt(document.getElementById("EAuto3").value, 10);

      update(ref(db, "state/state3"), {
        start: value1,
        end: value2, 
      });

    $('#SAuto3').attr('disabled', true);
    $('#EAuto3').attr('disabled', true);

  } else {
    alert("Bạn muốn tắt chế độ tự động");
    update(ref(db, "state/state3"), {
        state: false
      });

    $('#SAuto3').attr('disabled', false);
    $('#EAuto3').attr('disabled', false);
  }
}


  const lightRef = ref(db, "system/light");
  const stateRef3 = ref(db, "state/state3/state");
  const startRef3 = ref(db, "state/state3/start");
  const endRef3 = ref(db, "state/state3/end");

  onValue(stateRef3, (snapshot3) => {
    const state3 = snapshot3.val();
    const checkbox = document.getElementById("onoff3");
    if (state3 == true){
      checkbox.checked = true;
    }
    else{
      checkbox.checked = false;
      $('#SAuto3').attr('disabled', false);
      $('#EAuto3').attr('disabled', false);
    }
  });
  onValue(startRef3, (startSnapshot3) => {
    const start3 = startSnapshot3.val();
    $('#SAuto3').attr('value', start3);
    });

  onValue(endRef3, (endSnapshot3) => {
    const end3 = endSnapshot3.val();
    $('#EAuto3').attr('value', end3);
  });

  onValue(lightRef, (lightSnapshot) => {
  const light = lightSnapshot.val();

  onValue(startRef3, (startSnapshot3) => {
    const start3 = startSnapshot3.val();

    onValue(endRef3, (endSnapshot3) => {
      const end3 = endSnapshot3.val();

      onValue(stateRef3, (stateSnapshot3) => {
        const state3 = stateSnapshot3.val();
        const stateRef666 = ref(db, "state/state6/state");

          onValue(stateRef666, (stateSnapshot666) => {
            const state666 = stateSnapshot666.val();
        
            if (state666 == false){
              if (start3 < light && light < end3 && state3 == true) {
                update(ref(db, "device/device3"), {
                  state: 1
                });
              } else {
                update(ref(db, "device/device3"), {
                  state: 0
                });
              }
            }

            else{
              // alert("Bạn đang bật chế độ thiết lập theo thời gian");
            }
          });

      });
    });
  });
});


  checkbox1.addEventListener("change", insert1);
  checkbox2.addEventListener("change", insert2);
  checkbox3.addEventListener("change", insert3);




//======================================================== thiet lap thoi gian lam viec==================================================================

  var checkbox4 = document.getElementById("onSet1");

  function insert4() {
  if (checkbox4.checked == true) {
    const startInput = document.getElementById("TS1").value;
    const endInput = document.getElementById("TE1").value;
    update(ref(db, "state/state4"), {
        state: true,
        start: getTimeValue(startInput),
        end: getTimeValue(endInput)
      });

    alert("Bạn muốn bật chế độ tự động");

    $('#TS1').attr('disabled', true);
    $('#TE1').attr('disabled', true);

  } else {
    alert("Bạn muốn tắt chế độ tự động");
    update(ref(db, "state/state4"), {
        state: false,
      });
    $('#TS1').attr('disabled', false);
    $('#TE1').attr('disabled', false);
  }
}

const state4 = ref(db, "state/state4/state");

onValue(state4, (snapshot4) => {
    const state4 = snapshot4.val();
    if (state4 == true){
      checkbox4.checked = true;
    }
    else{
      checkbox4.checked = false;
      $('#TS1').attr('disabled', false);
      $('#TE1').attr('disabled', false);
    }
  });

checkbox4.addEventListener("change", insert4);

function checkTimeRange() {
  return new Promise((resolve, reject) => {
    const currentDateTime = new Date();
    const currentDayOfWeek = currentDateTime.getDay();
    const currentTime = currentDateTime.getTime();


    const monday1 = document.getElementById('monday1');
    const tuesday1 = document.getElementById('tuesday1');
    const wednesday1 = document.getElementById('wednesday1');
    const thursday1 = document.getElementById('thursday1');
    const friday1 = document.getElementById('friday1');
    const saturday1 = document.getElementById('saturday1');
    const sunday1 = document.getElementById('sunday1');
    
    // const selectedDays1 = [
    //   0,
    //   monday1.checked,
    //   tuesday1.checked,
    //   wednesday1.checked,
    //   thursday1.checked,
    //   friday1.checked,
    //   saturday1.checked,
    //   sunday1.checked
    // ];

    const startRef4 = ref(db, "state/state4/start");
    const endRef4 = ref(db, "state/state4/end");

    onValue(startRef4, (startSnapshot4) => {
      const start4 = startSnapshot4.val();
      $('#TS1').attr('value', convertTimeValueToTimeString(start4));
      onValue(endRef4, (endSnapshot4) => {
        const end4 = endSnapshot4.val();
        $('#TE1').attr('value', convertTimeValueToTimeString(end4));
        // if (selectedDays1[currentDayOfWeek] == false){
        //   resolve(false);
        // }else{
          if (currentTime >= start4 && currentTime < end4) {
            resolve(true);
          } else {
            resolve(false);
          }
        // }
      });
    });
  });
}

//===========================================================máy bơm nước===================================

var checkbox5 = document.getElementById("onSet2");

  function insert5() {
  const startInput = document.getElementById("TS2").value;
  const endInput = document.getElementById("TE2").value;
  if (checkbox5.checked == true) {
    update(ref(db, "state/state5"), {
        state: true,
        start: getTimeValue(startInput),
        end: getTimeValue(endInput)
      });

    alert("Bạn muốn bật chế độ tự động");

    $('#TS2').attr('disabled', true);
    $('#TE2').attr('disabled', true);

  } else {
    alert("Bạn muốn tắt chế độ tự động");
    update(ref(db, "state/state5"), {
        state: false,
      });
    $('#TS2').attr('disabled', false);
    $('#TE2').attr('disabled', false);
  }
}

const state5 = ref(db, "state/state5/state");

onValue(state5, (snapshot5) => {
    const state5 = snapshot5.val();
    if (state5 == true){
      checkbox5.checked = true;
    }
    else{
      checkbox5.checked = false;
      $('#TS2').attr('disabled', false);
      $('#TE2').attr('disabled', false);
    }
  });

checkbox5.addEventListener("change", insert5);

function checkTimeRange2() {
  return new Promise((resolve, reject) => {
    const currentDateTime = new Date();
    const currentDayOfWeek = currentDateTime.getDay();
    const currentTime = currentDateTime.getTime();


    const monday = document.getElementById('monday2');
    const tuesday = document.getElementById('tuesday2');
    const wednesday = document.getElementById('wednesday2');
    const thursday = document.getElementById('thursday2');
    const friday = document.getElementById('friday2');
    const saturday = document.getElementById('saturday2');
    const sunday = document.getElementById('sunday2');
    
    // const selectedDays = [
    //   0,
    //   monday.checked,
    //   tuesday.checked,
    //   wednesday.checked,
    //   thursday.checked,
    //   friday.checked,
    //   saturday.checked,
    //   sunday.checked
    // ];

    const startRef5 = ref(db, "state/state5/start");
    const endRef5 = ref(db, "state/state5/end");

    onValue(startRef5, (startSnapshot5) => {
      const start5 = startSnapshot5.val();
      $('#TS2').attr('value', convertTimeValueToTimeString(start5));
      onValue(endRef5, (endSnapshot5) => {
        const end5 = endSnapshot5.val();
        $('#TE2').attr('value', convertTimeValueToTimeString(end5));
        // if (selectedDays[currentDayOfWeek] == false){
        //   resolve(false);
        // }else{
          if (currentTime >= start5 && currentTime < end5) {
            resolve(true);
          } else {
            resolve(false);
          }
        // }
      });
    });
  });
}


//================================================== đèn===============================================


var checkbox6 = document.getElementById("onSet3");

  function insert6() {

  const startInput = document.getElementById("TS3").value;
  const endInput = document.getElementById("TE3").value;

  if (checkbox6.checked == true) {
    update(ref(db, "state/state6"), {
        state: true,
        start: getTimeValue(startInput),
        end: getTimeValue(endInput)
      });

    alert("Bạn muốn bật chế độ tự động");

    $('#TS3').attr('disabled', true);
    $('#TE3').attr('disabled', true);

  } else {
    alert("Bạn muốn tắt chế độ tự động");
    update(ref(db, "state/state6"), {
        state: false,
      });
    $('#TS3').attr('disabled', false);
    $('#TE3').attr('disabled', false);
  }
}

const state6 = ref(db, "state/state6/state");

onValue(state6, (snapshot6) => {
    const state6 = snapshot6.val();
    if (state6 == true){
      checkbox6.checked = true;
    }
    else{
      checkbox6.checked = false;
      $('#TS3').attr('disabled', false);
      $('#TE3').attr('disabled', false);
    }
  });

checkbox6.addEventListener("change", insert6);

function checkTimeRange3() {
  return new Promise((resolve, reject) => {
    const currentDateTime = new Date();
    const currentDayOfWeek = currentDateTime.getDay();
    const currentTime = currentDateTime.getTime();


    const monday3 = document.getElementById('monday3');
    const tuesday3 = document.getElementById('tuesday3');
    const wednesday3 = document.getElementById('wednesday3');
    const thursday3 = document.getElementById('thursday3');
    const friday3 = document.getElementById('friday3');
    const saturday3 = document.getElementById('saturday3');
    const sunday3 = document.getElementById('sunday3');
    
    // const selectedDays3 = [
    //   0,
    //   monday3.checked,
    //   tuesday3.checked,
    //   wednesday3.checked,
    //   thursday3.checked,
    //   friday3.checked,
    //   saturday3.checked,
    //   sunday3.checked
    // ];

    // console.log(selectedDays[currentDayOfWeek]);

    const startRef6 = ref(db, "state/state6/start");
    const endRef6 = ref(db, "state/state6/end");

    onValue(startRef6, (startSnapshot6) => {
      const start6 = startSnapshot6.val();
      $('#TS3').attr('value', convertTimeValueToTimeString(start6));
      onValue(endRef6, (endSnapshot6) => {
        const end6 = endSnapshot6.val();
        $('#TE3').attr('value', convertTimeValueToTimeString(end6));
        // if (selectedDays3[currentDayOfWeek] == false){
        //   resolve(false);
        // }
        // else{
          if (currentTime >= start6 && currentTime < end6) {
            resolve(true);
          } else {
            resolve(false);
          }
        // }
      });
    });
  });
}

function getTimeValue(timeString) {
  const timeParts = timeString.split(":");
  const hours = parseInt(timeParts[0]);
  const minutes = parseInt(timeParts[1]);

  const currentTime = new Date();
  currentTime.setHours(hours);
  currentTime.setMinutes(minutes);

  const timeValue = currentTime.getTime(); // milliseconds

  return timeValue;
}


function convertTimeValueToTimeString(timeValue) {
  const currentTime = new Date(timeValue);
  const hours = currentTime.getHours();
  const minutes = currentTime.getMinutes();

  const formattedHours = hours < 10 ? "0" + hours : hours;
  const formattedMinutes = minutes < 10 ? "0" + minutes : minutes;

  const timeString = `${formattedHours}:${formattedMinutes}`;

  return timeString;
}


async function performActionBasedOnTimeRange() {
  const isWithinTimeRange = await checkTimeRange();

  const isWithinTimeRange2 = await checkTimeRange2();

  const isWithinTimeRange3 = await checkTimeRange3();

  var checkbox = document.getElementById("onSet1");

  const stateRef111 = ref(db, "state/state1/state");
  onValue(stateRef111, (stateSnapshot111) => {
  const state111 = stateSnapshot111.val();

  if (state111 == false){

  if (isWithinTimeRange && checkbox.checked == true) {
    update(ref(db, "device/device2"), {
      state: 1
    });
  } else {
    update(ref(db, "device/device2"), {
      state: 0
    });
  }
  }
});

  var checkbox2 = document.getElementById("onSet2");

  const stateRef222 = ref(db, "state/state2/state");
  onValue(stateRef222, (stateSnapshot222) => {
  const state222= stateSnapshot222.val();

  if (state222 == false){
    if (isWithinTimeRange2 && checkbox2.checked == true) {
      update(ref(db, "device/device1"), {
        state: 1
      });
    } else {
      update(ref(db, "device/device1"), {
        state: 0
      });
    }
  }
    });


var checkbox3 = document.getElementById("onSet3");

const stateRef333 = ref(db, "state/state3/state");
onValue(stateRef333, (stateSnapshot333) => {
  const state333 = stateSnapshot333.val();

  if (state333 == false){
    if (isWithinTimeRange3 && checkbox3.checked == true) {
      update(ref(db, "device/device3"), {
        state: 1
      });
    } else {
      update(ref(db, "device/device3"), {
        state: 0
      });
  }

  }

});

}

document.addEventListener('DOMContentLoaded', function() {
  performActionBasedOnTimeRange();
  // Cập nhật trạng thái của nút on/off sau mỗi 1 phút (hoặc khoảng thời gian tùy chọn)
  setInterval(performActionBasedOnTimeRange, 1000); 
});
    
  </script>
</body>
</html>