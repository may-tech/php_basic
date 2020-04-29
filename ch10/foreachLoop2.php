<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    <?php
      $subject=array('国語'=>69,'数学'=>95,'理科'=>92,'社会'=>32,'英語'=>56);
      $total=0;
    
      foreach($subject as $key => $val){
        echo $key.":".$val."点<br>\n";
        $total+=$val;
      }
    
      $avarage=$total/5;
    
      echo" 合計点".$total;
      echo"<br>平均点".$avarage;
    
//    for(;;){
//   echo"metods";
//}
    ?>

  </body>
</html>