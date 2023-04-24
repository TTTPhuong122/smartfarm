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
            <font style="vertical-align: inherit;">Vườn cây thông minh(Hướng Dương)</font>
          </font>
        </a>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="#">
            <span class="glyphicon glyphicon-user"></span>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Một</font>
            </font>
          </a>
        </li>
        <li>
          <a href="logout.php">
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
            <a href="home.html">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Trang chính</font>
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
          <li>
            <u><b><a href="#">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Vườn cây thông minh(Hướng Dương)</font>
                  </font>
                </a></b></u>
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
                      <font style="vertical-align: inherit;">Vườn cây thông minh(Hướng Dương)</font>
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
          <!-- //////////////////////////////////////////////  End Modal run location (in lop) ////////////////////////////////////////////////////-->
          <li>
            <a href="./phpstatus.php?tapon=TapSTATUS">
              <span class="glyphicon glyphicon-arrow-right"> </span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Trạng thái</font>
              </font>
            </a>
          </li>
          <li>
            <a href="./phpstatus.php?tapon=TapControl">
              <span class="glyphicon glyphicon-arrow-right"> </span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Điều khiển</font>
              </font>
            </a>
          </li>
          <li>
            <a href="./phpstatus.php?tapon=TapAuto">
              <span class="glyphicon glyphicon-arrow-right"> </span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Cài đặt hệ thống</font>
              </font>
            </a>
          </li>
        </ul>
        <br>
      </div>

      <!-- ################################################################################## -->
      <div class="col-sm-10">
      <div class="container-fluid TapSTATUS" style="">
          <h2 class="alert alert-success">
            <small>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Trạng Thái</font>
              </font>
            </small>
          </h2>
          <h5>
            <span class="glyphicon glyphicon-time"></span>
            <font style="vertical-align: inherit;">
              <font style="vertical-align: inherit;">Thời gian : 
                <?php
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date('d/m/yy h:i:s');
                    echo $date;
                ?> 
            </font>
            </font>
          </h5>

          <div class="well col-sm-6">
            <table class="table table-hover">
              <thead>
                <tr>
                  <th>
                    <div class="col-sm-3">
                      <img src="./img/temp.png" style="width:100%;">
                    </div>
                  </th>

                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <h4 class="responsive-font-example">
                      <a href="#" class="btn btn-success btn-md ">
                        <span class="glyphicon glyphicon-ok"></span>
                      </a>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                          Nhiệt độ không khí
                          <?php
                          require("config/database.php");
                          $sql = 'SELECT humidity, light, temparature FROM system WHERE id_user = 1';
                          $result = mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_assoc($result))
                          {
                            echo "{$row['humidity']}";
                          }
                          ?> C
                        
                        </font>
                      </font>
                    </h4>
                  </td>

                </tr>
                <tr>
                  <td>
                    <h4 class="responsive-font-example">
                      <a href="#" class="btn btn-success btn-md ">
                        <span class="glyphicon glyphicon-ok"></span>
                      </a>
                        <font style="vertical-align: inherit;">
                         <font style="vertical-align: inherit;">
                            Độ ẩm của đất 
                            <?php
                          require("config/database.php");
                          $sql = 'SELECT humidity, light, temparature FROM system WHERE id_user = 1';
                          $result = mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_assoc($result))
                          {
                            echo "{$row['temparature']}";
                          }
                          ?> %
                        </font>
                        </font>
                    </h4>
                  </td>

                </tr>
                <tr>
                  <td>
                    <h4 class="responsive-font-example">
                      <a href="#" class="btn btn-success btn-md ">
                        <span class="glyphicon glyphicon-ok"></span>
                      </a>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">
                        Cường độ sáng 
                        <?php
                          require("config/database.php");
                          $sql = 'SELECT humidity, light, temparature FROM system WHERE id_user = 1';
                          $result = mysqli_query($conn, $sql);
                          while($row = mysqli_fetch_assoc($result))
                          {
                            echo "{$row['temparature']}";
                          }
                          ?> Lux
                        </font>
                      </font>
                    </h4>
                  </td>

                </tr>
                
              </tbody>
            </table>
          </div>
          
        </div>
        <!-- ################################################################################## -->
        <div class="container-fluid TapControl" style="">
          <h2 class="alert alert-info">
            <small>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Điều khiển</font>
              </font>
            </small>
          </h2>
          <h6 style="color:red;"> Nếu kích hoạt bơm nước, quạt, phun sương một trong hai hệ thống
            "Đặt thời gian làm việc" và "Đặt hoạt động tự động" sẽ không hoạt động. </h6>
          <h6>
          </h6>
          <h5>
            <span class="glyphicon glyphicon-time"></span> Thời gian: 
            <?php
                    date_default_timezone_set('Asia/Ho_Chi_Minh');
                    $date = date('d/m/yy h:i:s');
                    echo $date;
                ?> 
          </h5>
          <div class="well col-sm-4">
            <div class="col-sm-6">
              <img src="./img/water.png" style="width:100%;">
            </div>
            <div class="col-sm-6">
              <div class="col-sm-12">
                <br>
                <h3> Máy bơm nước: Tắt/Bật </h3>
              </div>
              <div class="col-sm-12">
                <label class="switch">
                  <input type="checkbox" id="StatusWater" name="StatusWater" class="StatusWater"
                    onchange="submit('StatusWater','máy bơm nước')">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="well col-sm-4">
            <div class="col-sm-6">
              <img src="./img/fan.png" style="width:100%;">
            </div>
            <div class="col-sm-6">
              <div class="col-sm-12">
                <br>
                <h3> Quạt: Tắt/Mở </h3>
              </div>
              <div class="col-sm-12">
                <label class="switch">
                  <input type="checkbox" id="StatusFan" name="StatusFan" class="StatusFan"
                    onchange="submit('StatusFan','cái quạt')">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="well col-sm-4">
            <div class="col-sm-6">
              <img src="./img/air.png" style="width:100%;">
            </div>
            <div class="col-sm-6">
              <div class="col-sm-12">
                <h3> Tạo sương: Tắt/Bật </h3>
              </div>
              <div class="col-sm-12">
                <label class="switch">
                  <input type="checkbox" id="StatusAir" name="StatusAir" class="StatusAir"
                    onchange="submit('StatusAir','máy tạo sương mù')">
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <!-- #################################################################### ตั้งค่าระบบ ############################################################################################################## -->
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
                <div class="col-sm-12 alert alert-warning">
                  <h4 class="col-sm-10">Quạt : 1</h4>
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
                  <h4 class="col-sm-10">Quạt : 2</h4>
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
                <div class="col-sm-12 alert alert-info">
                  <h4 class="col-sm-10">Máy bơm nước : 1</h4>
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

              <div class="col-sm-12 ">
                <div class="col-sm-12 alert alert-info">
                  <h4 class="col-sm-10">Máy bơm nước : 2</h4>
                  <label class="switch col-sm-2">
                    <input type="checkbox" id="onSet4" name="onSet4" class="onSet4"
                      onchange="AddTimeSetTable('70','3','2')">


                    <span class="slider round"></span>
                  </label>
                  <div class="form-group col-sm-12">
                    <label for="usr">Bắt đầu:</label>
                    <input type="time" class="form-control" name="TS4" id="TS4" value="07:56:00" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <label for="usr">Dừng:</label>
                    <input type="time" class="form-control" name="TE4" id="TE4" value="08:00:00" disabled="">
                  </div>
                  <div class="form-group col-sm-12">
                    <button type="button" class="btn btn-danger" onclick="AddTimeSetTable('70','2','')">Xóa bỏ</button>
                    <button type="button" class="btn btn-warning"
                      onclick=" $('#TS4').attr( 'disabled', false );$('#TE4').attr( 'disabled', false );">Thay đổi
                    </button>
                    <button type="button" class="btn btn-success"
                      onclick="submitEdittime('70',$('#TS4').val(),$('#TE4').val())">Xác nhận</button>
                  </div>

                  <div class="form-group col-sm-1">
                    Thứ 2<input type="checkbox" id="Day4" name="Day4" class="Day4" onchange="DaySet('70','4','1','Monday')"
                      checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    THứ 3<input type="checkbox" id="Day4" name="Day4" class="Day4"
                      onchange="DaySet('70','4','1','Tuesday')" checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 4<input type="checkbox" id="Day4" name="Day4" class="Day4"
                      onchange="DaySet('70','4','1','Wednesday')" checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 5<input type="checkbox" id="Day4" name="Day4" class="Day4"
                      onchange="DaySet('70','4','1','Thursday')" checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 6<input type="checkbox" id="Day4" name="Day4" class="Day4" onchange="DaySet('70','4','1','Friday')"
                      checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Thứ 7<input type="checkbox" id="Day4" name="Day4" class="Day4"
                      onchange="DaySet('70','4','1','Saturday')" checked="">
                  </div>
                  <div class="form-group col-sm-1">
                    Chủ nhật<input type="checkbox" id="Day4" name="Day4" class="Day4"
                      onchange="DaySet('70','4','1','Sunday')" checked="">
                  </div>

                </div>
              </div>
            </div>
          </div>


          <!-- #################################################################### Thiết lập tự động hóa ##################################################################################################### -->
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
        <!-- ///////////////////////////////////////////////////////////////////////////////  page  report ////////////////////////////////////////////////////////////////////////-->
        <br>
      </div>
    </div>
  </div>





  <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Modal settime-->



  <div id="myModalTS" class="modal fade" role="dialog">
    <div class="modal-dialog">


      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">เพิ่มตั้งค่าการทำงานอัตโนมัติ</h4>
        </div>
        <div class="modal-body">

          <p>
          </p>
          <div class="form-group">
            <label for="ddlgroup">เลือกอุปกรณ์ที่ต้องการเพิ่ม :</label>
            <select name="ddlgroupTs" id="ddlgroupTs" class="ddlgroupTs form-control">

              <option value="4">พัดลม</option>
              <option value="5">ปั้มน้ำ</option>
              <option value="6">เครื่องพ้นหมอก</option>



            </select>
          </div>
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success"
            onclick="AddTimeSetTable($('#ddlgroupTs').val(),'1','')">ยืนยัน</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        </div>
      </div>

    </div>
  </div>
  <!-- ///////////////////////////////////////////////////////////////////////////////  Modal ////////////////////////////////////////////////////////////////////////-->
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">เพิ่มตั้งค่าการทำงานอัตโนมัติ</h4>
        </div>
        <div class="modal-body">

          <p>
          </p>
          <div class="form-group">
            <label for="ddlgroup">เลือกชุดที่ต้องการจะเพิ่ม :</label>
            <select name="ddlgroup" id="ddlgroup" class="ddlgroup form-control">
              <option value="">-----กรุณาเลือกชุด-----</option>
              <option value="1">ชุดที่่ 1</option>
              <option value="2">ชุดที่่ 2</option>


              <option value="New">เพิ่มชุดใหม่</option>
            </select>
          </div>

          <div class="form-group">
            <label for="ddlcondi">เงื่อนไข :</label>
            <select name="ddlcondi" id="ddlcondi" class="ddlcondi form-control">
              <option value="">-----กรุณาเลือกเงื่อนไข-----</option>
              <option value="7">ความชื้นในดิน</option>
              <option value="8">ความชื้นในอากาศ</option>
              <option value="9">อุณหภูมิในดิน</option>
              <option value="10">อุณหภูมิในอากาศ</option>
              <option value="11">ความเข้มแสง</option>
              <option value="12">ค่า PH</option>
              <option value="15">n</option>
              <option value="16">p</option>
              <option value="17">k</option>

            </select>
          </div>
          <p></p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success"
            onclick="AddAutoTable($('#ddlgroup').val(),$('#ddlcondi').val())">ยืนยัน</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        </div>
      </div>

    </div>
  </div>

  <div id="myModal2" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Modal2 content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">แนะนำ</h4>
        </div>
        <div class="modal-body">

          <p>

          </p>
          <div class="form-group">
            <label for="ddlgroup">เลือกสวน :</label>
            <select name="ddlFruit" id="ddlFruit" class="ddlFruit form-control"
              onchange=" hideddl() ; $('.'+ $('#ddlFruit').val()).show()">
              <option value="">-----กรุณาเลือกสวน-----</option>

              <option value="h-1">มะม่วง</option>

              <option value="h-2">เมล่อน</option>

            </select>
          </div>


          <div class=" col-sm-12 alert alert-success h-1" style="display: none;">
            <h4 class="col-sm-10"> มะม่วง : (ความชื้นในดิน)</h4>


            <div class="form-group col-sm-12">
              <label for="usr">เริ่ม:</label>
              <input type="number" class="form-control SAutodexx" name="SAutodexx" id="SAutodexx" value="40"
                disabled="">
            </div>
            <div class="form-group col-sm-12">
              <label for="usr">สิ้นสุด:</label>
              <input type="number" class="form-control EAutodexx" name="EAutodexx" id="EAutodexx" value="50"
                disabled="">
            </div>


            <div class="form-group col-sm-12">

              <label class="checkbox-inline col-sm-4">
                <input type="checkbox" id="onoffWdexx" name="onoffWdexx" class="onoffWdexx" value="" disabled="">ปั๊มน้ำ
              </label>

              <label class="checkbox-inline col-sm-4" style="margin-left: 0px;">
                <input type="checkbox" id="onoffFdexx" name="onoffFdexx" class="onoffFdexx" value="" checked=""
                  disabled="">พัดลม
              </label>

              <label class="checkbox-inline col-sm-4" style="margin-left: 0px;">
                <input type="checkbox" id="onoffAdexx" name="onoffAdexx" class="onoffAdexx" value="" checked=""
                  disabled="">เครื่องพ่นหมอก
              </label>

            </div>
          </div>


          <div class=" col-sm-12 alert alert-success h-2" style="display: none;">
            <h4 class="col-sm-10"> เมล่อน : (ความชื้นในอากาศ)</h4>


            <div class="form-group col-sm-12">
              <label for="usr">เริ่ม:</label>
              <input type="number" class="form-control SAutodexx" name="SAutodexx" id="SAutodexx" value="40"
                disabled="">
            </div>
            <div class="form-group col-sm-12">
              <label for="usr">สิ้นสุด:</label>
              <input type="number" class="form-control EAutodexx" name="EAutodexx" id="EAutodexx" value="50"
                disabled="">
            </div>


            <div class="form-group col-sm-12">

              <label class="checkbox-inline col-sm-4">
                <input type="checkbox" id="onoffWdexx" name="onoffWdexx" class="onoffWdexx" value="" disabled="">ปั๊มน้ำ
              </label>

              <label class="checkbox-inline col-sm-4" style="margin-left: 0px;">
                <input type="checkbox" id="onoffFdexx" name="onoffFdexx" class="onoffFdexx" value="" checked=""
                  disabled="">พัดลม
              </label>

              <label class="checkbox-inline col-sm-4" style="margin-left: 0px;">
                <input type="checkbox" id="onoffAdexx" name="onoffAdexx" class="onoffAdexx" value="" checked=""
                  disabled="">เครื่องพ่นหมอก
              </label>

            </div>
          </div>





          <p></p>
        </div>
        <div class="modal-footer">

          <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
        </div>
      </div>

    </div>
  </div>


  <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ModalProfile content-->
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
                      <font style="vertical-align: inherit;">Nguyễn Văn A</font>
                    </font>
                  </b>
                </b></a><b><b>
                  <a href="#" class="list-group-item"><b>
                      <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">Địa chỉ : </font>
                      </font><b>
                        <font style="vertical-align: inherit;">
                          <font style="vertical-align: inherit;">56 Nguyễn Lương Bằng, Hòa Khánh, Liên Chiểu</font>
                        </font>
                      </b>
                    </b></a><b><b>
                      <a href="#" class="list-group-item"><b>
                          <font style="vertical-align: inherit;">
                            <font style="vertical-align: inherit;">Số điện thoại liên hệ : </font>
                          </font><b>
                            <font style="vertical-align: inherit;">
                              <font style="vertical-align: inherit;">0123456790</font>
                            </font>
                          </b>
                        </b></a><b><b>
                          <a href="#" class="list-group-item"><b>
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">Loại cây trồng : </font>
                              </font><b>
                                <font style="vertical-align: inherit;">
                                  <font style="vertical-align: inherit;">Hướng Dương</font>
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
  </div><b><b><b>

        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx Modal contact -->

        <!-- Modal -->

        <div id="myModalContact" class="modal fade" role="dialog">
          <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">×</button>
                <h4 class="modal-title">ติดต่อ Admin</h4>
              </div>
              <div class="modal-body">
                <div class="list-group">
                  <a href="#" class="list-group-item active">ข้อมูลบริษัท</a>
                  <a href="#" class="list-group-item "><b>ชื่อบริษัท : <b>บริษัท ทอร์ค ไอที จำกัด</b></b></a><b><b>
                      <a href="#" class="list-group-item"><b>ที่อยู่บริษัท : <b>19/21 หมู่ที่ 2 ต.คลองเกลือ อ.ปากเกร็ด
                            จ.นนทบุรี 11120</b></b></a><b><b>
                          <a href="#" class="list-group-item"><b>อีเมล์ : <b>SmartFarm@gmail.com</b></b></a><b><b>
                              <a href="#" class="list-group-item"><b>เบอร์โทร : <b>020020965</b></b></a><b><b>
                                </b></b></b></b></b></b></b></b>
                </div><b><b><b>


                    </b></b></b>
              </div><b><b><b>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    </div>
                  </b></b></b>
            </div><b><b><b>

                </b></b></b>
          </div><b><b><b>
              </b></b></b>
        </div><b><b><b>


              <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx ModalLog -->
              <div id="myModalLog" class="modal fade" style="display: none;">
                <div class="modal-dialog modal-lg">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">×</button>
                      <h4 class="modal-title">Log sign in</h4>
                    </div>
                    <div class="modal-body">

                      <table class="table table-hover">
                        <thead>
                          <tr class="active">
                            <th class="text-center">ชื่อผู้ใช้งาน</th>
                            <th class="text-center">จำนวนการเข้าใช้งาน</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>สวนยาง ฟาร์ม</td>
                            <td class="text-center"> 27</td>
                          </tr>
                          <tr>
                            <td>เกษตรกร สวนยาง</td>
                            <td class="text-center"> 1</td>
                          </tr>

                        </tbody>
                      </table>

                      <hr>

                      <figure class="highcharts-figure col-sm-12">
                        <div class="col-sm-12" id="containerLog" style="height: 300px; overflow: hidden;"
                          data-highcharts-chart="0" aria-hidden="false" role="region"
                          aria-label="แผนภาพการเข้าใช้งาน. Highcharts interactive chart.">
                          <div id="highcharts-screen-reader-region-before-0" aria-hidden="false"
                            style="position: relative;">
                            <div aria-hidden="false"
                              style="position: absolute; width: 1px; height: 1px; overflow: hidden; white-space: nowrap; clip: rect(1px, 1px, 1px, 1px); margin-top: -3px; opacity: 0.01;">
                              <p>แผนภาพการเข้าใช้งาน</p>
                              <div>Bar chart with 2 bars.</div>
                              <div><button id="hc-linkto-highcharts-data-table-0" tabindex="-1"
                                  aria-expanded="false">View as data table, แผนภาพการเข้าใช้งาน</button></div>
                              <div>The chart has 1 X axis displaying categories. </div>
                              <div>The chart has 1 Y axis displaying จำนวนการเข้าระบบ. Data ranges from 1 to 27.</div>
                            </div>
                          </div>
                          <div aria-hidden="false" class="highcharts-announcer-container" style="position: relative;">
                            <div aria-hidden="false" aria-live="polite"
                              style="position: absolute; width: 1px; height: 1px; overflow: hidden; white-space: nowrap; clip: rect(1px, 1px, 1px, 1px); margin-top: -3px; opacity: 0.01;">
                            </div>
                            <div aria-hidden="false" aria-live="assertive"
                              style="position: absolute; width: 1px; height: 1px; overflow: hidden; white-space: nowrap; clip: rect(1px, 1px, 1px, 1px); margin-top: -3px; opacity: 0.01;">
                            </div>
                            <div aria-hidden="false" aria-live="polite"
                              style="position: absolute; width: 1px; height: 1px; overflow: hidden; white-space: nowrap; clip: rect(1px, 1px, 1px, 1px); margin-top: -3px; opacity: 0.01;">
                            </div>
                          </div>
                          <div id="highcharts-wd3d8xc-0" dir="ltr" class="highcharts-container "
                            style="position: relative; overflow: hidden; width: 807px; height: 300px; text-align: left; line-height: normal; z-index: 0; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); user-select: none; touch-action: manipulation; outline: none;"
                            aria-hidden="false" tabindex="0">
                            <div aria-hidden="false" class="highcharts-a11y-proxy-container-before"
                              style="top: 0px; left: 0px; white-space: nowrap; position: absolute;"></div><svg
                              version="1.1" class="highcharts-root"
                              style="font-family: &quot;Lucida Grande&quot;, &quot;Lucida Sans Unicode&quot;, Arial, Helvetica, sans-serif; font-size: 12px;"
                              xmlns="http://www.w3.org/2000/svg" width="807" height="300" viewBox="0 0 807 300"
                              aria-hidden="false" aria-label="Interactive chart">
                              <desc aria-hidden="true">Created with Highcharts 10.3.3</desc>
                              <defs aria-hidden="true">
                                <clipPath id="highcharts-wd3d8xc-1-">
                                  <rect x="0" y="0" width="728" height="210" fill="none"></rect>
                                </clipPath>
                                <clipPath id="highcharts-wd3d8xc-4-">
                                  <rect x="0" y="0" width="728" height="210" fill="none"></rect>
                                </clipPath>
                              </defs>
                              <rect fill="#ffffff" class="highcharts-background" x="0" y="0" width="807" height="300"
                                rx="0" ry="0" aria-hidden="true"></rect>
                              <rect fill="none" class="highcharts-plot-background" x="69" y="53" width="728"
                                height="210" aria-hidden="true"></rect>
                              <g class="highcharts-grid highcharts-xaxis-grid" data-z-index="1" aria-hidden="true">
                                <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none"
                                  data-z-index="1" class="highcharts-grid-line" d="M 432.5 53 L 432.5 263" opacity="1">
                                </path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none"
                                  data-z-index="1" class="highcharts-grid-line" d="M 796.5 53 L 796.5 263" opacity="1">
                                </path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="0" stroke-dasharray="none"
                                  data-z-index="1" class="highcharts-grid-line" d="M 68.5 53 L 68.5 263" opacity="1">
                                </path>
                              </g>
                              <g class="highcharts-grid highcharts-yaxis-grid" data-z-index="1" aria-hidden="true">
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none"
                                  data-z-index="1" class="highcharts-grid-line" d="M 69 263.5 L 797 263.5" opacity="1">
                                </path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none"
                                  data-z-index="1" class="highcharts-grid-line" d="M 69 193.5 L 797 193.5" opacity="1">
                                </path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none"
                                  data-z-index="1" class="highcharts-grid-line" d="M 69 123.5 L 797 123.5" opacity="1">
                                </path>
                                <path fill="none" stroke="#e6e6e6" stroke-width="1" stroke-dasharray="none"
                                  data-z-index="1" class="highcharts-grid-line" d="M 69 52.5 L 797 52.5" opacity="1">
                                </path>
                              </g>
                              <rect fill="none" class="highcharts-plot-border" data-z-index="1" stroke="#cccccc"
                                stroke-width="0" x="69" y="53" width="728" height="210" aria-hidden="true"></rect>
                              <g class="highcharts-axis highcharts-xaxis" data-z-index="2" aria-hidden="true">
                                <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="1"
                                  data-z-index="7" d="M 69 263.5 L 797 263.5"></path>
                              </g>
                              <g class="highcharts-axis highcharts-yaxis" data-z-index="2" aria-hidden="true"><text
                                  x="26.379457473754883" data-z-index="7" text-anchor="middle"
                                  transform="translate(0,0) rotate(270 26.379457473754883 158)"
                                  class="highcharts-axis-title"
                                  style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);"
                                  y="158">จำนวนการเข้าระบบ</text>
                                <path fill="none" class="highcharts-axis-line" stroke="#ccd6eb" stroke-width="0"
                                  data-z-index="7" d="M 69 53 L 69 263"></path>
                              </g>
                              <g class="highcharts-series-group" data-z-index="3" aria-hidden="false">
                                <g class="highcharts-series highcharts-series-0 highcharts-column-series highcharts-color-0 highcharts-tracker"
                                  data-z-index="0.1" opacity="1" transform="translate(69,53) scale(1 1)"
                                  clip-path="url(#highcharts-wd3d8xc-4-)" aria-hidden="false">
                                  <rect x="94.5" y="21.5" width="175" height="189" fill="#7cb5ec" stroke="#ffffff"
                                    stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"
                                    tabindex="-1" role="img" aria-label="สวนยาง ฟาร์ม, 27. จำนวนการเข้าระบบ : ."
                                    style="outline: none;"></rect>
                                  <rect x="458.5" y="203.5" width="175" height="7" fill="#7cb5ec" stroke="#ffffff"
                                    stroke-width="1" opacity="1" class="highcharts-point highcharts-color-0"
                                    tabindex="-1" role="img" aria-label="เกษตรกร สวนยาง, 1. จำนวนการเข้าระบบ : ."
                                    style="outline: none;"></rect>
                                </g>
                                <g class="highcharts-markers highcharts-series-0 highcharts-column-series highcharts-color-0"
                                  data-z-index="0.1" opacity="1" transform="translate(69,53) scale(1 1)"
                                  clip-path="none" aria-hidden="true"></g>
                              </g>
                              <g class="highcharts-exporting-group" data-z-index="3" aria-hidden="true">
                                <g class="highcharts-no-tooltip highcharts-button highcharts-contextbutton"
                                  stroke-linecap="round" style="cursor: pointer;" transform="translate(773,10)">
                                  <title>Chart context menu</title>
                                  <rect fill="#ffffff" class="highcharts-button-box" x="0.5" y="0.5" width="24"
                                    height="22" rx="2" ry="2" stroke="none" stroke-width="1"></rect>
                                  <path fill="#666666" d="M 6 6.5 L 20 6.5 M 6 11.5 L 20 11.5 M 6 16.5 L 20 16.5"
                                    class="highcharts-button-symbol" data-z-index="1" stroke="#666666" stroke-width="3">
                                  </path><text x="0" data-z-index="1" y="15.5"
                                    style="color: rgb(51, 51, 51); font-weight: normal; fill: rgb(51, 51, 51);"></text>
                                </g>
                              </g><text x="404" text-anchor="middle" class="highcharts-title" data-z-index="4"
                                style="color: rgb(51, 51, 51); font-size: 18px; fill: rgb(51, 51, 51);" y="24"
                                aria-hidden="true">แผนภาพการเข้าใช้งาน</text><text x="404" text-anchor="middle"
                                class="highcharts-subtitle" data-z-index="4"
                                style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);" y="52"
                                aria-hidden="true"></text><text x="10" text-anchor="start" class="highcharts-caption"
                                data-z-index="4" style="color: rgb(102, 102, 102); fill: rgb(102, 102, 102);" y="297"
                                aria-hidden="true"></text>
                              <g class="highcharts-axis-labels highcharts-xaxis-labels" data-z-index="7"
                                aria-hidden="true"><text x="251" text-anchor="middle" transform="translate(0,0)"
                                  style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                  y="282" opacity="1">สวนยาง ฟาร์ม</text><text x="615" text-anchor="middle"
                                  transform="translate(0,0)"
                                  style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                  y="282" opacity="1">เกษตรกร สวนยาง</text></g>
                              <g class="highcharts-axis-labels highcharts-yaxis-labels" data-z-index="7"
                                aria-hidden="true"><text x="54" text-anchor="end" transform="translate(0,0)"
                                  style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                  y="267" opacity="1">0</text><text x="54" text-anchor="end" transform="translate(0,0)"
                                  style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                  y="197" opacity="1">10</text><text x="54" text-anchor="end" transform="translate(0,0)"
                                  style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                  y="127" opacity="1">20</text><text x="54" text-anchor="end" transform="translate(0,0)"
                                  style="color: rgb(102, 102, 102); cursor: default; font-size: 11px; fill: rgb(102, 102, 102);"
                                  y="57" opacity="1">30</text></g><text x="797" class="highcharts-credits"
                                text-anchor="end" data-z-index="8" y="295"
                                style="cursor: pointer; color: rgb(153, 153, 153); font-size: 9px; fill: rgb(153, 153, 153);"
                                aria-label="Chart credits: Highcharts.com" aria-hidden="false">Highcharts.com</text>
                            </svg>
                            <div aria-hidden="false" class="highcharts-a11y-proxy-container-after"
                              style="top: 0px; left: 0px; white-space: nowrap; position: absolute;">
                              <div class="highcharts-a11y-proxy-group highcharts-a11y-proxy-group-zoom"></div>
                              <div class="highcharts-a11y-proxy-group highcharts-a11y-proxy-group-chartMenu"><button
                                  class="highcharts-a11y-proxy-button highcharts-no-tooltip"
                                  aria-label="View chart menu, แผนภาพการเข้าใช้งาน" aria-expanded="false"
                                  title="Chart context menu"
                                  style="border-width: 0px; background-color: transparent; cursor: pointer; outline: none; opacity: 0.001; z-index: 999; overflow: hidden; padding: 0px; margin: 0px; display: block; position: absolute; width: 24px; height: 22px; left: 774px; top: 10px;"></button>
                              </div>
                            </div>
                          </div>
                          <div id="highcharts-screen-reader-region-after-0" aria-hidden="false"
                            style="position: relative;">
                            <div aria-hidden="false"
                              style="position: absolute; width: 1px; height: 1px; overflow: hidden; white-space: nowrap; clip: rect(1px, 1px, 1px, 1px); margin-top: -3px; opacity: 0.01;">
                              <div id="highcharts-end-of-chart-marker-0" class="highcharts-exit-anchor" tabindex="0"
                                aria-hidden="false">End of interactive chart.</div>
                            </div>
                          </div>
                        </div>
                      </figure>

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">ปิด</button>
                    </div>
                  </div>

                </div>
              </div>
              <script src="https://code.highcharts.com/highcharts.js"></script>
              <script src="https://code.highcharts.com/modules/exporting.js"></script>
              <script src="https://code.highcharts.com/modules/export-data.js"></script>
              <script src="https://code.highcharts.com/modules/accessibility.js"></script>
              <!-- /////////////////////////////////////////// chart login ////////////////////////////////////////////////////// -->
              <script type="text/javascript">
                Highcharts.chart('containerLog', {
                  chart: {
                    type: 'column'
                  },

                  title: {
                    text: 'แผนภาพการเข้าใช้งาน'
                  },

                  subtitle: {
                    text: ''
                  },

                  yAxis: {
                    title: {
                      text: 'จำนวนการเข้าระบบ'
                    }
                  },

                  xAxis: {
                    categories: ['สวนยาง ฟาร์ม', 'เกษตรกร สวนยาง']
                  },

                  legend: {
                    enabled: false
                  },





                  series: [{
                    name: 'จำนวนการเข้าระบบ : ',
                    data: [27, 1]
                  }],

                  responsive: {
                    rules: [{
                      condition: {
                        maxWidth: 500
                      },
                      chartOptions: {
                        legend: {
                          layout: 'horizontal',
                          align: 'center',
                          verticalAlign: 'bottom'
                        }
                      }
                    }]
                  }

                });
              </script>
              <!-- /////////////////////////////////////////// chart report ////////////////////////////////////////////////////// -->




              <script type="text/javascript">
                Highcharts.chart('chartreport', {
                  chart: {
                    type: 'column'
                  },
                  title: {
                    text: 'ผลการประเมิน'
                  },
                  subtitle: {
                    text: ''
                  },
                  xAxis: {
                    categories: [],
                    crosshair: true
                  },
                  yAxis: {
                    min: 0,
                    title: {
                      text: 'คะแนน'
                    }
                  },
                  tooltip: {
                    headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                    pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                      '<td style="padding:0"><b>{point.y:.1f} mm</b></td></tr>',
                    footerFormat: '</table>',
                    shared: true,
                    useHTML: true
                  },
                  plotOptions: {
                    column: {
                      pointPadding: 0.2,
                      borderWidth: 0
                    }
                  },
                  series: [{
                    name: 'ความพึงพอใจของผลผลิต',
                    data: []

                  }, {
                    name: 'ความพึงพอใจการเจริญเติบโตของพืช',
                    data: []

                  }]
                });
              </script>
              <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx end ModalLog content-->
              <script>
                for (let i = 0; i < 100; i++) {

                  $('.h-' + i.toString()).hide();

                }
                function hideddl() {

                  for (let i = 0; i < 100; i++) {

                    $('.h-' + i.toString()).hide();

                  }

                  return "";
                }
              </script>
              <script>
                var StatusWater = '2';
                var StatusFan = '2';
                var StatusAir = '2';

                var onSetWater = '2';
                var onSetFan = '2';
                var onSetAir = '2';



                if (StatusWater == '1') {
                  $('#StatusWater').attr('checked', true);
                } else {
                  $('#StatusWater').attr('checked', false);
                }
                if (StatusFan == '1') {
                  $('#StatusFan').attr('checked', true);
                } else {
                  $('#StatusFan').attr('checked', false);
                }
                if (StatusAir == '1') {
                  $('#StatusAir').attr('checked', true);
                } else {
                  $('#StatusAir').attr('checked', false);
                }

                if (onSetWater == '1') {
                  $('#onSetWater').attr('checked', true);
                } else {
                  $('#onSetWater').attr('checked', false);
                }
                if (onSetFan == '1') {
                  $('#onSetFan').attr('checked', true);
                } else {
                  $('#onSetFan').attr('checked', false);
                }
                if (onSetAir == '1') {
                  $('#onSetAir').attr('checked', true);
                } else {
                  $('#onSetAir').attr('checked', false);
                }





              </script>

              <script>

                //////////////////////////////////////////////////////////////// //switch on/off
                let submit = (id, txt) => {
                  var Elet = "";
                  var tswitch = $('.' + id + ':checked').val();
                  var tstatus = "";
                  var Pstatus = "";

                  if (tswitch == 'on') {
                    tstatus = "Bật";
                    Pstatus = "1"

                  } else {
                    tstatus = "Tắt";
                    Pstatus = "2"
                  }

                  if (id == "StatusWater") {
                    Elet = "5"
                  } else if (id == "StatusFan") {
                    Elet = "4"
                  } else {
                    Elet = "6"
                  }
                  //alert('Pstatus' + " : " + Elet);
                  //alert('FarmId' + " : " + '1');
                  //alert('LocationId' + " : " +'1');
                  //alert('status' + " : " +Pstatus);
                  if (confirm('คุณต้องการ' + tstatus + txt + ' หรือไม่')) {

                    $.ajax({
                      url: "./switch.php?switch=1",
                      type: "POST",
                      data: {
                        EletricId: Elet,
                        FarmId: '1',
                        LocationId: '1',
                        status: Pstatus
                      },
                      cache: false,
                      success: function (dataResult) {
                        var dataResult = JSON.parse(dataResult);
                        //alert(dataResult.statusCode);		
                        if (dataResult.statusCode == 200) {
                          alert("ดำเนินการสำเร็จ");


                        }
                        else {
                          alert("ไม่สามารถดำเนินการได้ !!");
                          location.reload();
                        }

                      }
                    });

                  } else {

                    location.reload();
                  }
                };
                let AddAutoTable = (Sgroup, Scondi) => {

                  if (confirm('คุณต้องการเพิ่มการตั้งค่าหรือไม่')) {

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
                          alert("ดำเนินการสำเร็จ");

                          location.reload();

                        }
                        else {
                          alert("ไม่สามารถดำเนินการได้ (**ไม่สามารถเลือกเงื่อนไขซ้ำกันในกลุ่มได้) !!");
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
                    texts = "คุณต้องการเพิ่มการตั้งค่าหรือไม่";
                  }
                  if (x == 2) {
                    texts = "คุณต้องการลบตั้งค่าหรือไม่";
                  }
                  if (x == 3) {
                    texts = "คุณต้องการแก้ไขตั้งค่าหรือไม่";
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
                          alert("ดำเนินการสำเร็จ");

                          location.reload();

                        }
                        else {
                          alert("ไม่สามารถดำเนินการได้ !!");
                          location.reload();
                        }

                      }
                    });

                  } else {

                    location.reload();
                  }
                };



                let DaySet = (Sgroup, x, Ss, tSDats) => {


                  var texts = "";

                  texts = "คุณต้องการแก้ไขตั้งค่าหรือไม่";


                  if (confirm(texts)) {

                    $.ajax({
                      url: "./DaySet.php?switch=" + x,
                      type: "POST",
                      data: {
                        FarmId: '1',
                        LocationId: '1',
                        Sgroup: Sgroup,
                        Status: Ss,
                        SDats: tSDats

                      },
                      cache: false,
                      success: function (dataResult) {
                        var dataResult = JSON.parse(dataResult);

                        if (dataResult.statusCode == 200) {
                          alert("ดำเนินการสำเร็จ");

                          location.reload();

                        }
                        else {
                          alert("ไม่สามารถดำเนินการได้ !!");
                          location.reload();
                        }

                      }
                    });

                  } else {

                    location.reload();
                  }
                };
                //////////////switch Edit set time
                let submitEdittime = (id, tstart, tend) => {



                  if (confirm('คุณต้องการแก้ไขเวลาหรือไม่')) {

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
                          alert("ดำเนินการสำเร็จ");
                          location.reload();

                        }
                        else {
                          alert("ไม่สามารถดำเนินการได้ !!");
                          location.reload();
                        }

                      }
                    });

                  } else {

                    location.reload();
                  }
                };



                /////////////////////////////////// //switch Edit set time Autooooooooooooooooooooooooo
                let submitEditAuto = (id, txt) => {

                  var tStart = $('#SAuto' + id).val();
                  var tEnd = $('#EAuto' + id).val();
                  var tAllId = $('#arrid' + id).val();
                  if (confirm('คุณต้องการแก้ไขเวลาหรือไม่')) {

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
                          alert("ดำเนินการสำเร็จ");
                          location.reload();

                        }
                        else {
                          alert("ไม่สามารถดำเนินการได้ !!");
                          location.reload();
                        }

                      }
                    });

                  } else {

                    location.reload();
                  }
                };
                /////////////////////////////////// //switch del set time Autooooooooooooooooooooooooo
                let submitDelAuto = (id, txt) => {


                  var tAllId = $('#arrid' + id).val();
                  if (confirm('คุณต้องการลบการตั้งค่าหรือไม่')) {

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
                          alert("ดำเนินการสำเร็จ");
                          location.reload();

                        }
                        else {
                          alert("ไม่สามารถดำเนินการได้ !!");
                          location.reload();
                        }

                      }
                    });

                  } else {

                    location.reload();
                  }
                };
                /////////////////////////////////// //switch Edit switch Autooooooooooooooooooooooooo
                let submitEditSwitchAuto = (id, txt) => {


                  var tAllId = $('#arrid' + id).val();


                  var tswitch = $('.onoff' + id + ':checked').val();
                  if (tswitch == 'on') {
                    tstatus = "เปิดการใช้งาน";
                    Pstatus = "1"

                  } else {
                    tstatus = "ปิดการใช้งาน";
                    Pstatus = "2"
                  }




                  if (confirm('คุณต้องการ' + tstatus + 'หรือไม่')) {

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
                          alert("ดำเนินการสำเร็จ");
                          location.reload();

                        }
                        else {
                          alert("ไม่สามารถดำเนินการได้ !!");
                          location.reload();
                        }

                      }
                    });

                  } else {

                    location.reload();
                  }

                };



                /////////////////////////////////// //switch Edit switch Electric Autooooooooooooooooooooooooo
                let submitEditElectricAuto = (id, txt, vals) => {

                  //alert(id);
                  //alert(txt);
                  //alert(vals);


                  if (vals == '') {
                    tstatus = "เปิดการใช้งาน";
                    Pstatus = "1";

                  } else {
                    tstatus = "ปิดการใช้งาน";
                    Pstatus = "2";
                  }

                  //  alert('คุณต้องการ' + tstatus + 'หรือไม่');


                  if (confirm('คุณต้องการ' + tstatus + 'หรือไม่')) {

                    $.ajax({
                      url: "./switchAuto.php?switch=3",
                      type: "POST",
                      data: {
                        tAllId: txt,
                        status: Pstatus
                      },
                      cache: false,
                      success: function (dataResult) {
                        var dataResult = JSON.parse(dataResult);

                        if (dataResult.statusCode == 200) {
                          alert("ดำเนินการสำเร็จ");
                          location.reload();

                        }
                        else {
                          alert("ไม่สามารถดำเนินการได้ !!");
                          location.reload();
                        }

                      }
                    });

                  } else {

                    location.reload();
                  }

                };


                let submitReport = () => {


                  if (confirm('คุณต้องการส่งแบบประเมินหรือไม่')) {

                    $.ajax({
                      url: "./saveReport.php",
                      type: "POST",
                      data: {
                        FarmId: $('#refarm').val(),
                        LocationId: '1',
                        sDate: $('#redate').val(),
                        tname: $('#rename').val(),
                        ScoreProduct: ($('#rePro').val()),
                        ScoreGrow: ($('#regrow').val())
                      },
                      cache: false,
                      success: function (dataResult) {

                        var dataResult = JSON.parse(dataResult);

                        if (dataResult.statusCode == 200) {
                          alert("ดำเนินการสำเร็จ");
                          $('#rePro').val(0);
                          $('#regrow').val(0);
                          $('#redate').val("");
                          $('#refarm').val("");

                          location.reload();

                        } else {
                          alert("ไม่สามารถดำเนินการได้ !!");
                          location.reload();
                        }

                      }
                    });

                  } else {

                    location.reload();
                  }
                };

              </script>
              <!-- <script>
                /*
                        function init() {
                          var map = new longdo.Map({
                            placeholder: document.getElementById('map')
                          });
                          map = new longdo.Map({
                            placeholder: document.getElementById('map')
                          });
                          map.location({ lon:100.06400299072266, lat:15.14680004119873 }, true); // go to 100, 16 when created map
                          map.zoom(20, true);
                        }
                        */
              </script> -->


              <!-- <script>


                var tapon = '';
                if (tapon == 'TapSTATUS') {
                  $('.TapSTATUS').show();
                }
                if (tapon == 'TapControl') {
                  $('.TapControl').show();
                }
                if (tapon == 'TapAuto') {
                  $('.TapAuto').show();
                }
                if (tapon == 'TapExport') {
                  $('.TapExport').show();
                }
                if (tapon == '') {
                  $('.TapSTATUS').show();
                }
         // alert(tapon);

              </script> -->


            </b></b></b>
      </b></b></b><!-- Code injected by live-server -->
  <script>
    // <![CDATA[  <-- For SVG support
    if ('WebSocket' in window) {
      (function () {
        function refreshCSS() {
          var sheets = [].slice.call(document.getElementsByTagName("link"));
          var head = document.getElementsByTagName("head")[0];
          for (var i = 0; i < sheets.length; ++i) {
            var elem = sheets[i];
            var parent = elem.parentElement || head;
            parent.removeChild(elem);
            var rel = elem.rel;
            if (elem.href && typeof rel != "string" || rel.length == 0 || rel.toLowerCase() == "stylesheet") {
              var url = elem.href.replace(/(&|\?)_cacheOverride=\d+/, '');
              elem.href = url + (url.indexOf('?') >= 0 ? '&' : '?') + '_cacheOverride=' + (new Date().valueOf());
            }
            parent.appendChild(elem);
          }
        }
        var protocol = window.location.protocol === 'http:' ? 'ws://' : 'wss://';
        var address = protocol + window.location.host + window.location.pathname + '/ws';
        var socket = new WebSocket(address);
        socket.onmessage = function (msg) {
          if (msg.data == 'reload') window.location.reload();
          else if (msg.data == 'refreshcss') refreshCSS();
        };
        if (sessionStorage && !sessionStorage.getItem('IsThisFirstTime_Log_From_LiveServer')) {
          console.log('Live reload enabled.');
          sessionStorage.setItem('IsThisFirstTime_Log_From_LiveServer', true);
        }
      })();
    }
    else {
      console.error('Upgrade your browser. This Browser is NOT supported WebSocket for Live-Reloading.');
    }
	// ]]>
  </script>
</body>

</html>