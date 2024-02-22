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

<?php
if (isset($_POST['t_ncc'])) {
    $ncc = $_POST['n_ncc'];
    $sql = "INSERT INTO `nhacungcap`(`ncc_ma`, `ncc_ten`) VALUES ('','$ncc')";
    $query = mysqli_query($conn, $sql);
    echo '<script>alert("Thêm Thông Tin Thành Công");</script>';
    echo ' <script>window.location.href = "sql_ncc.php";</script>';
}
?>

<?php
if (isset($_GET['x_npp']) && !empty($_GET['x_npp'])) {
    $npp = $_GET['x_npp'];
    $sql = "DELETE FROM `nhacungcap` WHERE ncc_ma = '$npp'";
    $query = mysqli_query($conn, $sql);
    echo '<script>alert("Xóa Nhà Cung Cấp thành công");</script>';
    echo ' <script>window.location.href = "sql_ncc.php";</script>';
}
?>


<body class="bg3"  style="margin-top:70px;">
    <?php
    include "vientren.php";
    ?>
    <h1 class="text-danger text-center"> QUẢN LÝ NHÀ CUNG CẤP </h1><br>
    
    <div class="container">
        <form action="" method="POST">
            <div class="input-group mb-3">
                <a href="?them" class="btn btn-primary" type="submit" style="width:200px;">Thêm nhà cung cấp</a>

            </div>
        </form>
    </div>

    <?php
        if (isset($_POST['btn-themncc'])) {
        $ma = $_POST['ma_ncc'];
        $ten = $_POST['ten_ncc'];
        $diachi = $_POST['dc_ncc'];
        $sql = "INSERT INTO `nhacungcap`(`ncc_ma`, `ncc_ten`, `ncc_diachi`) VALUES ('$ma', '$ten', '$diachi')";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Thêm Thông Tin Thành Công");</script>';
        echo ' <script>window.location.href = "sql_ncc.php";</script>';
}
?>
    
    <?php
    if (isset($_GET['them'])) { ?>
    
        <div class="jumbotron khung bg-white" style="position: fixed; top: -30; z-index: 9999; margin: 90px; height:490px; width:1000px;">
            <h1 class="text-danger " align="center"> <b>THÊM NHÀ CUNG CẤP</b> </h1>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã nhà cung cấp</label>
                                    <input name="ma_ncc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['ma_ncc'])) ? $err['ma_ncc'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên nhà cung cấp</label>
                                    <input name="ten_ncc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['ten_ncc'])) ? $err['ten_ncc'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ nhà cung cấp</label>
                                    <input name="dc_ncc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['dc_ncc'])) ? $err['dc_ncc'] : '' ?></span>
                                    </div>
                                </div>

                            </div>
                       </div>

                       <button name="btn-themncc" type="submit" class="btn btn-primary text-center float-right" style="width:200px;"><b> THÊM </b></button>
                        <br>
                        <br>
                        <a type="submit" class="btn text-primary text-center float-right" style="width:200px;" href="sql_ncc.php"><b>QUAY LẠI<b> </a>

                    </form>
            </div>
        <?php }

        ?>




        <table class="table table-bordered table-hover">
            <thead>
                <tr class="">
                    <th width=250px class="bg-primary text-white text-center" ;>Mã Nhà Cung Cấp</th>
                    <th class="bg-primary text-white text-center">Tên Nhà Cung Cấp </th>
                    <th class="bg-primary text-white text-center">Địa Chỉ Nhà Cung Cấp </th>
                    <th class="bg-primary text-white text-center"> Sửa </th>
                    <th class="bg-primary text-white text-center"> Xóa </th>
                </tr>
            </thead>


            <?php
            $sql = "SELECT * FROM nhacungcap WHERE 1";
            $query = mysqli_query($conn, $sql);
            while ($npp = mysqli_fetch_array($query)) {
                echo '
                     <tr >
                        <th class="text-center">' . $npp['ncc_ma'] . '</th>
                        <th class="text-center">' . $npp['ncc_ten'] . '</th>
                        <th class="text-center">' . $npp['ncc_diachi'] . '</th>
                        <th class="text-center"> <a href= "?s_npp=' . $npp['ncc_ma'] . '"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></a></th>
                         <th class="text-center"> <a href= "?x_npp=' . $npp['ncc_ma'] . '"> 

                         <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                            </svg>
                         </a></th>
                        </tr> ';
            }

            ?>

        </table>

    </div>
    <?php
    if (isset($_GET['s_npp']) && !empty($_GET['s_npp'])) {
        $id = $_GET['s_npp'];
        $sql = "SELECT * FROM `nhacungcap` WHERE ncc_ma='$id'";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {



    ?>
    
    <div class="jumbotron khung bg-white" style="position: fixed; top: -50; z-index: 9999; margin: 90px; height:500px; width:1100px;">
        <br>
                <div class="form-group ">
                    
                    <h1 class="text-danger " align="center"> <b>SỬA NHÀ CUNG CẤP</b> </h1>
                    <br>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input hidden name="id" type="text" class="form-control" value="<?php echo $row['ncc_ma']; ?>">
                        </div>

        
                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Tên Nhà Cung Cấp</b> </label>
                            <input name="tnpp" type="text" class="form-control" value="<?php echo $row['ncc_ten']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Địa Chỉ Nhà Cung Cấp</b> </label>
                            <input name="dcnpp" type="text" class="form-control" value="<?php echo $row['ncc_diachi']; ?>">
                        </div>


                        <button name="bt_ncc" type="submit" class="btn btn-primary bg-primary">Lưu thông tin</button>
                        
                        <a href="sql_ncc.php" type="button" class="btn btn-primary bg-primary"> Quay trở lại</a>
                    </form>
                    <br>
                </div>
            </div>
    <?php }
    } ?>
    <?php
    if (isset($_POST['bt_ncc'])) {
        $id = $_POST['id'];
        $tnpp = $_POST['tnpp'];
        $dcnpp = $_POST['dcnpp'];
        $sql = "UPDATE `nhacungcap` SET `ncc_ma`='$id',`ncc_ten`='$tnpp', `ncc_diachi`='$dcnpp' WHERE ncc_ma= '$id'";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Sửa thông tin thành công");</script>';
        echo ' <script>window.location.href = "sql_ncc.php";</script>';
    } ?>


</body>