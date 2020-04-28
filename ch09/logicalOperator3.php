<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    <?php
      $bool=true;
    
//      普通に判定
      if($bool==true){
        echo"true<br>\n";
      }else{
        echo"false<br>\n";
      }
          
    
//      ！を使って判定結果を反転
      if(!($bool==true)){
        echo"true<br>\n";
      }else{
        echo"false<br>\n";
      }
    
    ?>
    <ul>
      <li>「&&」はすべての条件式が満たされたら処理を行う条件に</li>
      <li>「||」はどれかの条件式が満たされたら処理を行う条件に</li>
      <li>「!」は条件の判定結果をひっくり返したい場合に</li>
    </ul>
  </body>
</html>

  