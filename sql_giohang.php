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
<body class="bg3" style="margin-top:70px;">
    <?php
    include "vientren.php";
    ?>

    <?php

        $item_per_page = (!empty($_GET['per_page'])) ? $_GET['per_page'] : 10;
        $current_page = (!empty($_GET['page'])) ? $_GET['page'] : 1;
        $offset = ($current_page - 1) * $item_per_page;
        if(!empty($where)){
            $totalRecords = mysqli_query($conn, "SELECT * FROM `orders` where (".$where.")");
        }else{
            $totalRecords = mysqli_query($conn, "SELECT * FROM `orders`");
        }
        $totalRecords = $totalRecords->num_rows;
        $totalPages = ceil($totalRecords / $item_per_page);
        if(!empty($where)){
            $orders = mysqli_query($conn, "SELECT * FROM `orders` where (".$where.") ORDER BY `id` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
        }else{
            $orders = mysqli_query($conn, "SELECT * FROM `orders` ORDER BY `id` DESC LIMIT " . $item_per_page . " OFFSET " . $offset);
        }
        mysqli_close($conn);
    ?>

    <h1 class="text-danger text-center"> QUẢN LÍ ĐƠN HÀNG</h1><br>

    <div class="container">
        <br>
        <table class="table table-hover table-bordered">
            <tr class="bg-primary text-white">
                <th>Mã đơn hàng </th>
                <th>Tên người nhận </th>
                <th>Địa chỉ</th>
                <th>Số điện thoại </th>
                <th> Ngày tạo</th>
                <th>In đơn </th>
            </tr>
            <?php  while ($row = mysqli_fetch_array($orders)) { ?>
                <tr>
                    <th class="listing-prop listing-id"><?=$row['id']?></th>
                    <th class="listing-prop listing-name"><?=$row['name']?></th>
                    <th class="listing-prop listing-address"><?=$row['address']?></th>
                    <th class="listing-prop listing-phone"><?=$row['phone']?></th>
                    <th class="listing-prop listing-time"><?=date('d/m/Y H:i', $row['created_time'])?></th>
                    <th class="listing-prop listing-button">
                        <a href="sql_ingiohang.php?id=<?=$row['id']?>" target="_blank">In</a>
                    </th>
                
                </tr>
                <?php  } ?>

            <?php ?>

           
    

    
    
</body>