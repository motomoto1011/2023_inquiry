<?php
//データ取得
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$checkbox=$_POST["checkbox"];
$category=$_POST["category"];
$message=$_POST["message"];


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>2023 お問合せ_confirm</title>
</head>
<body>
  <h2>記入内容をご確認ください</h2>
  <p>問題なければ「確定」、修正する場合は「キャンセル」をクリックしてください。</p>

  <table border="1">
    <tr>
      <th>項目</th>
      <ht>入力内容</ht>
    </tr>
    <tr>
      <td>お名前</td>
      <td><<?php echo $name;?></td>
    </tr>
    <tr>
      <td>メールアドレス</td>
      <td><?php echo $email; ?></td>
    </tr>
    <tr>
      <td>性別</td>
      <td><?php echo $gender; ?></td>
    </tr>
    <tr>
      <td>お問合せ種別</td>
      <th><?php echo $category; ?></th>
    </tr>
    <tr>
      <td>お問合せ内容</td>
      <th><?php echo $message; ?></th>
    </tr>
  </table>
  <p>
    <button id="OK_btn" onclick="location.href='complete.php';">確定</button>
    <button id="cansel_btn" onclick="history.back();">キャンセル</button>
  </p>

</body>
</html>