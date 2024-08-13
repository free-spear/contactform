<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style2.css">
    <title>お問い合わせ内容確認</title>
  </head>

  <body>
    <h1>お問い合わせ内容確認</h1>

    <div class="confirm">
      <p>お問い合わせ内容はこちらで宜しいでしょうか？</p>
      <p>よろしければ「送信する」ボタンを押してください。</p>

      <p>名前</p>
      <p><?php echo $_POST['name']; ?></p>

      <p>メールアドレス</p>
      <p><?php echo $_POST['mailaddress']; ?></p>

      <p>年齢</p>
      <p><?php echo $_POST['age']."歳"; ?></p>

      <p>コメント</p>
      <p><?php echo $_POST['comment']; ?></p>
      
      <div class="button">
        <form action="index.html">
          <input type="submit" class="button1" value="戻って修正する">
        </form>

        <form action="insert.php" method="post">
          <input type="submit" class="button2" value="登録する">
          <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
          <input type="hidden" value="<?php echo $_POST['mailaddress']; ?>" name="mailaddress">
          <input type="hidden" value="<?php echo $_POST['age']; ?>" name="age">
          <input type="hidden" value="<?php echo $_POST['comment']; ?>" name="comment">
        </form>
      </div>
    </div>
  </body>
</html>