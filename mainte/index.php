<?php
require 'db_connection.php';

// ユーザ入力なし
// $sql = 'select * from contacts where id = 2'; //sql
// $stmt = $pdo->query($sql); //sql実行 ステートメント
//
// $result = $stmt->fetchall();
// echo '<pre>';
//
// var_dump($result);
// echo '</pre>';

//ユーザー入力あり　prepare, bind ,execute

$sql = 'select * from contacts where id = :id'; //名前付きプレースホルダー
$stmt = $pdo ->prepare($sql);//プリペアードステートメント
$stmt->bindValue('id',3,PDO::PARAM_INT);//紐付け
$stmt->execute();//実行
$result = $stmt->fetchall();
echo '<pre>';

var_dump($result);
echo '</pre>';

//トランザクション まとめて処理 beginTransaction , commit , rollback
//ex)銀行　残高を確認->aさんから引き落とし->bさんに振り込み

$pdo->beginTransaction();

try{
  $stmt = $pdo ->prepare($sql);//プリペアードステートメント
  $stmt->bindValue('id',3,PDO::PARAM_INT);//紐付け
  $stmt->execute();//実行

  $pdo->commit//実行
}catch(PDOException $e){
  $pdo->rollback();//更新のキャンセル
}



?>
