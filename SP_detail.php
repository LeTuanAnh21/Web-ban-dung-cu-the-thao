<!DOCTYPE html>

<html>
    <head>
        <title>Chi tiết sản phẩm</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <!-- <link rel="stylesheet" href="css/style.css"> -->
        <link rel="stylesheet" href="css/cart.css">

        <style>
            body{
                font-family: arial;
            }
            .container{
                width: 1200px;
                margin: 0 auto;
                border: 1px solid #000;
                padding: 15px;
            }
            h1{
                text-align: center;
            }
            .product-items{
                border: 1px solid #ccc;
                padding: 30px;
            }
            .product-item{
                float: left;
                width: 23%;
                margin: 1%;
                padding: 10px;
                box-sizing: border-box;
                border: 1px solid #ccc;
                line-height: 26px;
            }
            .product-item label{
                font-weight: bold;
            }
            .product-item p{
                margin: 0;
                line-height: 26px;
                max-height: 52px;
                overflow: hidden;
            }
            .product-price{
                color: red;
                font-weight: bold;
            }
            .product-img{
                padding: 5px;
                border: 1px solid #ccc;
                margin-bottom: 5px;
            }
            .product-item img{
                max-width: 100%;
            }
            .product-item ul{
                margin: 0;
                padding: 0;
                border-right: 1px solid #ccc;
            }
            .product-item ul li{
                float: left;
                width: 33.3333%;
                list-style: none;
                text-align: center;
                border: 1px solid #ccc;
                border-right: 0;
                box-sizing: border-box;
            }
            .clear-both{
                clear: both;
            }
            a{
                text-decoration: none;
            }
            /* .buy-button{
                text-align: center;
                margin-top: 10px;
            } */
            /* .buy-button a{
                background: #444;
                padding: 5px;
                color: #fff;
            } */
            #pagination{
                text-align: right;
                margin-top: 15px;
            }
            .page-item{
                border: 1px solid #ccc;
                padding: 5px 9px;
                color: #000;
            }
            .current-page{
                background: #000;
                color: #FFF;
            }
            
            #product-detail{
                border-top: 1px solid #000;
                padding: 15px 0 0 0;
            }
            #product-img{
                width: 30%;
                float: left;
            }
            #product-info{
                float: right;
                width: 70%;
                text-align: left;
                padding-left: 30px;
            }
            #product-img img{
                max-width: 100%;
                padding: 5px;
                border: 1px solid #000;
                background: #eee;
            }
            h1{
                text-align: left;
                margin-top: 0;
            }
            label.add-to-cart{
                background: #000;
                border: 1px solid #000;
                margin-top: 15px;
                padding: 15px;
                display: inline-block;
                color: #fff;
            }
            label a{
                color: #FFF;
            }
            #gallery{
                margin-top: 10px;
            }
            #gallery ul{
                margin: 0;
                padding: 0;
            }
            #gallery ul li{
                width: 150px;
                float: left;
                list-style: none;
                margin-right: 5px;
                margin-bottom: 5px;
                height: 100px;
                text-align: center;
                padding: 5px;
                border: 1px solid #000;
                background: #eee;
            }
            #gallery ul li img{
                max-width: 100%;
                max-height: 100%;
                vertical-align: middle;
            }
            *{
                box-sizing: border-box;
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

                <?php
                    include './connect_db.php';
                    $result = mysqli_query ($conn, "SELECT * FROM `sanpham` WHERE `sp_ma`= ".$_GET['sp_ma']);
                    $product = mysqli_fetch_assoc($result);
                    
                ?>
                <div  class="container"> 
                    <h2> Chi Tiết Sản Phẩm </h2>
                    <div id="product-detail">

                        <div id="product-img">
                            <img src="../images/<?=$product['sp_hinhanh']?>" />

                        </div>

                        <div id="product-info">
                            <h1><?=$product['sp_ten']?></h1>

                            <label>Giá: </label><span class="product-price"><?= number_format($product['sp_gia'], 0, ",", ".") ?> VND</span><br/>
                            <br>
                             <!-- <label for="" class="add-to-cart"> <a href="./cart.php"> Mua Sản Phẩm</a></label> -->
                             <form id="add-to-cart-form" action="cart.php?action=add" method="POST">
                                <input style="margin-bottom:10px;" type="number" value="1" name="quantity[<?=$product['sp_ma']?>]" size="2" /><br/>
                                
                                <input style="font-size:17px; background-color:black; color:white; " type="submit" value="Mua sản phẩm" />
                             </form>
                            <br> 
                            <?=$product['sp_mota']?>
                         
                        </div>

                        <div class="clear-both"> </div>
                       
                    </div>

                </div>
                <div class="frame" >
                 <a href="sanphamdemo.php">  <button class="back" > Quay lại</button> </a>
                </div>

           

              
            </body>
</html>