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
$data1 = $db->retrieve("user");
$data1 = json_decode($data1,1);
if(is_array($data1)){
  foreach($data1 as $system){
    if($system['user_id']==$id){
      $data1 = $system;
      break;
    }
  }
}
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
        <div class="container-fluid TapControl" style="">
          <h2 class="alert alert-info">
            <small>
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Điều khiển</font>
              </font>
            </small>
          </h2>
          <h6 style="color:red;"> Nếu kích hoạt bơm nước, quạt, phun sương một trong hai hệ thống
            "Thiết lập thời gian làm việc" và "Thiết lập tự động hóa" sẽ không hoạt động. </h6>
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
                    onchange="submit('StatusFan','Quạt')">
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
    </div>
    </div>
  </div>
  <script type="text/javascript">
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
    tstatus = "bật ";
    Pstatus = "1"

  } else {
    tstatus = "tắt ";
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
  if (confirm('Bạn muốn ' + tstatus + txt + ' ?')) {

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
          alert("Thực hiện thành công!!!");


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

</script>
  
</body>
</html>