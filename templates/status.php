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
      <!-- //////////////////////////////////////////////  Modal run location (in lop) ////////////////////////////////////////////////////-->

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
                          Nhiệt độ không khí: 
                          <span id="humidity"></span> 
                          <script>
                              // Lấy dữ liệu ban đầu
                              getData();
                              // Sau mỗi 5 giây lấy dữ liệu mới nhất
                              setInterval(getData, 5000);

                              function getData() {
                                  $.ajax({
                                      url: 'get_data_status.php',
                                      type: 'GET',
                                      dataType: 'json',
                                      success: function(data) {
                                          $('#humidity').html(data.humidity);
                                      },
                                      error: function() {
                                          console.log('Lỗi khi lấy dữ liệu');
                                      }
                                  });
                              }
                          </script>
                           C
                        
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
                            Độ ẩm của đất:
                            <span id="temparature"></span> 
                            <script>
                              // Lấy dữ liệu ban đầu
                              getData();
                              // Sau mỗi 5 giây lấy dữ liệu mới nhất
                              setInterval(getData, 5000);

                              function getData() {
                                  $.ajax({
                                      url: 'get_data_status.php',
                                      type: 'GET',
                                      dataType: 'json',
                                      success: function(data) {
                                          $('#temparature').html(data.temparature);
                                      },
                                      error: function() {
                                          console.log('Lỗi khi lấy dữ liệu');
                                      }
                                  });
                              }
                          </script>
                            %
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
                        Cường độ sáng: 
                        <span id="light"></span> 
                            <script>
                              // Lấy dữ liệu ban đầu
                              getData();
                              // Sau mỗi 5 giây lấy dữ liệu mới nhất
                              setInterval(getData, 5000);

                              function getData() {
                                  $.ajax({
                                      url: 'get_data_status.php',
                                      type: 'GET',
                                      dataType: 'json',
                                      success: function(data) {
                                          $('#light').html(data.light);
                                      },
                                      error: function() {
                                          console.log('Lỗi khi lấy dữ liệu');
                                      }
                                  });
                              }
                          </script>
                         Lux
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
        <!-- <script>
        var tapon = '';
        if (tapon == 'TapSTATUS') {
            $('.TapSTATUS').show();
        }
        else if (tapon == 'TapControl') {
            $('.TapControl').show();
        }
        else if (tapon == 'TapAuto') {
            $('.TapAuto').show();
        }
        else if (tapon == 'TapExport') {
            $('.TapExport').show();
        }
        else if (tapon == '') {
            $('.TapSTATUS').show();
        }
        alert(tapon);

    </script> -->

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
                                    
                                    ?></font>
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
  <script src="./js.firebase.js"></script>
  
</body>
</html>