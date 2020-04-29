<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    <?php
      $subject=array('国語','数学','理科','社会','英語');
      echo "科目は";
      foreach($subject as $val){
        echo"、".$val;
      }
      echo"です。<br>\n";
    
    $data=array(10,20,30,40,50);
    foreach($data as $key => $value){
      echo $key."番目は".$value."<br>\n";
    }
    ?>
    
    <p>$subject as $val</p>
    <p>$配列変数 as $要素格納変数（任意の文字列）</p>
    <p>$data as $key => $value</p>
    <p>$配列変数 as $キー値格納変数（任意の文字列） => $要素格納変数（任意の文字列）</p>
  </body>
</html>