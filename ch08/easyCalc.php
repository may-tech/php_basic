<?php
  $nums=array(0,1,3,5,7,9);
  $num=3;

//  複合演算子を利用して計算
  $nums[0]+=$num;  //加算代入
  $nums[1]-=$num;  //減算代入
  $nums[2]*=$num;  //乗算代入
  $nums[3]/=$num;  //除算代入
  $nums[4]%=$num;  //剰余代入
  $nums[5].=$num;  //連結代入
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
  <?php
    echo "配列初期値→計算後の配列の各値<br>\n";
    echo "\$nums[0]=0→".$nums[0]."<br>\n";
    echo "\$nums[1]=1→".$nums[1]."<br>\n";
    echo "\$nums[2]=3→".$nums[2]."<br>\n";
    echo "\$nums[3]=5→".$nums[3]."<br>\n";
    echo "\$nums[4]=7→".$nums[4]."<br>\n";
    echo "\$nums[5]=9→".$nums[5]."<br>\n";
    echo "<br>\n";
    $nums[5]++;  //インクリメント（１ずつ増やす）
    echo "\$nums[5]=93→".$nums[5]."<br>\n";
    ?>
  </body>
</html>

  