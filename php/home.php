<?php
session_start();

// ログインしていない場合はログインページへ
if (!isset($_SESSION['user'])) {
    header("Location: login.html");
    exit;
}

$user = $_SESSION['user']; // ログイン中ユーザー情報
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>POCKET ROOM ホーム</title>
</head>
<body>
    <h2>POCKET ROOM</h2>
    <p>ようこそ、<?php echo htmlspecialchars($user['customer_name']); ?> さん！</p>

    <form  action="search.php" method="post">
        <label>検索：</label>
        <input type="text" name="keyword">
        <input type="submit" value="検索">
    </form>

    <h3>カテゴリ一覧</h3>
    <ul>
        <li><a href="#">リビング</a></li>
        <li><a href="#">キッチン</a></li>
        <li><a href="#">ダイニング</a></li>
        <li><a href="#">寝室</a></li>
        <li><a href="#">書斎・子供部屋</a></li>
        <li><a href="#">バスルーム</a></li>
    </ul>

    <hr>

    <p>
        <a href="favorite.php">お気に入り</a> |
        <a href="cart.php">カート</a> |
        <a href="mypage.php">マイページ</a> |
        <a href="logout.php">ログアウト</a>
    </p>
</body>
</html>