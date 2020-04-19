<?php
  $name="kanndahanako";
  $height=154.6;
  $age=36;
  $age2=37;

  $output=<<<EOF
  {$name}さんの身長は{$height}cmです。<br>
      年齢は{$age}歳です。<br>
      あと1ヶ月で{age2}歳になります。
EOF;
?>

<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;sha-set=UTF-8">
  </head>
  <body>
  <?php
    echo $output;
    ?>
  </body>
</html>

  