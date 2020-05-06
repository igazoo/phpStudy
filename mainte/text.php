<?php
  //パスワードを記録したファイルの場所

  echo __FILE__;
  ///Applications/MAMP/htdocs/php_test/mainte/text.php


  //パスワード（暗号化）
  echo '<br>';
  echo(password_hash('password123',PASSWORD_BCRYPT));
  echo "<br>";

  $contactFile = ".contact.dat";
 // //フィイルの読み込み
 //  $fileContents = file_get_contents($contactFile);
 //  echo $fileContents;
 //
 //  //ファイルに書き込み(上書き)
 //  //file_put_contents($contactFile, 'テスト');
 //
 //  //ファイルに追記
 //  file_put_contents($contactFile, '',FILE_APPEND);
 //  //配列、コンマで区切る
 //  $allData = flie($contactFile);
 //
 //  foreach($allData as $lineData){
 //    $lines = explode(",",$lineData);
 //    echo $lines[0].'<br>';
 //    echo $lines[1].'<br>';
 //  }

  $contents = fopen('$contactFile','a+');


  $addText = '1行追記'."\n";

  fwrite($contents, $addText);
  fclose($contents);
 ?>
