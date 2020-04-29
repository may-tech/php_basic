<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    <?php
      $subject=array('国語','数学','理科','社会','英語');
      $scores=array(69,95,92,32,56);
      $total=0;
      for($i=0;$i<5;$i++){
        echo $subject[$i].":".$scores[$i]."点<br>\n";
        $total+=$scores[$i];
      }
    
      $avarage=$total/5;
    
      echo"合計点".$total;
      echo"<br>平均点".$avarage;
    
//    for(;;){
//   echo"metods";
//}
    ?>

  </body>
</html>