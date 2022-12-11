<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
<?php 
require "nav.php";
include "baglanti.php";
$sql=$pdo->query("SELECT * FROM ogrenci where id=3");
$satir=$sql->fetch(PDO::FETCH_ASSOC);

?>


<form action="" method="post">

<div>
    <label for="">AD Soyad</label>
    <input type="text" name="adsoyad" value="<?= $satir['ad_soyad'] ?>" >
</div>
<div>
    <label for="">Yaş</label>
    <input type="number" name="yas" value="<?= $satir['yas'] ?>">
</div>
<div>
    <label for="">Email</label>
    <input type="text" name="email" value="<?= $satir['email'] ?>">
</div>
<input type="submit" name="btn">

</form>

<?php


if (isset($_POST["btn"])){
    $adsoyad=$_POST["adsoyad"];
    $yas=$_POST["yas"];
    $email=$_POST["email"];

    $update=$pdo->query("UPDATE ogrenci SET ad_soyad='$adsoyad', yas='$yas',email='$email' WHERE id=3");
    echo "Güncellendi";

}



?>




</body>
</html>