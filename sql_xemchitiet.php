<?php include "host.php";
include "session.php";
?>

<style>
    .bg3 {
        background-color: rgb(212, 230, 233);
    }

    .khung {
        border: 1px solid blue;
    }
    .vien1{
    border-top: 2px solid rgba(27, 47, 230, 0.877);
}
    
</style>

<body class="bg3" style="margin-top:70px;">
<?php
    include "vientren.php";
    ?>
    <h1 class="text-danger text-center"> CHI TIẾT ĐƠN HÀNG </h1>
    <br><br>
    <div class="container">
        <?php
        if (isset($_GET['chitiet'])) {
            $id_gio = $_GET['chitiet'];
            $id = $nguoidung['nv_ma'];
            $sql = "SELECT * FROM `giohang` WHERE id = '$id_gio'";
            $query = mysqli_query($conn, $sql);
            while ($row = mysqli_fetch_array($query)) {
                $msx = $row['sp_ma'];
                $ten = $row['tk_id'];
                $nhanvien = $row['nv_ma'];
                $msx = $row['sp_ma'];
                $diachi = $row['diachi_id'];
                $sql_xe = "SELECT * FROM `sanpham` WHERE sp_ma = '$msx'";
                $query_xe = mysqli_query($conn, $sql_xe);
                while ($xe = mysqli_fetch_array($query_xe)) {
                    $sql_ten = "SELECT * FROM `taikhoan` WHERE tk_id = '$ten'";
                    $query_ten = mysqli_query($conn, $sql_ten);
                    while ($ten = mysqli_fetch_array($query_ten)) {
                        $sql_diachi = "SELECT * FROM `diachi` WHERE diachi_id ='$diachi'";
                        $query_diachi = mysqli_query($conn, $sql_diachi);
                        while ($diachi = mysqli_fetch_array($query_diachi)) {
                            $tinh = $diachi['ttp_ma'];
                            $xa = $diachi['px_ma'];
                            $quan = $diachi['qh_ma'];
                            $sql_xa = "SELECT * FROM `vn_phuongxa` WHERE px_ma = '$xa'";
                            $query_xa = mysqli_query($conn, $sql_xa);
                            while ($xa = mysqli_fetch_array($query_xa)) {
                                $sql_quan = "SELECT * FROM `vn_quanhuyen` WHERE qh_ma = '$quan'";
                                $query_quan = mysqli_query($conn, $sql_quan);
                                while ($quan = mysqli_fetch_array($query_quan)) {

                                    $sql_thanhpho = "SELECT * FROM `vn_tinhthanhpho` WHERE ttp_ma = $tinh";
                                    $query_thanhpho = mysqli_query($conn, $sql_thanhpho);
                                    while ($thanhpho = mysqli_fetch_array($query_thanhpho)) {
                                        $sql_nhanvien = "SELECT * FROM `nhanvien` WHERE nv_ma = $nhanvien";
                                        $query_nhanvien = mysqli_query($conn, $sql_nhanvien);
                                        while ($id_nhanvien = mysqli_fetch_array($query_nhanvien)) {
                                            $sql_xe = "SELECT * FROM `sanpham` WHERE sp_ma = '$msx'";
                                            $query_xe = mysqli_query($conn, $sql_xe);
                                            while ($xe = mysqli_fetch_array($query_xe)) {



        ?>
                                                <div class="row">
                                                    <div class="col">
                                                        <p><b>Mã đơn hàng: </b><?php echo $row['giohang_id'] ?></p>
                                                        <p><b>Tên Nhân Viên Phụ Trách: </b><?php echo $id_nhanvien['nv_hoten'] ?></p>
                                                        <p><b>Tên khách hàng: </b><?php echo $ten['tennguoidung'] ?></p>
                                                        <p><b>Giới Tính: </b><?php echo $ten['nv_gioitinh'] ?></p>
                                                        <p><b>Địa chỉ cư trú: </b><?php echo $ten['nv_diachi'] ?></p>
                                                    </div>
                                                    <div class="col">
                                                        <p><b>Số điện thoại liên lạc: </b><?php echo $ten['sdt'] ?></p>
                                                        <p><b>Địa chỉ giao hàng: </b><?php echo $diachi['diachicuthe'] ?></p>
                                                        <p><b>Phường Xã: </b><?php echo $xa['px_ten'] ?></p>
                                                        <p><b>Quận huyện: </b><?php echo $quan['qh_ten'] ?></p>
                                                        <p><b>Tỉnh thành phố: </b><?php echo $thanhpho['ttp_ten'] ?></p>
                                                    </div>

                                                </div>
                                                <div class="container">
                                                    <table class="table table-hover table-bordered">
                                                        <tr class="bg-primary text-white">
                                                            <th>Mã đơn hàng </th>
                                                            <th>Tên sản phẩm </th>
                                                            <th>Hình ảnh </th>
                                                            <th>Giá tiền </th>
                                                            <th> Trạng thái đơn hàng </th>
                                                            <th>Ngày đặt </th>
                                                            <th>Ngày giao hàng </th>

                                                        </tr>
                                                        <tr>
                                                            <th><?php echo $row['giohang_id'] ?> </th>
                                                            <th><?php echo $xe['sp_ten'] ?> </th>
                                                            <th><img src="img/<?php echo $xe['sp_hinhanh'] ?>" style="width:200px; height:200px;" </th>
                                                            <th><?php echo $row['tongtien'] ?> </th>
                                                            <th><?php echo $row['trangthai'] ?> </th>
                                                            <th><?php echo $row['ngaydat'] ?></th>
                                                            <th><?php echo $row['ngaygiao'] ?></th>
                                                        </tr>
                                                    </table>



            <?php }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
            ?>
                                                </div>
<div class="container">
    <a href="giaodien.php" class="btn btn-danger">Quay về trang chủ</a>
</div>
</body>