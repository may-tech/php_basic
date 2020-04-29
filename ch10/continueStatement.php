<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    <?php
      for($i=0;$i<50;$i++){
        
        //$iが偶数の場合スキップ
        if(($i%2)==0){
          continue;
        }
        
        echo '$i='.$i."<br>\n";
      }
    
      echo '$i='.$i."まで繰り返した";
    ?>

  </body>
</html>