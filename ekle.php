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
?>


<form action="" method="post">

<div>
    <label for="">AD Soyad</label>
    <input type="text" name="adsoyad">
</div>
<div>
    <label for="">Yaş</label>
    <input type="number" name="yas">
</div>
<div>
    <label for="">Email</label>
    <input type="text" name="email">
</div>
<input type="submit" name="btn">

</form>

<?php
$adsoyad=$_POST["adsoyad"];
$yas=$_POST["yas"];
$email=$_POST["email"];

if (isset($_POST["btn"])){
    // $sql=$pdo->prepare("INSERT INTO ogrenci (ad_soyad,yas,email) VALUES (?,?,?)");
    // $values=array($adsoyad,$yas,$email);
    // $sql->execute($values);
    $sql=$pdo->query("INSERT INTO ogrenci (ad_soyad,yas,email) VALUES ('$adsoyad','$yas','$email')");
    echo "Eklendi";

}



?>




</body>
</html>