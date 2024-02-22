<?php include "host.php";
include "session.php";
?>

<body class="bg3" style="margin-top:70px;">
    <?php
    include "vientren.php";
    ?>
    <h1 class="text-danger text-center"> QUẢN LÝ HÌNH ẢNH MÔ TẢ SẢN PHẨM</h1><br>
    <div class="container-fluid">
        <form action="" method="POST" class="float-right">
            <select name="select-hinhanh" id="">
                <?php
                $sql = "SELECT * FROM `sanpham`";
                $query = mysqli_query($conn, $sql);
                while ($result_hh = mysqli_fetch_array($query)) {
                ?>

                    <option value="<?php echo $result_hh['sp_ma'] ?>"><?php echo $result_hh['sp_ten'] ?> </option>

                <?php
                }
                ?>
            </select>
            <input type="file" name="anh">
            <button type="submit" name="btn-upload" class="btn btn-primary">
                Thêm hình ảnh vào
            </button>
        </form>
        <?php
        if (isset($_POST['btn-upload'])) {
            $anh = $_POST['anh'];
            $msp = $_POST['select-hinhanh'];
            $sql = "INSERT INTO `hinhmota`(`ha_ma`, `sp_ma`) VALUES ('$anh','$msp')";
            $query = mysqli_query($conn, $sql);
            echo '<script>alert("Lưu thông tin thành công");</script>';
            echo ' <script>window.location.href = "sql_hinhanh.php";</script>';
        }
        ?>

        <table class="table table-bordered table-hover">
            <thead>
                <tr class="">
                    <th class="bg-primary text-white text-center">Mã hình ảnh</th>
                    <th class="bg-primary text-white text-center " style="width:200px;">Hình ảnh mô tả </th>
                    <th class="bg-primary text-white text-center">Tên sản phẩm</th>
                    <th class="bg-primary text-white text-center"> Xóa </th>
                </tr>
            </thead>
            <?php
            if (isset($_GET['hinhanh']) && !empty($_GET['hinhanh'])) {
                $hinhanh = $_GET['hinhanh'];
                $sql = "SELECT * FROM `hinhmota` WHERE sp_ma = '$hinhanh'";
                $query = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($query)) {
                    echo '
        <tr>
        <th> ' . $row['ha_ma'] . '</th>
        <th> <img src ="../img/' . $row['ha_link'] . '" style = "width:150px; height:150px;"></th>
        
        ';
                    $sql_sp = "SELECT * FROM `sanpham` WHERE sp_ma ='$hinhanh'";
                    $query_sp = mysqli_query($conn, $sql_sp);
                    while ($sp = mysqli_fetch_array($query_sp)) {
                        echo '<th> ' . $sp['sp_ten'] . 'link='. $row['ha_ma']. '</th>
             <th class="text-center"> <a href= "?x_hinhanh=' . $row['ha_ma'] . '"> 
             <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                </svg></a></th>  
            ';
                    }
                }
            }
            ?></tr>
        </table>
    </div>
    <?php if(isset($_GET['x_hinhanh']) && !empty($_GET['x_hinhanh'])){
        $id = $_GET['x_hinhanh'];
        $sql = "DELETE FROM `hinhmota` WHERE ha_ma = '$id' ";
        $query = mysqli_query($conn,$sql);
        echo '<script>alert("Xóa Thông Tin Thành Công");</script>';
    echo ' <script>window.location.href = "sql_hinhanh.php";</script>';

    }?>

  
</body>