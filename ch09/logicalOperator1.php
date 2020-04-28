<?php
  $num=$_POST['number'];

  if(0<=$num&&$num<=10){
    $msg=$num."は有効範囲の値です。\n";
  }else{
    $msg=$num."は有効範囲の値ではありません。\n";
  }

?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
  <?php
//    判定結果のメッセージ
    echo $msg;
    ?>
    <p>
      <a href="andForm.php">return</a>
    </p>
  </body>
</html>

  