<?php
include_once("helper/produk.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INGFO ELEKTRONIK</title>
    <link rel="stylesheet" href="./asset/style/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
</head>
<body>
    <nav class="navigation">
        <a href="" class="logo">INGFO ELEKTRONIK</a>

        <ul class="menu">
            <li>
                <a href="index.php" class="active">Home</a>
                <a href="product.php">Product</a>
                <a href="about.php">About</a>
                <a href="bukutamu.php">Buku Tamu</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <section id="image-slide">
            <div class="slider">
                <div class="slides">
                        <input type="radio" name="radio-btn" id="radio1">
                        <input type="radio" name="radio-btn" id="radio2">
    
                    <div class="slide first">
                        <img src="./asset/image/banner1.webp" alt="">
                    </div>
                    <div class="slide">
                        <img src="./asset/image/banner2.webp" alt="">
                    </div>
    
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                    </div>
                </div>
    
    
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                </div>
            </div>
        </section>
    
        <hr>
        <div class="card">
            <div class="card-body">
                <h2>Top Up & Tagihan</h2>
                <br>
                <form action="">
                    <label for="">Nomor Telepon</label>
                    <input type="number" class="form-control">
                    <br>
                    <label for="">Pilih Pulsa atau Paket Data</label>
                    <select name="" class="form-control">
                        <option value="">Pulsa 15K</option>
                        <option value="">Pulsa 25K</option>
                        <option value="">Pulsa 50K</option>
                        <option value="">Pulsa 100K</option>
                    </select>
                    <br>
                    <button type="submit" class="btn btn-success btn-block">Beli</button>
                </form>

                <br>
                <p style="opacity:.5;font-size:0.8rem">Supported By Tokopedia API</p>
            </div>
        </div>
        <hr>

        <section class="featured">
            <h1 style="text-align: center;">Produk Unggulan</h1>
            <div class="row">
                <?php
                for($i = 0; $i < 3;$i++){
                    echo '<div class="col-md-4">';
                    echo '<div class="card">';
                    echo '<a class="link-warp" href="detail.php?id='.$produk[$i]['id'].'">';
                    echo '<img class="card-img-top" src="'.$produk[$i]['image'].'" alt="Image">';
                    echo '<div class="card-body">';
                    echo '<h3 class="card-title">'.$produk[$i]['name'].'</h3>';
                    echo '<h4>'.$produk[$i]['price'].'</h4>';
                    echo '<p style="font-size:0.83rem;opacity: 0.5;">'.$produk[$i]['location'].'</p>';
                    echo '<p><i class="fas fa-star" style="color:orange"></i> '.$produk[$i]['rating'].' | Terjual '.$produk[$i]['sold'].'</p>';
                    echo '</div>';
                    echo '</a>';
                    echo '</div>';
                    echo '</div>';
                }
                ?>
            </div>
        </section>
    </div>



    <script src="./asset/js/script.js"></script>

</body>
</html>