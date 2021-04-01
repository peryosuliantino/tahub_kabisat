<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="reset.css">
    <title>Document</title>
</head>
<body>

    <div class="navbar">
        <div class="navbar-link">
        <ul>
            <li><a href="#">home</a></li>
            <!-- <li><a href="#">tentang kami</a></li>
            <li><a href="#">produk</a></li>
            <li><a href="#">galeri</a></li> -->
        </ul>
        </div>
    </div>

    
    <div class="content">
        <h1>Program Penentuan Tahun Kabisat</h1>
    </div>

    <div class="container">
        <div class="form">
            <form method="post" action="">
                <p>Masukkan tahun<p> <input type= "text" name="bil" class="kol1"/><br>
                <input type="submit" name="submit" value="Submit" class="tombol" />
            </form>
            <div class="hasil">
            <?php
                if(isset($_POST['submit'])){
                $TAHUN = $_POST['bil'];
                if ($TAHUN%4==0)
                {
                    echo "$TAHUN TAHUN KABISAT"; 
                }
                else if($TAHUN%4!=0)
                {
                    echo "$TAHUN BUKAN TAHUN KABISAT"; 
                }
                }
            ?>
            </div>
        </div>
    </div>
    

    
    
</body>
</html>