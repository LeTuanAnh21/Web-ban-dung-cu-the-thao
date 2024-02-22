<?php
include "host.php";
include "session.php";
?>
<body class="bg3" style="margin-top:70px;">
    <?php
    include "vientren.php";
    ?>
    <br>
    <h1 class="text-center text-danger"> QUẢN LÝ KHÁCH HÀNG </h1>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="">
                <th class="bg-primary text-white text-center">STT</th>
                <th class="bg-primary text-white text-center">Tài Khoản </th>
                <th class="bg-primary text-white text-center">Mật Khẩu </th>
                <th class="bg-primary text-white text-center">Họ tên </th>
                <th class="bg-primary text-white text-center">Địa chỉ </th>
                <th class="bg-primary text-white text-center">Số điện thoại </th>
                <th class="bg-primary text-white text-center">Giới tính</th>
                <th class="bg-primary text-white text-center"> Xóa </th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM `taikhoan` WHERE 1";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
            echo '
                <tr>
                <th>' . $row['tk_id'] . '</th>
                <th>' . $row['dangnhap'] . '</th>
                <th>' . $row['matkhau'] . '</th>
                <th>' . $row['tennguoidung'] . '</th>
                <th>' . $row['diachi'] . '</th>
                <th>' . $row['sdt'] . '</th>
                <th>' . $row['gioitinh'] .'</th>
                <th class="text-center"> <a href= "?x_nd=' . $row['tennguoidung'] . '"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                   <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                   </svg>
                </a></th>

                </tr>   
                ';
        }
        ?>

    <?php
    if (isset($_GET['x_nd']) && !empty($_GET['x_nd'])) {
        $id = $_GET['x_nd'];
        $sql = "DELETE FROM `taikhoan` WHERE tennguoidung = '$id' ";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Xóa Thông Tin thành công");</script>';
        echo ' <script>window.location.href = "sql_khachhang.php";</script>';
    }
    ?>



    </table>
    
</body>