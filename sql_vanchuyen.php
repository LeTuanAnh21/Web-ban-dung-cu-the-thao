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
if (isset($_POST['t_dvvc'])) {
    $dvvc = $_POST['n_dvvc'];
    $sql = "INSERT INTO `donvivanchuyen`(`dvvc_ma`, `dvvc_ten`) VALUES ('','$dvvc')";
    $query = mysqli_query($conn, $sql);
    echo '<script>alert("Thêm Thông Tin Thành Công");</script>';
    echo ' <script>window.location.href = "sql_vanchuyen.php";</script>';
}
?>

<?php
if (isset($_GET['x_vc']) && !empty($_GET['x_vc'])) {
    $vc = $_GET['x_vc'];
    $sql = "DELETE FROM `donvivanchuyen` WHERE dvvc_ma = '$vc'";
    $query = mysqli_query($conn, $sql);
    echo '<script>alert("Xóa Thông Tin thành công");</script>';
    echo ' <script>window.location.href = "sql_vanchuyen.php";</script>';
}
?>


<body class="bg3"  style="margin-top:70px;" >
    <?php
    include "vientren.php";
    ?>
    <h1 class="text-danger text-center"> QUẢN LÝ ĐƠN VỊ VẬN CHUYỂN</h1><br>
    
    <div class="container">
        <form action="" method="POST">
            <div class="input-group mb-3">
                <a href="?them" class="btn btn-primary" type="submit" style="width:200px;">Thêm đơn vị vận chuyển</a>

            </div>
        </form>
    </div>

    <?php
        if (isset($_POST['btn-themdvvc'])) {
        $ma = $_POST['ma_dvvc'];
        $ten = $_POST['ten_dvvc'];
        $diachi = $_POST['dc_dvvc'];
        $sql = "INSERT INTO `donvivanchuyen`(`dvvc_ma`, `dvvc_ten`, `dvvc_diachi`) VALUES ('$ma', '$ten', '$diachi')";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Thêm Thông Tin Thành Công");</script>';
        echo ' <script>window.location.href = "sql_vanchuyen.php";</script>';
}
    ?>
    
    <?php
    if (isset($_GET['them'])) { ?>
    
        <div class="jumbotron khung bg-white" style="position: fixed; top: -30; z-index: 9999; margin: 90px; height:490px; width:1000px;">
            <h1 class="text-danger " align="center"> <b>THÊM ĐƠN VỊ VẬN CHUYỂN</b> </h1>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã đơn vị vận chuyển</label>
                                    <input name="ma_dvvc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['ma_dvvc'])) ? $err['ma_dvvc'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên đơn vị vận chuyển</label>
                                    <input name="ten_dvvc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['ten_dvvc'])) ? $err['ten_dvvc'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Địa chỉ đơn vị vận chuyển</label>
                                    <input name="dc_dvvc" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['dc_dvvc'])) ? $err['dc_dvvc'] : '' ?></span>
                                    </div>
                                </div>

                            </div>
                       </div>

                       <button name="btn-themdvvc" type="submit" class="btn btn-primary text-center float-right" style="width:200px;"><b> THÊM </b></button>
                        <br>
                        <br>
                        <a type="submit" class="btn text-primary text-center float-right" style="width:200px;" href="sql_vanchuyen.php"><b>QUAY LẠI<b> </a>

                    </form>
            </div>
        <?php }

        ?>

        <table class="table table-bordered table-hover">
            <thead>
                <tr class="">
                    <th width=250px class="bg-primary text-white text-center" ;>Mã Đơn Vị Vận Chuyển</th>
                    <th class="bg-primary text-white text-center">Tên Đơn Vị Vận Chuyển </th>
                    <th class="bg-primary text-white text-center">Địa Chỉ Đơn Vị Vận Chuyển </th>
                    <th class="bg-primary text-white text-center"> Sửa </th>
                    <th class="bg-primary text-white text-center"> Xóa </th>
                </tr>
            </thead>


            <?php
            $sql = "SELECT * FROM donvivanchuyen WHERE 1";
            $query = mysqli_query($conn, $sql);
            while ($vc = mysqli_fetch_array($query)) {
                echo '
                     <tr >
                        <th class="text-center">' . $vc['dvvc_ma'] . '</th>
                        <th class="text-center">' . $vc['dvvc_ten'] . '</th>
                        <th class="text-center">' . $vc['dvvc_diachi'] . '</th>
                        <th class="text-center"> <a href= "?s_vc=' . $vc['dvvc_ma'] . '"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></a></th>
                         <th class="text-center"> <a href= "?x_vc=' . $vc['dvvc_ma'] . '"> 

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
    if (isset($_GET['s_vc']) && !empty($_GET['s_vc'])) {
        $id = $_GET['s_vc'];
        $sql = "SELECT * FROM `donvivanchuyen` WHERE dvvc_ma = '$id'";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {

    ?><div class="jumbotron khung bg-white" style="position: fixed; top: -50; z-index: 9999; margin: 90px; height:500px; width:1100px;">
        <br>
                <div class="form-group ">
                    
                    <h1 class="text-danger " align="center"> <b>SỬA ĐƠN VỊ VẬN CHUYỂN</b> </h1>
                    <br>
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Nhập Mã Đơn Vị Vận Chuyển</b> </label>
                            <input name="id" type="text" class="form-control" value="<?php echo $row['dvvc_ma']; ?>">
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Nhập Tên Đơn Vị Vận Chuyển</b> </label>
                            <input name="tdvvc" type="text" class="form-control" value="<?php echo $row['dvvc_ten']; ?>">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Địa Chỉ Nhà Cung Cấp</b> </label>
                            <input name="dcdvvc" type="text" class="form-control" value="<?php echo $row['dvvc_diachi']; ?>">
                        </div>

                        <button name="bt_dvvc" type="submit" class="btn btn-primary bg-primary">Lưu thông tin</button>
                        <a href="sql_vanchuyen.php" type="button" class="btn btn-primary bg-primary"> Quay trở lại</a>
                    </form>
                    <br>
                </div>
            </div>
    <?php }
    } ?>

     <?php
    if (isset($_POST['bt_dvvc'])) {
        $id = $_POST['id'];
        $tdvvc = $_POST['tdvvc'];
        $dcdvvc = $_POST['dcdvvc'];
        $sql = "UPDATE `donvivanchuyen` SET `dvvc_ma`='$id',`dvvc_ten`='$tdvvc', `dvvc_diachi`='$dcdvvc' WHERE dvvc_ma = '$id'";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Sửa thông tin thành công");</script>';
        echo ' <script>window.location.href = "sql_vanchuyen.php";</script>';
    } ?>



</body>