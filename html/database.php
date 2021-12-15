<?php
$pdo = new PDO("mysql:host=db;dbname=mydb","root","secret");
$rows = $pdo->query("select * from fruits");
?>
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database</title>
</head>
<body>
  <h3>Database</h3>
  <hr>
  <ul>
    <?php foreach($rows as $row) {  ?>
    <li><?= htmlspecialchars($row["name"], ENT_QUOTES) ?></li>
    <?php }?>
  </ul>
</body>
</html>