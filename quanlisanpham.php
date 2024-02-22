<style>
.khung{
    border: 1px solid black;
}
.sp:hover{
        border: 3px solid green;
        
    }
</style>
<?php
if(isset($_POST['qlx'])){
    
    echo '
    <h1 class="text-center chu"> QUẢN LÝ</h1><br>
    <div class=" row text-center">
    <div class="col b-0 p-0">
    <a href="sql_sanpham.php"><img  class= "khung sp" src=../img/qlsanpham.png style="width:250px; height:250px;"></a>
    <br>
    <a href="sql_sanpham.php" type ="submit" class="btn bg2 text-white" style="width:250px;"><b> Quản Lý Sản Phẩm </b></a>
    </div>

    <div class="col b-0 p-0">
    <a href="sql_loaisanpham.php"><img  class= "khung sp" src=../img/qlloaisp.png style="width:250px; height:250px;"></a>
    <br>
    <a href="sql_loaisanpham.php" type ="submit" class="btn bg2 text-white" style="width:250px;"><b> Quản Lý Loại Sản Phẩm </b></a>
    </div>

    <div class="col b-0 p-0">
    <a href="sql_ncc.php"><img  class= "khung sp" src=../img/qlncc.png style="width:250px; height:250px;"></a>
    <br>
    <a href="sql_ncc.php" type ="submit" class="btn bg2 text-white" style="width:250px;"><b> Quản Lý Nhà Cung Cấp </b> </a>
    </div>

    </div>

    
    ';
}

?>
