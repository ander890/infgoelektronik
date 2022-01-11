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
                <a href="index.php">Home</a>
                <a href="product.php" class="active">Product</a>
                <a href="about.php">About</a>
                <a href="bukutamu.php">Buku Tamu</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div style="margin-top: 100px"></div>
        <section class="featured">
            <div class="row">
                <?php

                for($i = 0; $i < count($produk);$i++){
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

</body>
</html>