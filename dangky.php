<?php include './connect_db.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký tài khoản</title>
    <script src="vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.js"></script>
    <script src="giaodien.jss"></script>
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css" type="text/css">
   
</head>

</head>

<body>
    
<br>
    <?php
    if (isset($_POST['btn-dangky'])) {
        $hoten = $_POST['ht'];
        $dangnhap = $_POST['dn'];
        $matkhau = $_POST['mk'];
        $nhaplai = $_POST['rmk'];

        if (empty($hoten)) {
            $err['ht'] = 'Bạn chưa nhập tên';
        }
        if (empty($dangnhap)) {
            $err['dn'] = 'Bạn chưa nhập tên đăng nhập';
        }
        if (empty($matkhau)) {
            $err['mk'] = 'Bạn chưa nhập mật khẩu';
        }
        if ($matkhau != $nhaplai) {
            $err['rmk'] = 'Vui lòng xác nhận lại mật khẩu cho đúng';
        }
        if (empty($err)) {
            $sql = "INSERT INTO `taikhoan`(`tk_id`, `dangnhap`, `matkhau`, `tennguoidung`, `diachi`, `chucvu`, `sdt`, `gioitinh`) VALUES ('','$dangnhap','$matkhau','$hoten','','','','')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<script>alert("ĐĂNG KÍ TÀI KHOẢN THÀNH CÔNG");</script>';
                echo ' <script>window.location.href = "./dangnhap.php";</script>';
            }
        }
    }
    ?>
    <h1 class="text-center text-danger"> ĐĂNG KÍ TÀI KHOẢN</h1>
    <br>
    <div class="row">
        <div class="col-4"> </div>

        <div class="col-4">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên khách hàng</label>
                    <input name="ht" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
               
                    <div class="error text-danger">
                        <span> <?php echo (isset($err['ht'])) ? $err['ht'] : '' ?></span>
                    </div>

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Tên đăng nhập</label>
                    <input name="dn" class="form-control" id="exampleInputPassword1">
                
                    <div class="error text-danger">
                        <span> <?php echo (isset($err['dn'])) ? $err['dn'] : '' ?></span>
                    </div>


                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Mật khẩu</label>
                    <input name="mk" type="password" class="form-control" id="exampleInputPassword1">
                 
                    <div class="error text-danger">
                        <span> <?php echo (isset($err['mk'])) ? $err['mk'] : '' ?></span>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nhập lại mật khẩu</label>
                    <input name="rmk" type="password" class="form-control" id="exampleInputPassword1">

                    <div class="error text-danger">
                        <span> <?php echo (isset($err['rmk'])) ? $err['rmk'] : '' ?></span>
                    </div>

                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Tôi đồng ý với điều khoản của hệ thống</label>
                </div>
                <button name="btn-dangky" type="submit" style = "width: 100%;"class="btn btn-primary text-center nen dn"><b> ĐĂNG KÍ </b></button>
                <br>
                <br>
                <a type="submit" class="btn text-primary nen dn" style = "width: 100%;" href="./dangnhap.php"><b>ĐĂNG NHẬP<b> </a>

            </form>
        </div>
        <div class="col-4">
        </div>
    </div>
    <br>

</body>
</html>

    
   