<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="index.css" />
    <title>ТАБЛИЦЫ ИСТИННОСТИ И СРАВНЕНИЯ</title>
  </head>
  <body>
    <h1>Таблица истинности</h1>
  <table>
<thead>
<tr><th><strong>A</strong></th><th><strong>B</strong></th><th><strong>!A</strong></th><th><strong>A || B</strong></th><th><strong>A &amp;&amp; B</strong></th><th><strong>A xor B</strong></th></tr>
</thead>
<tbody>
<tr>
<td>0</td>
<td>0</td>
<td>
  <?php
      $A = 0;
      echo !$A;
  ?>
</td>
<td>
<?php
  $B = 0;
  $A = 0;
  $result = ($A || $B) ? '1' : '0';
  echo ($result);
  ?>
</td>
<td>
<?php
  $B = 0;
  $A = 0;
  $result = ($A && $B) ? '1' : '0';
  echo ($result);
  ?>
</td>
<td>
<?php
  $B = 0;
  $A = 0;
  $result = ($A xor $B) ? '1' : '0';
  echo ($result);
  ?>
</tr>
<tr>
<td>0</td>
<td>1</td>
<td>
    <?php
        $A = 0;
        echo !$A;
    ?>
</td>
<td>
<?php
    $A = 0;
    $B = 1;
    $result = ($A || $B) ? '1' : '0';
    echo ($result);
    ?>
</td>
<td>
<?php
    $A = 0;
    $B = 1;
    $result = ($A && $B) ? '1' : '0';
    echo ($result);
    ?>
</td>
<td>
<?php
    $A = 0;
    $B = 1;
    $result = ($A xor $B) ? '1' : '0';
    echo ($result);
    ?>
</td>
</tr>
<tr>
<td>1</td>
<td>0</td>
<td>
  <?php
    $A = 1;
    $result = (!$A) ? '1' : '0';
    echo $result;
  ?>
</td>
<td>
  <?php
    $B = 0;
    $A = 1;
    $result = ($A || $B) ? '1' : '0';
    echo ($result);
  ?>
</td>
<td>
<?php
    $B = 0;
    $A = 1;
    $result = ($A && $B) ? '1' : '0';
    echo ($result);
    ?>
</td>
<td>
<?php
    $B = 0;
    $A = 1;
    $result = ($A xor $B) ? '1' : '0';
    echo ($result);
    ?>
</td>
  </tr>
</tr>
<tr>
<td>1</td>
<td>1</td>
<td>
        <?php
            $A = 1;
            $result = (!$A) ? '1' : '0';
            echo $result;
        ?>
    </td>
    <td>
    <?php
        $B = 1;
        $A = 1;
        $result = ($A || $B) ? '1' : '0';
        echo ($result);
        ?>
    </td>
    <td>
    <?php
        $B = 1;
        $A = 1;
        $result = ($A && $B) ? '1' : '0';
        echo ($result);
        ?>
    </td>
    <td>
    <?php
        $B = 1;
        $A = 1;
        $result = ($A xor $B) ? '1' : '0';
        echo ($result);
        ?>
    </td>
</tr>
</tbody>
</table>
<h1>Гибкое сравнение в PHP</h1>
<table>
<div class="big-table">
<table style="table-layout: fixed; width: 900px; margin: auto;">
<thead>
<tr><th width="10px"></th><th width="10px">true</th><th width="10px">false</th><th width="10px">1</th><th width="10px">0</th><th width="10px">-1</th><th width="10px">"1"</th><th width="10px">null</th><th width="10px">"php"</th></tr>
</thead>
<tbody>
<tr>
<td style="background-color: #f5f5f5;"><strong>true</strong></td>
<td>
  <?php
  $A = true;
  $B = true;
  echo $A == $B;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = false;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = 1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = 0;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = -1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = "1";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = null;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = "php";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>false</strong></td>
<td>
<?php
  $A = false;
  $B = true;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = false;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = 1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = 0;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = -1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = "1";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = null;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = "php";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>1</strong></td>
<td>
<?php
  $A = 1;
  $B = true;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = false;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = 1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = 0;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = -1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = "1";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = null;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = "php";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>0</strong></td>
<td>
<?php
  $A = 0;
  $B = true;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = false;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = 1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = 0;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = -1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = "1";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = null;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = "php";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>-1</strong></td>
<td>
<?php
  $A = -1;
  $B = true;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = false;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = 1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = 0;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = -1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = "1";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = null;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = "php";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
<td>
<?php
  $A = "1";
  $B = true;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = false;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = 1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = 0;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = -1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = "1";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = null;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = "php";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>null</strong></td>
<td>
<?php
  $A = null;
  $B = true;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = false;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = 1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = 0;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = -1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = "1";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = null;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = "php";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = true;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = false;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = 1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = 0;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = -1;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
  </td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = "1";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = null;
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
  </td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = null;
  $B = "php";
  $result = ($A == $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
</tbody>
<div>
</table>
<h1>Жёсткое сравнение в PHP</h1>
<table>
<div class="big-table">
<table style="table-layout: fixed; width: 900px; margin: auto;">
<thead>
<tr><th width="10px"></th><th width="10px">true</th><th width="10px">false</th><th width="10px">1</th><th width="10px">0</th><th width="10px">-1</th><th width="10px">"1"</th><th width="10px">null</th><th width="10px">"php"</th></tr>
</thead>
<tbody>
<tr>
<td style="background-color: #f5f5f5;"><strong>true</strong></td>
<td>
  <?php
  $A = true;
  $B = true;
  echo $A === $B;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = false;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = 1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = 0;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = -1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = "1";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = null;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = true;
  $B = "php";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>false</strong></td>
<td>
<?php
  $A = false;
  $B = true;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = false;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = 1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = 0;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = -1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = "1";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = null;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = false;
  $B = "php";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>1</strong></td>
<td>
<?php
  $A = 1;
  $B = true;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = false;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = 1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = 0;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = -1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = "1";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = null;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 1;
  $B = "php";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>0</strong></td>
<td>
<?php
  $A = 0;
  $B = true;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = false;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = 1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = 0;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = -1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = "1";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = null;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = 0;
  $B = "php";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>-1</strong></td>
<td>
<?php
  $A = -1;
  $B = true;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = false;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = 1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = 0;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = -1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = "1";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = null;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = -1;
  $B = "php";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>"1"</strong></td>
<td>
<?php
  $A = "1";
  $B = true;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = false;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = 1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = 0;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = -1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = "1";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = null;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = "1";
  $B = "php";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="background-color: #f5f5f5;"><strong>null</strong></td>
<td>
<?php
  $A = null;
  $B = true;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = false;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = 1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = 0;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = -1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = "1";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = null;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td>
<?php
  $A = null;
  $B = "php";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
<tr>
<td style="font-size: 16px; white-space: nowrap; background-color: #f5f5f5;"><strong>"php"</strong></td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = true;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = false;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = 1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = 0;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = -1;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
  </td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = "1";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = "php";
  $B = null;
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
  </td>
<td style="font-size: 16px; white-space: nowrap;">
<?php
  $A = null;
  $B = "php";
  $result = ($A === $B) ? '1' : '0';
  echo $result;
  ?>
</td>
</tr>
</tbody>
</table>
</div>

