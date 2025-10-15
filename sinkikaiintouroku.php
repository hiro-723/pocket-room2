<?php
$name       = $_POST['ustomer_name'];
$kana       = $_POST['kana'];
$birth      = $_POST['birth'];
$prefecture = $_POST['prefecture'];
$city       = $_POST['city'];
$address    = $_POST['address'];
$building   = $_POST['building'];
$phone      = $_POST['phone'];
$email      = $_POST['email'];
$password   = $_POST['password'];

const SERVER = 'mysql326.phy.lolipop.lan';
const DBNAME = 'LAA1607632-pocketroom';
const USER = 'LAA1607632';
const PASS = 'pocketRoom';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<?php
$pdo = new PDO($connect,USER,PASS);
$sql= "insert into customer(customer_id,customer_name,address,login,password) values(?,?,?,?,?,?,?,?,?,?)";
$pdo->prepare($sql);
?>