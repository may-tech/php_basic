<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  </head>
  <body>
    <?php
      for($i=0;$i<3;$i++){
        echo "(\$i=0;\$i<3;\$i++)<br>\n";
      }
    ?>
    <ul>
      <li>$i=0:初期化の式</li>
      <li>$i＜3:反復条件・回数の式</li>
      <li>$i++:繰り返し後の操作の式</li>
    </ul>
    <p>初期化→条件の真偽→表示→$i＋１→条件の真偽→表示→$i＋１条件の真偽→表示→$i＋１条件の真偽→終了</p>
  </body>
</html>