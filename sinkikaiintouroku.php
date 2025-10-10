<?php
const SERVER = 'mysql326.phy.lolipop.lan';
const DBNAME = 'LAA1607632-pocketroom';
const USER = 'LAA1607632';
const PASS = 'pocketRoom';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<?php
$pdo = new PDO($connect,USER,PASS);
$sql= "insert into customer(customer_id,customer_name,address,login,password) values()"
?>