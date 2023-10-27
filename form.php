


<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>2023 お問合せ_form</title>
  <link rel="stylesheet" href="./form.css">
  <script src="./form.js"></script>
</head>
<body>
  <h2>お問い合せ</h2>
  <form action="confirm.php" method="post">

    <label for="">お名前：</label>
      <input type="text" name="name" placeholder="（例）山田太郎"><br>

    <label for="" >メールアドレス：</label>
      <input type="email" name="email"placeholder="（例）*****@****.***"><br>

    <label for="">性別： </label>
      <input type="radio" name="gender" value="男性"><label>男性　</label>
      <input type="radio" name="gender" value="女性"><label>女性　</label>
      <input type="radio" name="gender" value="その他"><label>その他</label><br>

    <label for="">利用規約に同意する：</label>
      <input type="checkbox"><br>

    <label for="">お問合せ種別：</label>
      <select name="category" id="" >
        <option >ご意見やご感想</option>
        <option >不具合について</option>
        <option >その他</option>
      </select><br>

    <label for="">お問合せ内容： </label>
      <textarea name="message" id="" cols="30" rows="5" placeholder="お問合せ内容をここに記入してください。"></textarea><br>

    <input type="submit" value="送信">
    <input type="reset">
  </form>

</body>
</html>