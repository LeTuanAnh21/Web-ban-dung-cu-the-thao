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
       <h1 class="text-center text-danger">QUẢN LÝ THÔNG TIN CÁ NHÂN</h1>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <?php
            $id = $nguoidung['nv_ma'];
            $sql = "SELECT * FROM `nhanvien` WHERE nv_ma = '$id'";
            $query =mysqli_query($conn,$sql);
            while ($row = mysqli_fetch_array($query)){?>
            <div class="form-group ">
                    <!--form đăng nhập-->
                    <br>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input hidden name="id" type="text" class="form-control" value="<?php echo $row['nv_ma']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Họ Và Tên Nhân Viên</b> </label>
                            <input name="hoten" style="width:500px;" type="text" class="form-control" value="<?php echo $row['nv_hoten']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Giới Tính</b> </label>
                            <input name="gioitinh" style="width:500px;" type="text" class="form-control" value="<?php echo $row['nv_gioitinh']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Địa Chỉ</b> </label>
                            <input name="diachi" style="width:500px;" type="text" class="form-control" value="<?php echo $row['nv_diachi']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Số Điện Thoại Liên Lạc </b> </label>
                            <input name="sdt" style="width:500px;" type="text" class="form-control" value="<?php echo $row['nv_sdt']; ?>">
                        </div>
                        <div class="form-group" disabled>
                            <label for="exampleInputEmail1"> <b>Chức vụ </b> </label>
                            <input name="chuc" style="width:500px;" type="text" class="form-control" value="<?php echo $row['nv_chucvu']; ?>" disabled>
                        </div>
                        <br>
                        <button name="bt_tt" type="submit" class="btn btn-primary bg-primary">Lưu thông tin</button>
                        <!--bottom-->
                        <a href="giaodien.php" type="button" class="btn btn-primary bg-primary"> Quay trở lại</a>
                        <br>
                </div>
            <?php }
            ?>
            <?php
if (isset($_POST['bt_tt'])) {
    $diachi = $_POST['diachi'];
    $hoten = $_POST['hoten'];
    $sdt = $_POST['sdt'];
    $gt = $_POST['gioitinh'];
    $id = $nguoidung['msnv'];
    $sql = "UPDATE `nhanvien` SET `nv_ma`='$id',`nv_hoten`='$hoten',`nv_diachi`='$diachi',nv_`sdt`='$sdt',`nv_gioitinh`='$gt' WHERE nv_ma = '$id' ";
    
    $query = mysqli_query($conn, $sql);
    echo '<script>alert("Sửa Thông Tin Thành Công");</script>';
        echo ' <script>window.location.href = "thongtin.php";</script>';
}
?>


        </div>
        <div class="col"></div>
    </div>
    
   </div>

</body>