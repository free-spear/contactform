<?php

mb_internal_encoding("utf8");
$pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "");

$sql = "insert into contactform(name, mail, age, comments) values(?, ?, ?, ?)";
$stmt = $pdo->prepare($sql);

$stmt->bindValue(1, $_POST['name']);
$stmt->bindValue(2, $_POST['mailaddress']);
$stmt->bindValue(3, $_POST['age']);
$stmt->bindValue(4, $_POST['comment']);

$stmt->execute();

?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style2.css">
    <title>お問い合わせフォーム</title>
  </head>

  <body>
    <h1>お問い合わせフォーム</h1>

    <div class="confirm">
      <p>
        お問い合わせありがとうございました。<br>3営業日以内に担当者よりご連絡差し上げます。
      </p>
    </div>
  </body>
</html>