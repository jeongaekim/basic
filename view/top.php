<?php
require_once('lib/print.php');//print 함수들을 사용하기 위해넣음

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      <?php
      print_title();
      ?>
    </title>
  </head>
  <body>
    <h1><a href="index.php">WEB</a></h1>
    <ol>
      <?php
          print_list();
          ?>
    </ol>
