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
</head>
<body>
    <nav class="navigation">
        <a href="" class="logo">INGFO ELEKTRONIK</a>

        <ul class="menu">
            <li>
                <a href="index.php">Home</a>
                <a href="product.php">Product</a>
                <a href="about.php">About</a>
                <a href="bukutamu.php" class="active">Buku Tamu</a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div style="margin-top: 100px"></div>
        <section class="featured">
            <div class="card">
                <div class="card-body">
                    <h1>Buku Tamu</h1>
                    <p>Terimakasih telah berkunjung ke website kami, silahkan mengisi buku tamu jika berkenan</p>
                    <hr>
                    <form action="" method="POST">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="name" required>
                        <br>
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" required>
                        <br>
                        <label for="">Nomor Telepon</label>
                        <input type="text" class="form-control" name="phone" required>
                        <br>
                        <label for="">Kota Tinggal</label>
                        <input type="text" class="form-control" name="city" required>
                        <br>
                        <label for="">Sumber Info Website Ini</label>
                        <select name="source" class="form-control">
                            <option value="Teman">Teman</option>
                            <option value="Google">Google</option>
                            <option value="Media Sosial">Media Sosial</option>
                            <option value="Iklan">Iklan</option>
                        </select>
                        <br>
                        <button type="submit" class="btn btn-success btn-block">Simpan</button>
                    </form>
                    <br>
                    <?php 

                    if(@$_POST['name']){
                        echo '<p>Terimakasih Telah Mengisi Buku Tamu</p>';
                        echo '<p>Nama : <b>'.@$_POST['name'].'</b></p>';
                        echo '<p>Email : <b>'.@$_POST['email'].'</b></p>';
                        echo '<p>Nomor Telepon : <b>'.@$_POST['phone'].'</b></p>';
                        echo '<p>Kota Tinggal : <b>'.@$_POST['city'].'</b></p>';
                        echo '<p>Sumber Info : <b>'.@$_POST['source'].'</b></p>';
                    }
                    ?>
                </div>
            </div>
        </section>
    </div>
</body>
</html>