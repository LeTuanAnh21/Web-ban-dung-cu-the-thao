<style>
.khung{
    border: 1px solid black;
}
.sp:hover{
        border: 3px solid blue;
        
    }
</style>
<?php
if(isset($_POST['dvvc'])){
    
    echo '
    <h1 class="text-center  chu"> QUẢN LÝ ĐƠN VỊ VẬN CHUYỂN </h1><br>
    <div class="col m-4 text-center">
    <a href= "sql_vanchuyen.php"><img  class= "khung sp" src=../img/qlncc.png style="width:300px; height:300px;"></a>
    <br>
    <a href= "sql_vanchuyen.php" type ="submit" class="btn bg2 text-white" style="width: 300px;px;"><b> Quản Lý Đơn Vị Vận Chuyển </b></a>
    </div>
    
    ';
    
    
}

?>