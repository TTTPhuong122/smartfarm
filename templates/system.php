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

          </div>


          <div class="well col-sm-6" style="background-color: #ffffff;">
            <div class="col-sm-12">

              <div class="col-sm-12">
                <div class="col-sm-12 alert alert-danger">
                  <h4 class="col-sm-9 " style=" padding-top: 10px;">Thiết lập thời gian làm việc</h4>

                  <button type="button" class="col-sm-3  btn btn-primary container " data-toggle="modal"
                    data-target="#myModalTS">+ Thêm</button>
                </div>
              </div>


              <div class="col-sm-12 ">
                <div class="col-sm-12 alert alert-info">
                  <h4 class="col-sm-10">Quạt</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onSet1" name="onSet1" class="onSet1"
                      onchange="AddTimeSetTable('75','3','2')">


                    <span class="slider round"></span>
                  </label>
                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="time" class="form-control" name="TS1" id="TS1" value="09:30:00" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="time" class="form-control" name="TE1" id="TE1" value="10:00:00" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <button type="button" class="btn btn-danger" onclick="AddTimeSetTable('75','2','')">Xóa bỏ</button>
                    <button type="button" class="btn btn-warning"
                      onclick=" $('#TS1').attr( 'disabled', false );$('#TE1').attr( 'disabled', false );">Thay đổi
                    </button>
                    <button type="button" class="btn btn-success"
                      onclick="submitEdittime('75',$('#TS1').val(),$('#TE1').val())">Xác nhận</button>
                  </div>

                  <div class="form-group col-sm-1">
                  Thứ 2<input type="checkbox" id="Day1" name="Day1" class="Day1" onchange="DaySet('75','4','1','Monday')"
                      checked="">
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 3<input type="checkbox" id="Day1" name="Day1" class="Day1"
                      onchange="DaySet('75','4','2','Tuesday')">
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 4<input type="checkbox" id="Day1" name="Day1" class="Day1"
                      onchange="DaySet('75','4','2','Wednesday')">
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 5<input type="checkbox" id="Day1" name="Day1" class="Day1"
                      onchange="DaySet('75','4','2','Thursday')">
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 6<input type="checkbox" id="Day1" name="Day1" class="Day1"
                      onchange="DaySet('75','4','2','Friday')">
                  </div>
                  <div class="form-group col-sm-1">
                  Thứ 7<input type="checkbox" id="Day1" name="Day1" class="Day1"
                      onchange="DaySet('75','4','2','Saturday')">
                  </div>
                  <div class="form-group col-sm-1">
                  Chủ nhật<input type="checkbox" id="Day1" name="Day1" class="Day1"
                      onchange="DaySet('75','4','2','Sunday')">
                  </div>

                </div>
              </div>

              <div class="col-sm-12 ">
                <div class="col-sm-12 alert alert-warning">
                  <h4 class="col-sm-10">Máy bơm nước</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onSet2" name="onSet2" class="onSet2"
                      onchange="AddTimeSetTable('82','3','2')">


                    <span class="slider round"></span>
                  </label>
                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="time" class="form-control" name="TS2" id="TS2" value="09:30:00" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="time" class="form-control" name="TE2" id="TE2" value="10:00:00" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <button type="button" class="btn btn-danger" onclick="AddTimeSetTable('82','2','')">Xóa bỏ</button>
                    <button type="button" class="btn btn-warning"
                      onclick=" $('#TS2').attr( 'disabled', false );$('#TE2').attr( 'disabled', false );">Thay đổi
                    </button>
                    <button type="button" class="btn btn-success"
                      onclick="submitEdittime('82',$('#TS2').val(),$('#TE2').val())">Xác nhận</button>
                  </div>

                  <div class="form-group col-sm-1">
                    Thứ 2<input type="checkbox" id="Day2" name="Day2" class="Day2"
                      onchange="DaySet('82','4','2','Monday')">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 3<input type="checkbox" id="Day2" name="Day2" class="Day2"
                      onchange="DaySet('82','4','2','Tuesday')">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 4<input type="checkbox" id="Day2" name="Day2" class="Day2"
                      onchange="DaySet('82','4','2','Wednesday')">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 5<input type="checkbox" id="Day2" name="Day2" class="Day2"
                      onchange="DaySet('82','4','2','Thursday')">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 6<input type="checkbox" id="Day2" name="Day2" class="Day2"
                      onchange="DaySet('82','4','2','Friday')">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 7<input type="checkbox" id="Day2" name="Day2" class="Day2"
                      onchange="DaySet('82','4','2','Saturday')">
                  </div>
                  <div class="form-group col-sm-1">
                    Chủ nhật<input type="checkbox" id="Day2" name="Day2" class="Day2"
                      onchange="DaySet('82','4','2','Sunday')">
                  </div>

                </div>
              </div>

              <div class="col-sm-12 ">
                <div class="col-sm-12 alert alert-success">
                  <h4 class="col-sm-10">Máy phun sương mù</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onSet3" name="onSet3" class="onSet3"
                      onchange="AddTimeSetTable('2','3','2')">


                    <span class="slider round"></span>
                  </label>
                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="time" class="form-control" name="TS3" id="TS3" value="17:00:00" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="time" class="form-control" name="TE3" id="TE3" value="17:05:00" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <button type="button" class="btn btn-danger" onclick="AddTimeSetTable('2','2','')">Xóa bỏ</button>
                    <button type="button" class="btn btn-warning"
                      onclick=" $('#TS3').attr( 'disabled', false );$('#TE3').attr( 'disabled', false );">Thay đổi
                    </button>
                    <button type="button" class="btn btn-success"
                      onclick="submitEdittime('2',$('#TS3').val(),$('#TE3').val())">Xác nhận</button>
                  </div>

                  <div class="form-group col-sm-1">
                    Thứ 2<input type="checkbox" id="Day3" name="Day3" class="Day3" onchange="DaySet('2','4','1','Monday')"
                      checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 3<input type="checkbox" id="Day3" name="Day3" class="Day3" onchange="DaySet('2','4','1','Tuesday')"
                      checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 4<input type="checkbox" id="Day3" name="Day3" class="Day3"
                      onchange="DaySet('2','4','1','Wednesday')" checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 5<input type="checkbox" id="Day3" name="Day3" class="Day3"
                      onchange="DaySet('2','4','1','Thursday')" checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 6<input type="checkbox" id="Day3" name="Day3" class="Day3" onchange="DaySet('2','4','1','Friday')"
                      checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 7<input type="checkbox" id="Day3" name="Day3" class="Day3"
                      onchange="DaySet('2','4','1','Saturday')" checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Chủ nhật<input type="checkbox" id="Day3" name="Day3" class="Day3" onchange="DaySet('2','4','1','Sunday')"
                      checked="">
                  </div>

                </div>
              </div>
            </div>
          </div>


          <!-- #################################################################### ตั้งค่าการทำงานอัตโนมัติ ##################################################################################################### -->



          <div class="well col-sm-6" style="background-color: #ffffff;">

            <div class="col-sm-12">

              <div class="col-sm-12">
                <div class="col-sm-12 alert alert-danger">
                  <h4 class="col-sm-6 " style=" padding-top: 10px;">Thiết lập tự động hóa</h4>
                  <button type="button" class="col-sm-3  btn btn-warning container " data-toggle="modal"
                    data-target="#myModal2">Đề xuất</button>
                  <button type="button" class="col-sm-3  btn btn-primary container " data-toggle="modal"
                    data-target="#myModal">+ Thêm</button>
                </div>
                <h6 style="color:red;"> * Giá trị mặc định luôn lớn hơn giá trị kết thúc, ngoại trừ độ ẩm đất và giá trị độ ẩm không khí </h6>
                <h6>
                </h6>
              </div>

              <div class="col-sm-12">


                <h4 class="col-sm-10">Bộ 1</h4>


                <div class=" col-sm-12 alert alert-info">
                  <h4 class="col-sm-10">Điều kiện nhiệt độ không khí</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onoff1" name="onoff1" class="onoff1"
                      onchange="submitEditSwitchAuto('1','')">

                    <span class="slider round"></span>
                  </label>

                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="number" class="form-control SAuto1" name="SAuto1" id="SAuto1" value="33" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="number" class="form-control EAuto1" name="EAuto1" id="EAuto1" value="31" disabled="">
                  </div>



                  <div class="form-group col-sm-4">
                    <button type="button" class="btn btn-danger" onclick="submitDelAuto('1','')">Xóa bỏ</button>
                    <button type="button" class="btn btn-warning"
                      onclick=" $('#SAuto1').attr( 'disabled', false );$('#EAuto1').attr( 'disabled', false );">Thay đổi
                    </button>
                    <button type="button" class="btn btn-success"
                      onclick="submitEditAuto('1','\'118\',\'119\',\'120\'')">Xác nhận</button>

                  </div>

                  <div class="form-group col-sm-8">

                    <label class="checkbox-inline col-sm-4">
                      <input type="checkbox" id="onoffW1" name="onoffW1" class="onoffW1" value=""
                        onchange="submitEditElectricAuto('onoffW1','119','')">Quạt 
                    </label>

                    <label class="checkbox-inline col-sm-4" style="margin-left: 0px;">
                      <input type="checkbox" id="onoffF1" name="onoffF1" class="onoffF1" value="" checked=""
                        onchange="submitEditElectricAuto('onoffF1','118','checked')">Máy bơm nước
                    </label>
                  </div>

                  <input type="hidden" name="arrid1" id="arrid1" class="arrid1" value="\'118\',\'119\',\'120\'">



                </div>




                <h4 class="col-sm-10">Bộ 2</h4>


                <div class=" col-sm-12 alert alert-success">
                  <h4 class="col-sm-10">Điều kiện độ ẩm đất</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onoff2" name="onoff2" class="onoff2"
                      onchange="submitEditSwitchAuto('2','')">

                    <span class="slider round"></span>
                  </label>

                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="number" class="form-control SAuto2" name="SAuto2" id="SAuto2" value="30" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="number" class="form-control EAuto2" name="EAuto2" id="EAuto2" value="40" disabled="">
                  </div>



                  <div class="form-group col-sm-4">
                    <button type="button" class="btn btn-danger" onclick="submitDelAuto('2','')">Xóa bỏ</button>
                    <button type="button" class="btn btn-warning"
                      onclick=" $('#SAuto2').attr( 'disabled', false );$('#EAuto2').attr( 'disabled', false );">Thay đổi
                    </button>
                    <button type="button" class="btn btn-success"
                      onclick="submitEditAuto('2','\'145\',\'146\',\'147\'')">Xác nhận</button>

                  </div>

                  <div class="form-group col-sm-8">

                    <label class="checkbox-inline col-sm-4">
                      <input type="checkbox" id="onoffW2" name="onoffW2" class="onoffW2" value=""
                        onchange="submitEditElectricAuto('onoffW2','146','')">Quạt 
                    </label>

                    <label class="checkbox-inline col-sm-4" style="margin-left: 0px;">
                      <input type="checkbox" id="onoffF2" name="onoffF2" class="onoffF2" value=""
                        onchange="submitEditElectricAuto('onoffF2','145','')">Máy bơm nước
                    </label>
                  </div>

                  <input type="hidden" name="arrid2" id="arrid2" class="arrid2" value="\'145\',\'146\',\'147\'">
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
  <script>
    let AddAutoTable = (Sgroup, Scondi) => {

  if (confirm('Bạn có muốn thêm cài đặt không?')) {

    $.ajax({
      url: "./AddAuto.php?switch=1",
      type: "POST",
      data: {
        FarmId: '1',
        LocationId: '1',
        Sgroup: Sgroup,
        Scondi: Scondi
      },
      cache: false,
      success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);

        if (dataResult.statusCode == 200) {
          alert("Thực hiện thành công!!!");

          location.reload();

        }
        else {
          alert("Không thể thực hiện (**Không thể chọn các điều kiện trùng lặp trong một nhóm) !!!");
          location.reload();
        }

      }
    });

  } else {

    location.reload();
  }
};
let AddTimeSetTable = (Sgroup, x, Ss) => {


  var texts = "";
  if (x == 1) {
    texts = "Bạn có muốn thêm cài đặt không?";
  }
  if (x == 2) {
    texts = "Bạn có muốn xóa cài đặt không?";
  }
  if (x == 3) {
    texts = "Bạn có muốn chỉnh sửa cài đặt không?";
  }

  if (confirm(texts)) {

    $.ajax({
      url: "./AddTimeSetTable.php?switch=" + x,
      type: "POST",
      data: {
        FarmId: '1',
        LocationId: '1',
        Sgroup: Sgroup,
        Status: Ss

      },
      cache: false,
      success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);

        if (dataResult.statusCode == 200) {
          alert("Thực hiện thành công!!!");

          location.reload();

        }
        else {
          alert("Không thể thực hiện !!");
          location.reload();
        }

      }
    });

  } else {

    location.reload();
  }
};



