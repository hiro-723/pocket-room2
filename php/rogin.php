<?php
session_start();
const SERVER = 'mysql326.phy.lolipop.lan';
const DBNAME = 'LAA1607632-pocketroom';
const USER = 'LAA1607632';
const PASS = 'pocketRoom';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';

$pdo= new PDO($connect,USER,PASS);
$sql= "select * from customer where login=? and password=?";
$stmt= $pdo->prepare($sql);
$stmt->execute([$_POST['login'],$_POST['password']]);
$user = $stmt->fetch(PDO::FETCH_ASSOC);
$password = $stmt->fetch(PDO::FETCH_ASSOC);

if ($user && $password) {
        // ログイン成功
        $_SESSION['user'] = $user['customer_name'];
        header("Location: home.php");
        exit;
    } else {
        // ログイン失敗
        echo "<p>ユーザーネームまたはパスワードが間違っています。</p>";
        echo "<a href='rogin.html'>戻る</a>";
    }
?>
