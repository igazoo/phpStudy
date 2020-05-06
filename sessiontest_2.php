<?php
  session_start();
 ?>



<html>
  <head>

  </head>
  <body>
    <?php
    echo 'セッションを破棄しました';

    $_SESSION=[];

    if(isset($_COOKIE['PHPSESSID'])){
      setcookie('PHPSESSID','',time() - 1800, '/');
    }
    session_destroy();

    echo'セッション';

    var_dump($_SESSION);
     ?>
  </body>
</html>
