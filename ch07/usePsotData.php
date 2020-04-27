<?php
  $postData1=$_POST['nickName'];
  $postData2=$_POST['door'];  

  $getData1=$_GET['nickName'];
  $getData2=$_GET['door'];

?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
  <?php
    echo "・\$_POSTで取得したデータを表示 <br>\n";
    echo "ニックネーム「{$postData1}」さんは「{$postData2}」派。<br>"; 
    
    echo "・\$_GETで取得したデータを表示(取得できないことの確認) <br>\n";
    echo "ニックネーム「{$getData1}」さんは「{$getData2}」派。<br>";
    ?>
  </body>
</html>

  