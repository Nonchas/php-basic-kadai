<?php
$name = $_POST['employee_name'];
$age = $_POST['employee_age'];
$department = $_POST['department'];
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>課題WEBアプリ</title>
  </head>

  <body>
    <h2>登録が完了しました。</h2>
    <p>社員情報がデータベースに保存されました。</p>

    <button id="back-btn" onclick="location.href='form.php';">戻る</button>
  </body>
</html>