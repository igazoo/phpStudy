<?php
//文字列の長さ
// strlen();
//マルチバイト
//日本語　UTFー8　３〜６バイト　日本語1文字を３バイトで数える
// mb_strlen();
$txt = "アイウエオ";
//echo strlen($txt);
echo mb_strlen($txt);

//文字列の置換
//str_replace("","",$);
$str = "文字列を置換する";
echo str_replace("置換", "チカン", $str);

//正規表現
//文字かどうか
//数字かどうか
//メールアドレスかどうか
$str_3 = "特定の文字列が含まれるか確認する";
echo preg_match("/文字列/", $str_3);

//指定文字列から文字列を取得する
echo substr('abcde', 1);
echo "<br>";
//配列に配列を追加する

$array = ['りんご', 'みかん'];
array_push($array, 'ぶどう', 'なし');

var_dump($array);


$postalCode = "123-4567";

//camelCase
function checkPostalCode($str)
{
  $replaced = str_replace('-', '', $str);
  $length = strlen($replaced);

  if ($length === 7) {
    return true;
  }
  return false;
}
var_dump(checkPostalCode($postalCode));
echo '<br>';

$globalVariable = "グローバル変数です";
function checkScope()
{
  $localVariable = "ローカル変数です";
  echo $localVariable;
}
echo $globalVariable;

checkScope();
echo "<br>";

//ファイルの共有
require 'common.php';
echo $commonVariable;


echo __DIR__;//絶対パス
