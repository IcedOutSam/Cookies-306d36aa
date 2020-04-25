<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>0_0</title>
  </head>
  <body>
    <h1>Zeewater(1)</h1>
    <h1>Zwembadwater(2)</h1>
    <h1>Natriumchloride(3)</h1>
    <form method='post'>
    <label for='text'> Voeg een product toe aan uw winkelwagen: </label>
    <input type='text' name='name' id='0123'>
    <input type='submit' name="Laurens" value='Submit'>
    </form>
    <?php

if (isset($_POST["Laurens"])) {
 $_COOKIE["name"] = $_POST["name"];
 echo "U heeft het product " . $_COOKIE["name"] . " gekozen";
}

?>
 </body>
</html>
