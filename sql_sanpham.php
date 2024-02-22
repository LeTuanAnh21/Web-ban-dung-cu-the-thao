<?php include "host.php";
include "session.php";
?>
<style>
    .bg3 {
        background-color: rgb(235, 186, 186);
    }

    .khung {
        border: 1px solid blue;
    }

    .vien1 {
        border-top: 2px solid rgba(27, 47, 230, 0.877);
    }


</style>
<?php
if (isset($_GET['xoa']) && !empty($_GET['xoa'])) {
    $x = $_GET['xoa'];
    $sql = "DELETE FROM `sanpham` WHERE sp_ma = '$x'";
    $query = mysqli_query($conn, $sql);
    echo '<script>alert("Xóa thông tin thành công");</script>';
    echo ' <script>window.location.href = "sql_sanpham.php";</script>';
}

?>

<body class="bg3" style="margin-top:70px;">
    <?php
    include "vientren.php";
    ?>
    <h1 class="text-danger text-center"> QUẢN LÝ SẢN PHẨM</h1><br>
    <div class="container-fluid">
        <form action="" method="POST">
            <div class="input-group mb-3">

                <a href=?them_sp class="btn btn-primary" type="submit" style="width:200px;">Thêm Sản Phẩm </a>

            </div>
        </form>

     

        <div class="product-search">
            <form id="product-search-form" action="sql_sanpham.php?action=search" method="POST">
                <fieldset>
                    <legend style="font-size: 17.5px;">Tìm kiếm sản phẩm:</legend>
                    ID: <input type="text" name="sp_ma" value=""/>
                    Tên sản phẩm: <input type="text" name="sp_ten" value=""/>
                    <input type="submit" value="Tìm kiếm"/>
                </fieldset>
            </form>
        </div>
      


        <table class="table table-bordered table-hover">
            <thead>
                <tr class="">
                    <th class="bg-danger text-white text-center" style="width:50px;">Mã Sản Phẩm</th>
                    <th class="bg-danger text-white text-center " style="width:200px;">Tên Sản Phẩm</th>
                    <th class="bg-danger text-white text-center">Hình ảnh</th>
                    <th class="bg-danger text-white text-center" style="width:150px;">Giá </th>
                    <th class="bg-danger text-white text-center">Loại </th>
                    <th class="bg-danger text-white text-center">Nhà Cung Cấp </th>
                    <th class="bg-danger text-white text-center" style="width:200px;">Mô Tả </th>
                    <th class="bg-danger text-white text-center">Hình ảnh mô tả </th>
                    <th class="bg-danger text-white text-center"> Sửa </th>
                    <th class="bg-danger text-white text-center"> Xóa </th>
                </tr>
            </thead>
            <?php
            $sql = "SELECT * FROM `sanpham` WHERE 1";
            $query = mysqli_query($conn, $sql);
            while ($sp = mysqli_fetch_array($query)) {
                echo '
                <tr>
                <th> ' . $sp['sp_ma'] . '</th>
                <th> ' . $sp['sp_ten'] . ' </th>
                <th class="text-center"><img src="../images/' . $sp['sp_hinhanh'] . '"  style="width:100px; height:100px;"></th>
                <th> ' . $sp['sp_gia'] . ' VNĐ  </th>
                ';
                $l_sp = $sp['lsp_ma'];
                $sql_loai ="SELECT * FROM `loaisp` WHERE lsp_ma = '$l_sp'";
                $query_loai = mysqli_query($conn, $sql_loai);
                while ($loai = mysqli_fetch_array($query_loai)) {
                    echo '<th> ' . $loai['lsp_ten'] . '</th>';
                    $ncc_sp = $sp['ncc_ma'];
                    $sql_npp = "SELECT * FROM `nhacungcap` WHERE ncc_ma = '$ncc_sp'";
                    $query_npp = mysqli_query($conn, $sql_npp);
                    while ($ncc = mysqli_fetch_array($query_npp)) {
                        echo '<th> ' . $ncc['ncc_ten'] . '</th>
                    
    
                            <th> ' . $sp['sp_mota'] . ' </th>
                            <th> <a href = "sql_hinhanh.php?hinhanh=' . $sp['sp_ma'] . '"> Click vào xem </a> </th>
                            <th class="text-center"> <a href= "?sua=' . $sp['sp_ma'] . '"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></a></th>
                         <th class="text-center"> <a href= "?xoa=' . $sp['sp_ma'] . '"> 

                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg></a></th>';
                        }
                    
                }
            }
            echo '</tr>';
            ?>

        </table>
    </div>
    <?php
    if (isset($_GET['sua']) && !empty($_GET['sua'])) {
        $s = $_GET['sua'];
        $sql = "SELECT * FROM `sanpham` WHERE sp_ma = '$s' ";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {
    ?>

            <div class="jumbotron khung bg-white" style="position: fixed; top: -100; z-index: 9999; margin: 90px; height:700px; width:1100px;">
                <h1 class="text-danger " align="center"> <b>SỬA SẢN PHẨM</b> </h1>
                <div class="row">
                    <div class="col">
                        <div class="form-group ">
                            
                            <form action="" method="POST">
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> <b>Tên</b> </label>
                                    <input name="spma" style="width:500px;" type="text" class="form-control" value="<?php echo $row['sp_ma']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1"> <b>Tên</b> </label>
                                    <input name="spten" style="width:500px;" type="text" class="form-control" value="<?php echo $row['sp_ten']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> <b>Hình Ảnh</b> </label>
                                    <input name="sphinhanh" style="width:500px;" type="file" value="<?php echo $row['sp_hinhanh']; ?>">
                                </div>
                                <div>
                                    <img src="../images/<?php echo $row['sp_hinhanh']; ?>" style="width:100px; height:100px;">
                                </div><br>
                                <div class="form-group">
                                    <label for="exampleInputEmail1"> <b>Giá</b> </label>
                                    <input name="spgia" style="width:500px;" type="text" class="form-control" value="<?php echo $row['sp_gia']; ?>">
                                </div>
                                <br>
                        </div>
                    </div>
                    <div class="col">
                        <label for="exampleInputEmail1"> <b>Loại Sản Phẩm</b> </label>
                        <select name="lspma" id="" style="width:500px;">
                            <?php
                            $sql = "SELECT * FROM `loaisp` where 1";
                            $query = mysqli_query($conn, $sql);
                            while ($result_hh = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?php echo $result_hh['lsp_ma'] ?>"><?php echo $result_hh['lsp_ten'] ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                        <br><br><br>
                        <label for="exampleInputEmail1"> <b>Nhà Cung Cấp</b> </label>
                        <select name="nccma" id="" style="width:500px;">
                            <?php
                            $sql = "SELECT * FROM `nhacungcap` where 1 ";
                            $query = mysqli_query($conn, $sql);
                            while ($result_hh = mysqli_fetch_array($query)) {
                            ?>
                                <option value="<?php echo $result_hh['ncc_ma'] ?>"><?php echo $result_hh['ncc_ten'] ?> </option>
                            <?php
                            }
                            ?>
                        </select>
                        <br><br>
                
                       
                        <form action="" method="POST">
                            <div class="form-group">
                                <label for="exampleInputEmail1"> <b>Mô Tả</b> </label>
                                <input name="spmota" style="width:500px; height: 100px;" type="text" class="form-control" value="<?php echo $row['sp_mota']; ?>">
                            </div>

                            <button name="bt_pk" type="submit" class="btn btn-primary bg-primary">Lưu thông tin</button>
                            <a href="sql_sanpham.php" type="button" class="btn btn-primary bg-primary"> Quay trở lại</a>

                        </form>
                        </form>

                    </div>
                </div>

            </div>
    <?php }
    } ?>
    <?php
    if (isset($_POST['bt_pk'])) {
        $id = $_POST['spma'];
        $tensp = $_POST['spten'];
        $hinhanh = $_POST['sphinhanh'];
        $gia = $_POST['spgia'];
        $loaisp = $_POST['lspma'];
        $nhacungcap = $_POST['nccma'];
        $mota = $_POST['spmota'];
        $sql = "UPDATE `sanpham` SET `sp_ma`='$id',`sp_ten`='$tensp',`sp_hinhanh`='$hinhanh',`sp_gia`='$gia',`lsp_ma`='$loaisp',`ncc_ma`='$nhacungcap', `sp_mota`='$mota' WHERE sp_ma = '$id' ";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Sửa Thông Tin thành công");</script>';
        echo ' <script>window.location.href = "sql_sanpham.php";</script>';
    }

    ?>
    <?php
    if (isset($_GET['them_sp'])) { ?>
        <div class="jumbotron khung bg-white" style="position: fixed; top: -50; z-index: 9999; margin: 90px; height:500px; width:1100px;">

            <h1 class="text-danger " align="center"> <b>THÊM SẢN PHẨM MỚI</b> </h1>
            <form method="post" action="">
                <div class="row">
                    <div class="col">

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Mã Sản Phẩm </label>
                            <input name="masp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 450px;">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Tên Sản Phẩm </label>
                            <input name="tensp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 450px;">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> Thêm ảnh mới</label>
                            <br>
                            <input type="file" name="anh">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> Giá</label>
                            <input name="giasp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="width: 450px;">
                        </div>
                       
                    </div>


                    <div class="col">

                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Mô Tả</b> </label>
                            <input name="motasp" style="width:500px; height: 100px;" type="text" class="form-control">
                        </div>

                        <form action="" method="POST">
                            <label for="exampleInputEmail1"> <b>Loại Sản Phẩm</b> </label>
                            <select name="loaisp" id="" style="width:500px;">
                                <?php
                                $sql = "SELECT * FROM `loaisp` where 1";
                                $query = mysqli_query($conn, $sql);
                                while ($result_hh = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?php echo $result_hh['lsp_ma'] ?>"><?php echo $result_hh['lsp_ten'] ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                            <br><br>
                            <label for="exampleInputEmail1"> <b>Nhà Cung Cấp</b> </label>
                            <select name="nhacungcap" id="" style="width:500px;">
                                <?php
                                $sql = "SELECT * FROM `nhacungcap` where 1 ";
                                $query = mysqli_query($conn, $sql);
                                while ($result_hh = mysqli_fetch_array($query)) {
                                ?>
                                    <option value="<?php echo $result_hh['ncc_ma'] ?>"><?php echo $result_hh['ncc_ten'] ?> </option>
                                <?php
                                }
                                ?>
                            </select>
                            <br><br>
                           
                            <button name="button" type="submit" class="btn btn-primary bg-primary">Lưu thông tin</button>
                            
                            <a href="sql_sanpham.php" type="button" class="btn btn-primary bg-primary"> Quay trở lại</a>
                            
                        </form>
                    </div>
                </div>
        </div>
        </form>
        </div>

    <?php }
    ?>
    <?php
    if (isset($_POST['button'])) {
        $masp = $_POST['masp'];
        $tensp = $_POST['tensp'];
        $anh = $_POST['anh'];
        $giasp = $_POST['giasp'];
        $loaisp = $_POST['loaisp'];
        $nhacungcap = $_POST['nhacungcap'];
        $mota = $_POST['motasp'];
        $sql = "INSERT INTO `sanpham`(`sp_ma`, `sp_ten`, `sp_hinhanh`, `sp_gia`, `lsp_ma`, `ncc_ma`, `sp_mota`) VALUES ('$masp','$tensp','$anh','$giasp','$loaisp','$nhacungcap','$mota')";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Thêm thông tin thành công");</script>';
        echo ' <script>window.location.href = "sql_sanpham.php";</script>';

    }


    ?>
</body>