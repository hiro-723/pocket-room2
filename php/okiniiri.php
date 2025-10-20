<?php
session_start();

// ログインしていない場合はログイン画面に戻す
if (!isset($_SESSION['username'])) {
    header("Location: rogin.html");
    exit;
}

const SERVER = 'mysql326.phy.lolipop.lan';
const DBNAME = 'LAA1607632-pocketroom';
const USER = 'LAA1607632';
const PASS = 'pocketRoom';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';

$pdo = new PDO($connect, USER, PASS);
$username = $_SESSION['username'];

$stmt->execute([$username]);
$sql = "
SELECT 
    p.product_id, 
    p.product_name, 
    p.price, 
    p.category, 
    p.color, 
    p.genre
FROM favourite f
INNER JOIN product p 
    ON f.product_id = p.product_id
WHERE f.customer_id = ?
";
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['customer_id']]);
$favorites = $stmt->fetchAll(PDO::FETCH_ASSOC);
include 'okiniiri.html';
?>
