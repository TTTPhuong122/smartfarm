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
                <font style="vertical-align: inherit;">Thông tin trang trại</font>
              </font>
            </a>
          </li>

          <li>
            <u><b><a href="#">
                  <font style="vertical-align: inherit;">
                    <font style="vertical-align: inherit;">Vườn cây thông minh</font>
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
          <!-- //////////////////////////////////////////////  End Modal run location (in lop) ////////////////////////////////////////////////////-->
          <li>
            <a href="./status.php">
              <span class="glyphicon glyphicon-arrow-right"> </span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Trạng thái</font>
              </font>
            </a>
          </li>
          <li>
            <a href="./control.php">
              <span class="glyphicon glyphicon-arrow-right"> </span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Điều khiển</font>
              </font>
            </a>
          </li>
          <li>
            <a href="./system.php">
              <span class="glyphicon glyphicon-arrow-right"> </span>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Cài đặt hệ thống</font>
              </font>
            </a>
          </li>
        </ul>
      </div>
        <!-- ################################################################################## -->
      <div class="col-sm-10">
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
      </div>
    </div>
    </div>
  </div>
  
</body>
</html>