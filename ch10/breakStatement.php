<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    <?php
      for($i=0;$i<50;$i++){
        echo '$i='.$i."<br>\n";
        
        //$iが５の場合繰り返し中止
        if($i==5){
          break;
        }
      }
    
      echo '$i='.$i."まで繰り返した";
    ?>

  </body>
</html>