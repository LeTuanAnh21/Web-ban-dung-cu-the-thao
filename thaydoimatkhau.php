<?php
include 'host.php';
include 'session.php';
?>
<style>
    .bg3 {
        background-color: rgb(212, 230, 233);
    }
</style>

<body class="bg3" style="margin-top:70px;">
    <?php include 'vientren.php' ?>
    <div class="container">
       <h1 class="text-center text-danger">THAY ĐỔI MẬT KHẨU</h1>
    <div class="row">
        <div class="col"></div>
        <div class="col">
<?php
$id = $nguoidung['nv_ma'];
$sql = "SELECT * FROM `nhanvien` WHERE nv_ma = '$id'";
$query=mysqli_query($conn,$sql);
while ($row=mysqli_fetch_array($query)){?> 
  <div class="container">
            <div class="form-group ">
                <!--form đăng nhập-->
                <br>
                <form action="" method="POST">
                    <div class="form-group">
                        <input hidden name="id" type="text" class="form-control" value="<?php echo $ten['nv_ma ']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <b>Nhập mật khẩu hiện tại </b> </label>
                        <input name="mk" style="width:500px;" type="password" class="form-control">
                        <div class="error text-danger">
                            <span> <?php echo (isset($err['mk'])) ? $err['mk'] : '' ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <b>Mật khẩu mới</b> </label>
                        <input name="mkm" style="width:500px;" type="password" class="form-control">
                        <div class="error text-danger">
                            <span> <?php echo (isset($err['mkm'])) ? $err['mkm'] : '' ?></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> <b>Nhập lại mật khẩu mới </b> </label>
                        <input name="nhaplai" style="width:500px;" type="password" class="form-control">
                        <div class="error text-danger">
                            <span> <?php echo (isset($err['nhaplai'])) ? $err['nhaplai'] : '' ?></span>
                        </div>
                    </div>
                    <br>
                    <button name="bt_mk" type="submit" class="btn btn-primary bg-primary">Thay Đổi Mật Khẩu</button>
                    <!--bottom-->
                    <a href="thongtincanhan.php" type="button" class="btn btn-primary bg-primary"> Quay trở lại</a>
                    <br>
            </div>
        </div>
<?php }

?>
<?php
if (isset($_POST['bt_mk'])) {
    $id = $nguoidung['mstk'];
    $matkhau = $_POST['mk'];
    $mkm = $_POST['mkm'];
    $nhaplai = $_POST['nhaplai'];
    $sql =  "SELECT * FROM `nhanvien` WHERE nv_ma ='$id'  and nv_matkhau = '$matkhau'";
    $query = mysqli_query($conn, $sql);
    $checkmk = mysqli_num_rows($query);
    if ($checkmk == 1) {
        $sql_mk = "UPDATE `nhanvien` SET `nv_matkhau`='$mkm' WHERE nv_ma = $id";
        $query_mk = mysqli_query($conn, $sql_mk);
        echo '<script>alert("THAY ĐỔI MẬT KHẨU THÀNH CÔNG...VUI LÒNG ĐĂNG NHẬP LẠI HỆ THỐNG");</script>';
        echo ' <script>window.location.href = "dangnhap.php";</script>';
    } else {
        echo '<script>alert("NHẬP SAI MẬT KHẨU HIỆN TẠI");</script>';
        echo ' <script>window.location.href = "thaydoimatkhau.php";</script>';
    }
}
?>

        </div>
        <div class="col"></div>
    </div>
</body>