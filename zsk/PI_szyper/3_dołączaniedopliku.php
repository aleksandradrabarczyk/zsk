<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Początek pliku</h1>
    <?php

    include './3_1_file.php';  //dołącz jeśli istnieje
    include_once './3_1_file.php';

    require './3_1_file.php';  // wymagaj pliku
    require_once './3_1_file.php';

    ?>
    <h1>Koniec pliku</h1>
  </body>
</html>
