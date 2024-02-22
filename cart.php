<?php 
    session_start();
?>

<!DOCTYPE html>

<html>
    <head>
        <title>GIỎ HÀNG </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/cart.css">
    </head>

    <body>

        <?php
         include './connect_db.php';
        if(!isset($_SESSION["cart"])){
            $_SESSION["cart"] = array();
        }
        $error= false;
        $success = false;
        

        if(isset($_GET['action'])){

            function update_cart($add = false) {
                //var_dump($add); exit;
                foreach ($_POST['quantity'] as $id => $quantity) {
                    if ($quantity == 0) {
                        unset($_SESSION["cart"][$id]);
                    } else{
                        if($add){
                            $_SESSION["cart"][$id] += $quantity;
                        }else{
                            $_SESSION["cart"][$id] = $quantity;
                        }
                    }
                      
                }
            }
           // var_dump($_POST); exit;
                switch($_GET['action']){
                    case "add":
                        update_cart(true);
                        //var_dump($_POST); exit;
                        // foreach ($_POST['quantity'] as $id => $quantity) {
                        //  $_SESSION["cart"][$id] = $quantity;
                        // }
                        //var_dump($_SESSION["cart"]); exit;
                        header('Location: ./cart.php');
                        break;
                        case "delete":
                            // var_dump($_SESSION["cart"]); exit;
                            // echo "Delete Product"; exit;

                            if(isset($_GET["sp_ma"])){
                                unset($_SESSION["cart"] [$_GET["sp_ma"]]);
                            }

                            header('Location: ./cart.php');
                            break;
                        case "submit":

                            if(isset($_POST['update_click'])){  //cap nhat san pham
                                //echo "Cap nhat"; exit;
                                //var_dump($_POST); exit;
                                //header('Location: ./cart.php');
                                // foreach ($_POST['quantity'] as $id => $quantity) {
                                //     $_SESSION["cart"][$id] = $quantity;
                                //    }
                                update_cart();
                                header('Location: ./cart.php');
    
                            } elseif($_POST['order_click']){ // dat hang
                                //echo "Dat Hang"; exit;
                                //var_dump($_POST);
                                 
                                if(empty($_POST['name'])) {
                                    $error = "Vui Lòng Nhập Tên";
                                }elseif (empty($_POST['phone'])) {
                                    $error = "Bạn chưa nhập số điện thoại người nhận";
                                } elseif (empty($_POST['address'])) {
                                    $error = "Bạn chưa nhập địa chỉ người nhận";
                                }  elseif(empty($_POST['quantity'])){
                                    $error= "Giỏ hàng rỗng";
                                }   
                                //var_dump($_POST); exit;
                                if( $error==false && !empty($_POST['quantity'])){ //XU LY GIO HANG
                                    //echo "Lưu dữ liệu"; exit;
                                    //var_dump($_POST); exit;
                                    $products = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `sp_ma` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
                                    $total = 0; 
                                    $orderProducts = array();

                                    //var_dump($_POST['quantity']); exit;
                                    while ($row = mysqli_fetch_array($products)){
                                        $orderProducts [] = $row;
                                      
                                        $total += $row ['sp_gia'] * $_POST['quantity'][$row['sp_ma']];

                                    }
                             
                                    $insertOrder = mysqli_query($conn, 
                                        "INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_update`) 
                                        VALUES ('NULL', '".$_POST['name']."',  '".$_POST['phone']."',  '".$_POST['address']."' ,  '".$_POST['note']."',  '".$total."', '".time()."', '".time()."');");
                             
                                 $orderID = $conn->insert_id;
                                 $insertString = "";
                                 //var_dump(count($orderProducts)); exit;
                                    
                                 foreach ($orderProducts as $key => $product) {
                                     //var_dump($orderProducts); exit;
                                    $insertString .= "(NULL, '" . $orderID . "', '" . $product['sp_ma'] . "', '" . $_POST['quantity'][$product['sp_ma']] . "', '" . $product['sp_gia'] . "', '" . time() . "', '" . time() . "')";
                                    if($key != count($orderProducts) - 1){
                                        $insertString .= ",";
                                    }
                                
                                }
                               //var_dump($insertString); exit;

                                    $insertOrder = mysqli_query($conn, 
                                    " INSERT INTO `order_detail` (`id`, `order_id`, `sp_ma`, `soluong`, `gia`, `create_time`, `last_update`) VALUES ".$insertString." ; ");
                                    $success = "Đặt hàng thành công";
                                    unset($_SESSION['cart']);
                                }
                                
                            }
                            //var_dump($_POST); exit;
                                
                        break;         
                }
        }

        if (!empty($_SESSION["cart"])) {

            // var_dump(implode(",", array_keys($_SESSION["cart"]))); exit;

            $products = mysqli_query($conn, "SELECT * FROM `sanpham` WHERE `sp_ma` IN(".implode(",", array_keys($_SESSION["cart"])).")");

            //var_dump($products); exit;
    
        }

        ?>
          <div class="container">
              <?php if (!empty($error)){ ?>
                <div id="notify-msg">
                    <?= $error ?> . <a href="javascript:history.back()">Quay lại</a>
                </div>
                <?php } elseif(!empty($success)){ ?>
                    <div id="notify-msg">
                    <?= $success ?>. <a href="SanPhamdemo.php">Tiếp tục mua hàng</a>
                </div>

                <?php } else { ?>
                   <Button> <a href="SanPhamdemo.php">Quay lại</a> </Button> <br> <br>
            
                    <h1>Giỏ hàng</h1>
            <form id="cart-form" action="cart.php?action=submit" method="POST">
                <table>
                    <tr>
                        <th class="product-number">STT</th>
                        <th class="product-name">Tên sản phẩm</th>
                        <th class="product-img">Ảnh sản phẩm</th>
                        <th class="product-price">Đơn giá</th>
                        <th class="product-quantity">Số lượng</th>
                        <th class="total-money">Thành tiền</th>
                        <th class="product-delete">Xóa</th>
                    </tr>
                  
                    <?php 
                    if(!empty($products)){
                        $total = 0;
                        $num = 1;
                    while ($row = mysqli_fetch_array($products)) { ?>
                    
                    <tr>
                        <td class="product-number"> <?=$num++;?> </td>
                        <td class="product-name"><?=$row['sp_ten']?></td>
                        <td class="product-img"> <img src="../images/<?=$row['sp_hinhanh']?>"> </td>
                        <td class="product-price"> <?= number_format($row['sp_gia'], 0, ",", ".") ?> </td>
                        <td class="product-quantity"><input type="number" value="<?= $_SESSION["cart"][$row['sp_ma']]?>"  name="quantity[<?=$row['sp_ma']?>]" /></td>
                        <td class="total-money"> <?= number_format($row['sp_gia'] * $_SESSION["cart"][$row['sp_ma']], 0, ",", ".") ?> </td>
                        <td class="product-delete"> <a href="cart.php?action=delete&sp_ma=<?= $row['sp_ma'] ?>"> Xóa </td>
                    </tr>  
                    <?php 
                        $total +=  $row['sp_gia'] *  $_SESSION["cart"][$row['sp_ma']]  ;
                        $num++;
                     } ?> 
                     <tr id="row-total">
                        <td class="product-number"> &nbsp;</td>
                        <td class="product-name">Tổng tiền</td>
                        <td class="product-img">&nbsp;</td>
                        <td class="product-price">&nbsp;</td>
                        <td class="product-quantity">&nbsp;</td>
                        <td class="total-money"> <?= number_format($total, 0, ",", ".") ?> </td>
                        <td class="product-delete">Xóa</td>
                    </tr>
                     <?php
                }     
                ?>   
                    
                </table>
                <div id="form-button">
                    <input type="submit" name="update_click" value="Cập nhật" />
                </div>
                <hr>
                <div><label>Người nhận: </label><input type="text" value="" name="name" /></div>
                <div><label>Điện thoại: </label><input type="text" value="" name="phone" /></div>
                <div><label>Địa chỉ: </label><input type="text" value="" name="address" /></div>
                <div><label>Ghi chú: </label><textarea name="note" cols="50" rows="7" ></textarea></div>
                <input type="submit" name="order_click" value="Đặt hàng" />
            </form>

                <?php } ?>

        </div>

</html>