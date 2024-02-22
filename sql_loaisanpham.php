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
if (isset($_POST['t_lx'])) {
    $lx = $_POST['n_lx'];
    $sql = "INSERT INTO `loaisp`(`lsp_ma`, `lsp_ten`) VALUES ('','$lx')";
    $query = mysqli_query($conn, $sql);
    echo '<script>alert("Thêm Thông Tin Thành Công");</script>';
    echo ' <script>window.location.href = "sql_loaisanpham.php";</script>';
}
?>

<?php
if (isset($_GET['x_lsp']) && !empty($_GET['x_lsp'])) {
    $lsp = $_GET['x_lsp'];
    $sql = "DELETE FROM `loaisp` WHERE lsp_ma = '$lsp' ";
    $query = mysqli_query($conn, $sql);
    echo '<script>alert("Xóa Thông Tin Thành Công");</script>';
    echo ' <script>window.location.href = "sql_loaisanpham.php";</script>';
}
?>


<body class="bg3"  style="margin-top:70px;">
    <?php
    include "vientren.php";
    ?>
    
    <h1 class="text-danger text-center" > QUẢN LÝ LOẠI SẢN PHẨM</h1><br>
    
    <div class="container">
        <form action="" method="POST">
            <div class="input-group mb-3">
                <a href="?them" class="btn btn-primary" type="submit" style="width:200px;">Thêm loại sản phẩm</a>

            </div>
        </form>
    </div>

    <?php
    if (isset($_POST['btn-themlsp'])) {
        $ma = $_POST['maloai'];
        $ten = $_POST['tenloai'];
        $sql = "INSERT INTO `loaisp`(`lsp_ma`, `lsp_ten`) VALUES ('$ma','$ten')";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Thêm Thông Tin thành công");</script>';
        echo ' <script>window.location.href = "sql_loaisanpham.php";</script>';
    }

    ?>
    
    <?php
    if (isset($_GET['them'])) { ?>
    
        <div class="jumbotron khung bg-white" style="position: fixed; top: -30; z-index: 9999; margin: 90px; height:490px; width:1000px;">
            <h1 class="text-danger " align="center"> <b>THÊM LOẠI SẢN PHẨM</b> </h1>
                    <form action="" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Mã loại sản phẩm</label>
                                    <input name="maloai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['maloai'])) ? $err['maloai'] : '' ?></span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Tên loại sản phẩm</label>
                                    <input name="tenloai" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                                    <div class="error text-danger">
                                        <span> <?php echo (isset($err['tenloai'])) ? $err['tenloai'] : '' ?></span>
                                    </div>
                                </div>

                            </div>
                       </div>

                       <button name="btn-themlsp" type="submit" class="btn btn-primary text-center float-right" style="width:200px;"><b> THÊM </b></button>
                        <br>
                        <br>
                        <a type="submit" class="btn text-primary text-center float-right" style="width:200px;" href="sql_loaisanpham.php"><b>QUAY LẠI<b> </a>

                    </form>
            </div>
        <?php }

        ?>


        <table class="table table-bordered table-hover">
            <thead>
                <tr class="">
                    <th width=250px class="bg-primary text-white text-center" ;>Mã Loại Sản Phẩm</th>
                    <th class="bg-primary text-white text-center">Tên Loại Sản Phẩm </th>
                    <th class="bg-primary text-white text-center"> Sửa </th>
                    <th class="bg-primary text-white text-center"> Xóa </th>
                </tr>
            </thead>


            <?php
            $sql = "SELECT * FROM loaisp WHERE 1";
            $query = mysqli_query($conn, $sql);
            while ($lx = mysqli_fetch_array($query)) {
                echo '
                     <tr >
                        <th class="text-center">' . $lx['lsp_ma'] . '</th>
                        <th class="text-center">' . $lx['lsp_ten'] . '</th>
                        <th class="text-center"> <a href= "?s_lsp=' . $lx['lsp_ma'] . '"> 
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg></a></th>
                         <th class="text-center"> <a href= "?x_lsp=' . $lx['lsp_ma'] . '"> 

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
    if (isset($_GET['s_lsp']) && !empty($_GET['s_lsp'])) {
        $id = $_GET['s_lsp'];
        $sql = "SELECT * FROM `loaisp` WHERE lsp_ma= '$id' ";
        $query = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_array($query)) {



    ?>
    
    <div class="jumbotron khung bg-white" style="position: fixed; top: -50; z-index: 9999; margin: 90px; height:500px; width:1100px;">
        <br>
                <div class="form-group ">
                   
                    <h1 class="text-danger " align="center"> <b>SỬA LOẠI SẢN PHẨM</b> </h1>
                    <br>
                    <form action="" method="POST">
                        <div class="form-group">
                            <input hidden name="id" type="text" class="form-control" value="<?php echo $row['lsp_ma']; ?>">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1"> <b>Tên Loại Sản Phẩm</b> </label>
                            <input name="loaisp" type="text" class="form-control" value="<?php echo $row['lsp_ten']; ?>">
                        </div>
                        <button name="bt_lsp" type="submit" class="btn btn-primary bg-primary">Lưu thông tin</button>
                     
                        <a href="sql_loaisanpham.php" type="button" class="btn btn-primary bg-primary"> Quay trở lại</a>
                    </form>
                    <br>
                </div>
            </div>
    <?php }
    } ?>
    <?php
    if (isset($_POST['bt_lsp'])) {
        $id = $_POST['id'];
        $loaisp = $_POST['loaisp'];
        $sql = "UPDATE `loaisp` SET `lsp_ma`='$id',`lsp_ten`='$loaisp' WHERE lsp_ma= '$id'";
        $query = mysqli_query($conn, $sql);
        echo '<script>alert("Sửa Thông Tin Thành Công");</script>';
        echo ' <script>window.location.href = "sql_loaisanpham.php";</script>';
    } ?>





</body>