// let DaySet = (Sgroup, x, Ss, tSDats) => {


//   var texts = "";

//   texts = "Bạn có muốn chỉnh sửa cài đặt không?";


//   if (confirm(texts)) {

//     $.ajax({
//       url: "./DaySet.php?switch=" + x,
//       type: "POST",
//       data: {
//         FarmId: '1',
//         LocationId: '1',
//         Sgroup: Sgroup,
//         Status: Ss,
//         SDats: tSDats

//       },
//       cache: false,
//       success: function (dataResult) {
//         var dataResult = JSON.parse(dataResult);

//         if (dataResult.statusCode == 200) {
//           alert("Thực hiện thành công !!!");

//           location.reload();

//         }
//         else {
//           alert("Không thể thực hiện!!!");
//           location.reload();
//         }

//       }
//     });

//   } else {

//     location.reload();
//   }
// };
////////////switch Edit set time
let submitEdittime = (id, tstart, tend) => {



  if (confirm('Bạn xác nhận thay đổi ?')) {

    $.ajax({
      url: "./switch.php?switch=3",
      type: "POST",
      data: {
        Id: id,
        FarmId: '1',
        LocationId: '1',
        tstart: tstart,
        tend: tend
      },
      cache: false,
      success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);
        //alert(dataResult.statusCode);
        if (dataResult.statusCode == 200) {
          alert("Thực hiện thành công!!!");
          location.reload();

        }
        else {
          alert("Không thể thực hiện!!!");
          location.reload();
        }

      }
    });

  } else {

    location.reload();
  }
};



