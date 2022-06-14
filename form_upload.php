<?php 
include('koneksi.php');
if(isset($_POST['tombol']))
{
    $temp = $_FILES['gambar']['tmp_name'];
    $name = rand(0,9999).$_FILES['gambar']['name'];
    $size = $_FILES['gambar']['size'];
    $type = $_FILES['gambar']['type'];
    $keterangan = $_POST['keterangan'];
    $folder = "files/";
    if ($size < 2048000 and ($type =='image/jpeg' or $type == 'image/png')) {
        move_uploaded_file($temp, $folder . $name);
        mysqli_query($koneksi, "insert into tb_gambar (gambar,keterangan,tipe_gambar,ukuran_gambar) values ('$name','$keterangan','$type','$size')");
        header('location:index.php');
    }else{
        $message = "Gagal Upload File";
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
}
?>
<html>
    <head>
        <title></title>
        <link rel = "stylesheet" href = "style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        
        <ul>
        <li><a href="logout.php">Logout</a> </li>
      <li><a href = "home.php" > Home </a> </li>
        <li class = "dropdown">
          <a href = "#" class = "dropbutton"> Feature </a>
          <div class = "dropdownList">
            <a href= "bmi.html" > BMI </a>
            <a href= "kalori.html" > Kalori </a>
            <a href= "jantung.html"> Denyut Jantung Istirahat </a>
            <a href= "tpg.html" > Tinggi Potensi Genetik </a>
          
          </div>
        </li>
        <li><a href="form_upload.php">Upload Gambar</a> </li>
    </ul>

        <style type="text/css">
    body{background-color: #005394;}


    #box{

        background-color: #F1E8B8;
        margin: auto;
        width: 300px;
        padding: 20px;
        min-width: 200px;
        position: absolute;
        transform: translate(-50%,-50%);
        top: 40%;
        left: 50%;
        box-shadow: 25px 25px 30px rgba(0,0,0,0.15);
    }
    </style>

    <div id="box">

        <form method="post" action="" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Gambar</td>
                <td><input type="file" name="gambar"/></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><textarea name="keterangan"></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="tombol"/></td>
            </tr>
        </table>
        </form>
    </div>
    </body>
</html>