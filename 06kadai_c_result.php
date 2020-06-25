<?php
// DB接続の設定
// DB名は`gsacf_x00_00`にする
$dbn = 'mysql:dbname=06_kadai_babahirono;charset=utf8mb4;host=localhost';
$user = 'root';
$pwd = '';

try {
   // ここでDB接続処理を実行する
   $pdo = new PDO($dbn, $user, $pwd);
} catch (PDOException $e) {
   // DB接続に失敗した場合はここでエラーを出力し，以降の処理を中止する
   echo json_encode(["db error" => "{$e->getMessage()}"]);
   exit();
}

// データ取得SQL作成
// 変数に置き換え
$an = isset($_POST["an"]) ? $_POST["an"] : NULL;
$ab = isset($_POST["ab"]) ? $_POST["ab"] : NULL;
$ken = isset($_POST["ken"]) ? $_POST["ken"] : NULL;
$ei = isset($_POST["ei"]) ? $_POST["ei"] : NULL;

// $sql = 'SELECT * FROM schedule_share where angle="' . $an . '" AND absorption="' . $ab . '" AND kennedy="' . $ken . '" AND eichner="' . $ei . '" AND text LIKE "%' . $_POST["free"] . '%"';

// 条件分岐してみる
$where = [];
//angle
if (isset($an) && $an != "") {
   $where[] = " ( angle = '" . $an . "' ) ";
}
//absorption
if (isset($ab) && $ab != "") {
   $where[] = " ( absorption = '" . $ab . "' ) ";
}
//kennedy
if (isset($ken) && $ken != "") {
   $where[] = " ( kennedy = '" . $ken . "' ) ";
}
//eichner
if (isset($ei) && $ei != "") {
   $where[] = " ( eichner = '" . $ei . "' ) ";
}

$sql = 'SELECT * FROM schedule_share';

if (count($where) > 0) {
   $sql .= " where " . implode(" and ", $where);
}


// SQL準備&実行
$stmt = $pdo->prepare($sql);
$status = $stmt->execute();

// データ登録処理後
$view = "";

if ($status == false) {
   // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
   $error = $stmt->errorInfo();
   exit("sqlError:" . $error[2]);
} else {
   // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
   // fetchAll()関数でSQLで取得したレコードを配列で取得できる
   $result = $stmt->fetchAll(PDO::FETCH_ASSOC);  // データの出力用変数（初期値は空文字）を設定
   $output = "";
   // <tr><td>deadline</td><td>todo</td><tr>の形になるようにforeachで順番に$outputへデータを追加
   // `.=`は後ろに文字列を追加する，の意味
   foreach ($result as $record) {
      $output .= "<tr>";
      $output .= "<td>{$record["karte"]}</td>";
      $output .= "<td>{$record["age"]}</td>";
      $output .= "<td>{$record["sex"]}</td>";
      $output .= "<td>{$record["angle"]}</td>";
      $output .= "<td>{$record["absorption"]}</td>";
      $output .= "<td>{$record["kennedy"]}</td>";
      $output .= "<td>{$record["eichner"]}</td>";
      $output .= "<td>{$record["text"]}</td>";
      $output .= "</tr>";
   }
}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>DB連携型todoリスト（一覧画面）</title>
</head>

<body>
   <fieldset>
      <legend>患者検索結果</legend>
      <a href="06kadai_p_search.php">入力画面</a>
      <table>
         <thead>
            <tr>
               <th>カルテNo.</th>
               <th>年齢</th>
               <th>性別</th>
               <th>顎間関係</th>
               <th>顎堤吸収</th>
               <th>Kennedy分類</th>
               <th>Eichner分類</th>
               <th>特記事項</th>
            </tr>
         </thead>
         <tbody>
            <?= $output ?>
         </tbody>
      </table>
   </fieldset>

   <style>
      body {
         background-color: #F1F1F2;
         margin: 0 auto;
         text-align: center;
         color: #685161;
      }

      legend {
         font-size: 1.5em;
      }

      table {
         width: 700px;
      }
   </style>

</body>

</html>