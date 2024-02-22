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
    #order-detail-wrapper{
    width: 450px;
    margin: 50px auto;
    border: 4px solid #000;
    padding: 5px;
    }
    #order-detail{
        border: 1px solid #000;
        padding: 20px;
        line-height: 20px;
    }
    #order-detail ul{
        margin: 0;
        padding: 0;
    }
    #order-detail ul li{
        list-style: none;
    }
    #order-detail label{
        font-weight: bold;
    }
    .frame {
        width: 90%;
        margin: 40px auto;
        text-align: center;
  
    }

    .back{
        font-size:17px;
    }
    
</style>
<body class="bg3" style="margin-top:70px;">
    <?php
    
    include "vientren.php";
    //print_r($_GET['id']); exit;
    $orders = mysqli_query($conn, "SELECT orders.name, orders.address, orders.phone, orders.note, order_detail.*, sanpham.sp_ten 
    from orders 
    INNER JOIN order_detail ON Orders.id = order_detail.order_id 
    INNER JOIN sanpham ON sanpham.sp_ma = order_detail.sp_ma 
    WHERE orders.id = " . $_GET['id']);
   $orders = mysqli_fetch_all($orders, MYSQLI_ASSOC); //lấy all đơn hàng
    ?>
    <div id="order-detail-wrapper">
            <div id="order-detail">
                <h1>Chi tiết đơn hàng</h1>
                <label>Người nhận: </label><span> <?= $orders[0]['name'] ?></span><br/>
                <label>Điện thoại: </label><span> <?= $orders[0]['address'] ?></span><br/>
                <label>Địa chỉ: </label><span> <?= $orders[0]['phone'] ?></span><br/>
                <hr/>
                <h3>Danh sách sản phẩm</h3>
                <ul>
                    <?php
                    $totalQuantity = 0;
                    $totalMoney = 0;
                    foreach ($orders as $row) {
                        ?>
                        <li>
                            <span class="item-name"><?= $row['sp_ten'] ?></span>
                            <span class="item-quantity"> - SL: <?= $row['soluong'] ?> sản phẩm</span>
                        </li>
                        <?php
                        $totalMoney += ($row['gia'] * $row['soluong']);
                        $totalQuantity += $row['soluong'];
                    }
                    ?>
                </ul>
                <hr/>
                <label>Tổng SL:</label> <?= $totalQuantity ?> - <label>Tổng tiền:</label> <?= number_format($totalMoney, 0, ",", ".") ?> đ
                <p><label>Ghi chú: </label><?= $orders[0]['note'] ?></p>
            </div>
        </div>

        <div class="frame" >
            <a href="sql_giohang.php">  <button class="back" > Quay lại </button> </a>
        </div>

</body>