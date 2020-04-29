<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    <?php
      $total=0;
    
      for($i=1;$i<=5;$i++){
        echo "\$i=".$i."<br>\n";
        $total+=$i;
      }
      echo $i."未満の数値の統計は".$total."です。<br>\n";
    ?>
    <ul>
      <li>$total+=$i:カウンタ変数の値を加算</li>
    </ul>

  </body>
</html>