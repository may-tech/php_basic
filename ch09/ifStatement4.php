<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    <?php
      $var=15;
      echo"\$var=".$var."→";
    
//      変数の値で条件判定
      if($var){
        echo"TRUE<br>\n";
      }else{
        echo"FALSE<br>\n";
      } 
    
//      変数の値を変更
      $var='0';
      echo"\$var='".$var."'→";
      
    
//      変数の値で条件判定
      if($var){
        echo"TRUE<br>\n";
      }else{
        echo"FALSE<br>\n";
      }
    
    ?>
    
  </body>
</html>

  