///////////////////////////////// //switch Edit set time Autooooooooooooooooooooooooo
let submitEditAuto = (id, txt) => {

  var tStart = $('#SAuto' + id).val();
  var tEnd = $('#EAuto' + id).val();
  var tAllId = $('#arrid' + id).val();
  if (confirm('Bạn xác nhận thay đổi ?')) {

    $.ajax({
      url: "./switchAuto.php?switch=1",
      type: "POST",
      data: {
        FarmId: '1',
        LocationId: '1',
        VariableId: txt,
        tstart: tStart,
        tend: tEnd,
        tAllId: tAllId,
      },
      cache: false,
      success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);

        if (dataResult.statusCode == 200) {
          alert("Thực hiện thành công!!!");
          location.reload();

        }
        else {
          alert("Không thể thực hiện!!!");
          location.reload();
        }

      }
    });

  } else {

    location.reload();
  }
};
///////////////////////////////// //switch del set time Autooooooooooooooooooooooooo
let submitDelAuto = (id, txt) => {


  var tAllId = $('#arrid' + id).val();
  if (confirm('Bạn có muốn xóa cài đặt không?')) {

    $.ajax({
      url: "./switchAuto.php?switch=del",
      type: "POST",
      data: {
        tAllId: tAllId
      },
      cache: false,
      success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);

        if (dataResult.statusCode == 200) {
          alert("Thực hiện thành công!!!");
          location.reload();

        }
        else {
          alert("Không thể thực hiện !!");
          location.reload();
        }

      }
    });

  } else {

    location.reload();
  }
};
///////////////////////////////// //switch Edit switch Autooooooooooooooooooooooooo
let submitEditSwitchAuto = (id, txt) => {


  var tAllId = $('#arrid' + id).val();


  var tswitch = $('.onoff' + id + ':checked').val();
  if (tswitch == 'on') {
    tstatus = " bật chế độ tự động ";
    Pstatus = "1"

  } else {
    tstatus = " tắt chế độ tự động ";
    Pstatus = "2"
  }




  if (confirm('Bạn muốn' + tstatus + '?')) {

    $.ajax({
      url: "./switchAuto.php?switch=2",
      type: "POST",
      data: {
        tAllId: tAllId,
        status: Pstatus
      },
      cache: false,
      success: function (dataResult) {
        var dataResult = JSON.parse(dataResult);

        if (dataResult.statusCode == 200) {
          alert("Thực hiện thành công");
          location.reload();

        }
        else {
          alert("Không thể thực hiện!!");
          location.reload();
        }

      }
    });

  } else {

    location.reload();
  }

};



///////////////////////////////// //switch Edit switch Electric Autooooooooooooooooooooooooo
</script>
</body>
</html>