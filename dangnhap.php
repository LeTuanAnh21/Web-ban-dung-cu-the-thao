<?php
include "host.php";
include "session.php";
?>

<?php
        if (isset($_POST['btn-dangnhap'])) {
          $taikhoan = $_POST['dn'];
          $matkhau = $_POST['mk'];
          $sql =  "SELECT * FROM `nhanvien` WHERE nv_taikhoan = '$taikhoan' and nv_matkhau = '$matkhau'";
          $query = mysqli_query($conn, $sql);
          $checkdn = mysqli_num_rows($query);
          if ($checkdn == 1) {
            if ($checkmk = $matkhau) {
              $nguoidung = mysqli_fetch_array($query);
              $_SESSION['taikhoan'] = $nguoidung;
              echo '<script>alert("ĐĂNG NHẬP TÀI KHOẢN THÀNH CÔNG");</script>';
              echo ' <script>window.location.href = "giaodien.php";</script>';
            } else{
              $err['mk'] = 'Bạn Chưa Nhập Mật khẩu không đúng';
            }
          } else {
            $err['dn'] = 'Tài khoản không tồn tại';
            $err['mk'] = 'Bạn Chưa Nhập Mật khẩu không đúng';
          }
        }
        ?>

<body class="bg3">
  <div class="container m-2">
    <div class="container-fluid m-5 ">
      <!--Phần đăng nhập-->
      <div class="container-fluid row b-0 m-0 p-0">
        <!--form đăng nhập-->
        
        <div class="col-4">
          <!-- chia cột làm 4-->
        </div>
        <div class="col-4">
          <form action="" method="POST">
            <br>
            <div class="form-group ">
              <!--form đăng nhập-->
              <h1 class=" text-center chu">ADMIN SPORT STORE</b> </h1>
              <br>
              <form>
                <div class="form-group">
                  <label for="exampleInputEmail1"> Đăng nhập </label>
                  <input name="dn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 450px;">
                  <small class="form-text text-muted">Nhập đúng tên đăng nhập để vào hệ thống.</small>
                  <div class="error text-danger">
                    <span> <?php echo (isset($err['dn'])) ? $err['dn'] : '' ?></span>
                  </div>
                </div>
                <br>
                <div class="form-group">
                  <label for="exampleInputPassword1">Mật khẩu</label>
                  <input name="mk" type="password" class="form-control" id="exampleInputPassword1" style="width: 450px;">
                  <small class="form-text text-muted">Nhập đúng tên mật khẩu để vào hệ thống.</small>
                  <div class="error text-danger">
                    <span> <?php echo (isset($err['mk'])) ? $err['mk'] : '' ?></span>
                  </div>
                </div>
                <div class="form-group form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Lưu mật khẩu</label>
                </div>
                <button name="btn-dangnhap" type="submit" class="btn nen text-white bg2" style="width: 450px;"><b>Đăng nhập</b></button>
                <br>
                <br>

              </form>
            </div>
        </div>
      
      </div>
    </div>
  </div>


</body>