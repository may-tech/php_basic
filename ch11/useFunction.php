<?php
  for($i=0;$i<4;$i++){
    $data1[]=mt_rand(0,6);//0〜6のランダム数値を一つ取得
  }

  $data2=$data1;//配列データをコピー

  rsort($data2);//降順に並び替え
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    ランダムデータ-−-並び替えたデータ<br>
    <?php
    //配列要素分だけ繰り返す, count($data1)=4
      for($i=0;$i<count($data1);$i++){
        echo "\$data1[{$i}]=".$data1[$i]."---\$data2[{$i}]=".$data2[$i]."<br>\n";
      }
    
      $val=123;
    if(is_numeric($val)){
      echo"if<br>";
    }else{
      echo"else<br>";
    }      
    $val=１２３;
    if(is_numeric($val)){
      echo"if<br>";
    }else{
      echo"else<br>";
    }      $val='';
    if(is_numeric($val)){
      echo"if<br>";
    }else{
      echo"else<br>";
    }      $val="";
    if(is_numeric($val)){
      echo"if<br>";
    }else{
      echo"else<br>";
    }      $val='789';
    if(is_numeric($val)){
      echo"if<br>";
    }else{
      echo"else<br>";
    }
    
    echo "substr('abcdef', 1)=".substr('abcdef', 1)."<br>\n";     // bcdef

    echo "substr('abcdef', -1, 1)=".substr('abcdef', -1, 1)."<br>\n"; // f

// 文字列中の 1 文字にアクセスすることも
// "角括弧" を使用することで可能
    $string = 'abcdef';
    echo "<br>\$string = 'abcdef'<br>\n";
      
    echo "\$string[0]=".$string[0]."<br>\n";                 // a
    echo "\$string[3]=".$string[3]."<br>\n";                 // d
    echo "\$string[strlen(\$string)-1]=".$string[strlen($string)-1]."<br>\n"; // f , strlen:文字列の長さ
    ?>

  </body>
</html>