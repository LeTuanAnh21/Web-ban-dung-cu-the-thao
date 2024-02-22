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

    .vien1 {
        border-top: 2px solid rgba(27, 47, 230, 0.877);
    }
</style>

<body class="bg3" style="margin-top:70px;">
    <?php
    include "vientren.php";
    ?>
    <br>
    <h1 class="text-center text-danger"> QUẢN LÝ NHÂN VIÊN </h1>
    <div class="container">
        <form action="" method="POST">
            <div class="input-group mb-3">
                <a href="?them" class="btn btn-primary" type="submit" style="width:200px;">Cấp Tài Khoản Mới </a>

            </div>
        </form>
    </div>
    <table class="table table-bordered table-hover">
        <thead>
            <tr class="">
                <th class="bg-primary text-white text-center">Mã NV</th>
                <th class="bg-primary text-white text-center">Tài khoản </th>
                <th class="bg-primary text-white text-center">Mật khẩu </th>
                <th class="bg-primary text-white text-center">Họ tên </th>
                <th class="bg-primary text-white text-center">Giới tính </th>
                <th class="bg-primary text-white text-center">Số điện thoại </th>
                <th class="bg-primary text-white text-center">Địa chỉ </th>
                <th class="bg-primary text-white text-center">Chức vụ </th>


                <th class="bg-primary text-white text-center"> Xóa </th>
            </tr>
        </thead>
        <?php
        $sql = "SELECT * FROM `nhanvien` WHERE 1";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
            echo '
                <tr>
                <th>' . $row['nv_ma'] . '</th>
                <th>' . $row['nv_taikhoan'] . '</th>
                <th>' . $row['nv_matkhau'] . '</th>
                <th>' . $row['nv_hoten'] . '</th>
                <th>' . $row['nv_diachi'] . '</th>
                <th>' . $row['nv_chucvu'] . '</th>
                <th>' . $row['nv_sdt'] . '</th>
                <th>' . $row['nv_gioitinh'] . '</th>
                <th class="text-center"> <a href= "?x_nv=' . $row['nv_ma'] . '"> 
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                   <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                   </svg>
                </a></th>

                </tr>   
                ';
        }
        ?>
    </table>
    <?php
    if (isset($_GET['x_nv']) && !empty($_GET['x_nv'])) {
        $id = $_GET['x_nv'];
        $sql = "DELETE FROM `nhanvien` WHERE nv_ma = '$id'";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Xóa thông tin thành công");</script>';
        echo ' <script>window.location.href = "sql_nhanvien.php";</script>';
    }
    ?>
    <?php
    if (isset($_POST['btn-dangky'])) {
        $ma = $_POST['ma'];
        $hoten = $_POST['ht'];
        $dangnhap = $_POST['dn'];
        $matkhau = $_POST['mk'];
        $nhaplai = $_POST['rmk'];
        $gioitinh = $_POST['gt'];
        $chucvu = $_POST['cv'];
        $diachi = $_POST['dc'];
        $sdt = $_POST['sdt'];

        if (empty($ma)){
            $err['ma'] = 'Bạn chưa nhập mã nhân viên';
        }
        if (empty($hoten)) {
            $err['ht'] = 'Bạn chưa nhập tên';
        }
        if (empty($diachi)){
            $err['dc'] = 'Bạn chưa nhập địa chỉ';
        }
        if (empty($dangnhap)) {
            $err['dn'] = 'Bạn chưa nhập tên đăng nhập';
        }
        if (empty($chucvu)) {
            $err['cv'] = 'Bạn cần thêm chức vụ';
        }
        if (empty($sdt)) {
            $err['sdt'] = 'Bạn cần thêm số điện thoại';
        }
        if (empty($gioitinh)) {
            $err['gt'] = 'Bạn chưa nhập giới tính';
        }
        if (empty($matkhau)) {
            $err['mk'] = 'Bạn chưa nhập mật khẩu';
        }
        if (empty($nhaplai)) {
            $err['rmk'] = 'Bạn chưa xác nhận mật khẩu';
        }
        if ($matkhau != $nhaplai) {
            $err['rmk'] = 'Vui lòng xác nhận lại mật khẩu cho đúng';
        }
        if (empty($err)) {
            $sql = "INSERT INTO `nhanvien`(`nv_ma`, `nv_taikhoan`, `nv_matkhau`, `nv_hoten`, `nv_diachi`, `nv_chucvu`, `nv_sdt`, `nv_gioitinh`) VALUES ('$ma','$dangnhap','$matkhau','$hoten','$diachi','$chucvu','$sdt','$gioitinh')";
            $query = mysqli_query($conn, $sql);
            if ($query) {
                echo '<script>alert("ĐĂNG KÍ TÀI KHOẢN THÀNH CÔNG");</script>';
                echo ' <script>window.location.href = "sql_nhanvien.php";</script>';
            }
        }
    }
    ?>
    
    
    <?php
    if (isset($_GET['them'])) { ?>
    
        <div class="jumbotron khung bg-white" style="position: fixed; top: -30; z-index: 9999; margin: 90px; height:490px; width:1000px;">
            <h1 class="text-danger " align="center"> <b>CẤP TÀI KHOẢN NHÂN VIÊN</b> </h1>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã nhân viên</label>
                                    <input name="ma" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['ma'])) ? $err['ma'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nhân viên</label>
                                    <input name="ht" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['ht'])) ? $err['ht'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group" class="width:100%;">
                                    <label for="exampleInputPassword1">Giới Tính</label>
                                    <input name="gt" type="text" class="form-control" id="exampleInputPassword1" >
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['gt'])) ? $err['gt'] : '' ?></span>
                                    </div>
                              

                                 </div>
                            </div>


                            <div class="col">
                                <div class="form-group">
                                        <label for="exampleInputPassword1">Địa chỉ</label>
                                        <input name="dc" class="form-control" id="exampleInputPassword1">
                        
                                        <div class="error text-danger">
                                            <span> <?php echo (isset($err['dc'])) ? $err['dc'] : '' ?></span>
                                        </div>
                                </div>    

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Chức vụ</label>
                                    <input name="cv" class="form-control" id="exampleInputPassword1">
                                
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['cv'])) ? $err['cv'] : '' ?></span>
                                    </div><br>
                                

                                <div class="form-group">
                                    <label for="exampleInputPassword1">Số điện thoại</label>
                                    <input name="sdt" class="form-control" id="exampleInputPassword1">
                                
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['sdt'])) ? $err['sdt'] : '' ?></span>
                                    </div>
                                </div>


                                 </div>
                            </div>


                            <div class="col">
                            <div class="form-group">
                                    <label for="exampleInputPassword1">Tên đăng nhập</label>
                                    <input name="dn" class="form-control" id="exampleInputPassword1">
                    
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['dn'])) ? $err['dn'] : '' ?></span>
                                    </div>
                            </div>

                            <div class="form-group" class="width:100%;">
                                <label for="exampleInputPassword1">Mật khẩu</label>
                                <input name="mk" type="password" class="form-control" id="exampleInputPassword1" >
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



                        </div>
                        </div>
                        <button name="btn-dangky" type="submit" class="btn btn-primary text-center float-right" style="width:200px;"><b> ĐĂNG KÝ </b></button>
                        <br>
                        <br>
                        <a type="submit" class="btn text-primary text-center float-right" style="width:200px;" href="sql_nhanvien.php"><b>QUAY LẠI<b> </a>
                    </form>
                </div>
                

            </div>
            </div>
        <?php }

        ?>
        



</body>