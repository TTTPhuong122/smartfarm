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
                require("config/database.php");
                require("config/helper.php");
                session_start();
                $id_user = $_SESSION['id_user'];
                $data = get_one('system', 'name_system', 'id_user', $id_user);
                echo $data['name_system'] ?? '';
                
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
              echo $_SESSION['user_name'] ?? '';
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
            <a href="NhanDienSauBenh.php">
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
            <a href="./status.php" >
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Trạng thái</font>
              </font>
            </a>
          </li>

          <li class="active">
            <a href="./control.php">
              <font style="vertical-align: inherit;">
                <font style="vertical-align: inherit;">Điều khiển</font>
              </font>
            </a>
          </li>

          <li class="active">
            <a href="./system.php">
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
                          $id_user = $_SESSION['id_user'];
                          $data = get_one('user', 'user_name', 'id_user', $id_user);
                          echo $data['user_name'] ?? '';
                          
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
                            $id_user = $_SESSION['id_user'];
                            $data = get_one('user', 'address', 'id_user', $id_user);
                            echo $data['address'] ?? '';
                            
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
                                  $id_user = $_SESSION['id_user'];
                                  $data = get_one('user', 'phone', 'id_user', $id_user);
                                  echo $data['phone'] ?? '';
                                  
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
                                    $id_user = $_SESSION['id_user'];
                                    $data = get_one('system', 'name_system', 'id_user', $id_user);
                                    echo $data['name_system'] ?? '';
                                    
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
    tstatus = "เปิด";
    Pstatus = "1"

  } else {
    tstatus = "ปิด";
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
  
</body>
</html>