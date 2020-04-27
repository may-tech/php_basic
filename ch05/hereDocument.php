<?php
  $name="kanndahanako";
  $height=154.6;
  $age=36;
  $age2=37;

//ヒアドキュメント
  $output=<<<EOF
  {$name}さんの身長は{$height}cmです。<br>
      年齢は{$age}歳です。<br>
      あと1ヶ月で{$age2}歳になります。
//↓スペース開けない！
EOF;
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
  <?php
    echo $output;
    ?>
  </body>
</html>

  