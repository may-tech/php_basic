<?php
//  リンクのGET送信データを各変数に代入
  $linkGETData1=$_GET['nickName'];
  $linkGETData2=$_GET['address'];  
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
  <?php 
    echo "・\$_GETで取得したデータを表示<br>\n";
    echo "ニックネーム「{$linkGETData1}」さんは「{$linkGETData2}」出身。<br>";
    ?>
  </body>
</html>

  