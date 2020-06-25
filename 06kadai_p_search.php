<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>患者検索</title>
</head>

<body>
   <form action="result.php" method="POST">
      <h2>患者検索</h2>
      <p>カルテNo.検索</p>
      <input type="text" name="krt">
      <p>カナ検索</p>
      <input type="text" name="kn">
      <p>名前検索</p>
      <input type="text" name="nm">
      <button>検索</button>
   </form>

</body>

</html>








<!-- //?php
// データ取得SQL作成
// $sql = 'SELECT * FROM schedule_share';

// $where = [];
// if (!empty($params['karte'])) {
// $where[] = "karte like '%{$params['karte']}%'";
// }
// if (!empty($params['kana'])) {
// $where[] = "kana like '%{$params['kana']}%'";
// }
// if (!empty($params['name'])) {
// $where[] = "name like '%{$params['name']}%'";
// }
// if ($where) {
// $whereSql = implode(' AND ', $where);
// $sql = 'select * from schedule_share where ' . $whereSql;
// } else {
// $sql = 'select * from schedule_share';
// }
?> -->