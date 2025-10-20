<?php
$name       = $_POST['customer_name'];
$kana       = $_POST['customer_kana'];
$birth      = $_POST['birth_date'];
$prefecture = $_POST['prefecture'];
$city       = $_POST['city'];
$address    = $_POST['address'];
$building   = $_POST['building'];
$phone      = $_POST['phone_number'];
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
$sql= "insert into customer(customer_id,customer_name,customer_kana,birth_date,prefecture,city,address,building,phone_number,email,password) values(?,?,?,?,?,?,?,?,?,?)";
$pdo->prepare($sql);
?>