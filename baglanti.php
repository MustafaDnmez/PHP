<?php
$pdo= new PDO("mysql:host=localhost;dbname=dersler;charset=UTF8","root","rootroot");
if (!$pdo){

    echo "bağlanmadı";

}
else{
    echo NULL;
}
?>