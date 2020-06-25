<?php

// 送信確認
// var_dump($_POST);
// exit();

// 項目入力のチェック
// 値が存在しないor空で送信されてきた場合はNGにする
if (
   !isset($_POST["karte"]) || $_POST["karte"] == "" ||
   !isset($_POST["kana"]) || $_POST["kana"] == "" ||
   !isset($_POST["name"]) || $_POST["name"] == "" ||
   !isset($_POST["age"]) || $_POST["age"] == "" ||
   !isset($_POST["sex"]) || $_POST["sex"] == "" ||
   !isset($_POST["address"]) || $_POST["address"] == "" 
   // !isset($_POST["angle"]) || $_POST["angle"] == "" ||
   // !isset($_POST["absorption"]) || $_POST["absorption"] == "" ||
   // !isset($_POST["kennedy"]) || $_POST["kennedy"] == "" ||
   // !isset($_POST["eichner"]) || $_POST["eichner"] == "" ||
   // !isset($_POST["text"]) || $_POST["text"] == ""
) {
   exit("ParamError");
}

// 受け取ったデータを変数に入れる
$karte = $_POST["karte"];
$kana = $_POST["kana"];
$name = $_POST["name"];
$age = $_POST["age"];
$sex = $_POST["sex"];
$address = $_POST["address"];
// $angle = $_POST["angle"];
// $absorption = $_POST["absorption"];
// $kennedy = $_POST["kennedy"];
// $eichner = $_POST["eichner"];
// $text = $_POST["text"];

//空でもOKなものたち
$angle = isset($_POST["angle"]) ? $_POST["angle"] : NULL;  //$_POST["angle"];
$absorption = isset($_POST["absorption"]) ? $_POST["absorption"] : NULL;  //$_POST["absorption"];
$kennedy =  isset($_POST["kennedy"]) ? $_POST["kennedy"] : NULL;   //$_POST["kennedy"];
$eichner = isset($_POST["eichner"]) ? $_POST["eichner"] : NULL;   //$_POST["eichner"];
$text = isset($_POST["text"]) ? $_POST["text"] : NULL;   //$_POST["text"];

// DB接続の設定
$dbn = 'mysql:dbname=06_kadai_babahirono;charset=utf8;port=3306;host=localhost';
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

// データ登録SQL作成
// `created_at`と`updated_at`には実行時の`sysdate()`関数を用いて実行時の日時を入力する
$sql = 'INSERT INTO schedule_share(id, karte, kana, name, age, sex, address, angle, absorption, kennedy, eichner, text, created_at, updated_at) 
VALUES (NULL, :karte, :kana, :name, :age, :sex, :address, :angle, :absorption, :kennedy, :eichner, :text, sysdate(),sysdate())';

// SQL準備&実行
$stmt = $pdo->prepare($sql);
$stmt->bindValue(":karte", $karte, PDO::PARAM_STR);
$stmt->bindValue(":kana", $kana, PDO::PARAM_STR);
$stmt->bindValue(":name", $name, PDO::PARAM_STR);
$stmt->bindValue(":age", $age, PDO::PARAM_STR);
$stmt->bindValue(":sex", $sex, PDO::PARAM_STR);
$stmt->bindValue(":address", $address, PDO::PARAM_STR);
$stmt->bindValue(":angle", $angle, PDO::PARAM_STR);
$stmt->bindValue(":absorption", $absorption, PDO::PARAM_STR);
$stmt->bindValue(":kennedy", $kennedy, PDO::PARAM_STR);
$stmt->bindValue(":eichner", $eichner, PDO::PARAM_STR);
$stmt->bindValue(":text", $text, PDO::PARAM_STR);
$status = $stmt->execute();

// データ登録処理後
if ($status == false) {
   // SQL実行に失敗した場合はここでエラーを出力し，以降の処理を中止する
   $error = $stmt->errorInfo();
   exit("sqlError:" . $error[2]);
} else {
   // 正常にSQLが実行された場合は入力ページファイルに移動し，入力ページの処理を実行する
   header("Location:06kadai_input.php");
}

