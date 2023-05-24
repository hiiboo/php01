<?php
// ini_set("display_errors", 1); エラーを出すコード


function h($str){
    return htmlspecialchars($str,ENT_QUOTES);
}
$name = $_POST["name"]; //大文字で表記
$mail = $_POST["mail"];

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?= h($name) ?>
EMAIL：<?= h($mail) ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>