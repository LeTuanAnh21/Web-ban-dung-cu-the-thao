<style>
    .khung {
        border: 1px solid black;
    }

    .sp:hover {
        border: 3px solid blue;

    }
</style>
<form action="" method="POST" class="menu-item-text">
    <br>
    <?php
    if (isset($_POST['qltk'])) {
        echo '
    
    <br>
    <h1 class="text-center  chu"> QUẢN LÝ TÀI KHOẢN</h1><br><br>
    <div class="row text-center">
    <div class="col-6">
    <a href="sql_khachhang.php"><img class = "khung sp" src=../img/khachhang.png style="width:300px; height: 300px"></a>
    <br>
    <a href="sql_khachhang.php" type ="submit" class="btn bg2 text-white" style="width:300px;"><b> Khách Hàng </b></a>
    </div>
    
    <div class="col-6"> 
    <a href="sql_nhanvien.php"><img class = "khung sp" src=../img/nhanvien.png style="width:300px; height: 300px"> </a>
    <br>
    <a href="sql_nhanvien.php" type ="submit" class="btn bg2 text-white" style="width:300px;"> <b> Nhân Viên </b> </a>
    </div>
    </div>
    </div>';
    }
    ?>

</form>