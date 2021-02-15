<?php
$database_hostname = "localhost";
$database_username ="id16148676_dbgerva";
$database_password = "V^?{we>7LKIe91_O";
$database_name = "id16148676_db_number";

try{
 //sintaks berhasil?  
 $db= new PDO("mysql:host=$database_hostname;dbname=$database_name",
 $database_username, $database_password); 
 $cek = "Koneksi Berhasil";
//  echo $cek;
}catch(PDOException $x){
die($x->getMessage());
}
?>