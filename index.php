<?php
  $a1 = isset($_GET['a1']) ? $_GET['a1'] : 0;
  $a2 = isset($_GET['a2']) ? $_GET['a2'] : 0;

  $proses = isset($_GET['proses']) ? $_GET['proses'] : '';
  $hasil = '';
  
  if($proses == "+")
    $hasil = $a1 + $a2;
  else if($proses == "-")
    $hasil = $a1 - $a2;
  else if($proses == "x")
    $hasil = $a1 * $a2;
  else if($proses == ":")
    $hasil = $a1 / $a2;
  else if($proses == "^")
    $hasil = exp($a2 * log($a1));  
?>

<!DOCTYPE HTML>
<html>
  <head>
  <title>Kalkulator</title>
    <link href="set.css" rel="stylesheet" type="text/css" />
  </head>
<body>
<form id="hitung" method="get" action="#">
  <table align="center" class="table">
    <tr>
      <th colspan="2" align="center" scope="col"><img src="image/header.jpg" height="125" alt="" /></th>
    </tr>
    <tr>
      <td align="left"><label class="text"> Angka 1</label></td>
      <td align="left">:<input id="a1" name="a1" type="text" size="40" value="<?= $a1;?>" onfocus="this.value=''"/></td>
    </tr>
    <tr>
      <td align="left"><label class="text">Angka 2</label></td>
      <td align="left">:<input id="a2" name="a2" type="text" size="40" value="<?= $a2;?>" onFocus="this.value=''"/></td>
    </tr>
    <tr>
      <td align="left"><label class="text"><bling>Hasil</bling></label></td>
      <td align="left">:<input type="text" name="hasil" value="<?= $hasil;?>" size="40" disabled/></td>
    </tr>
    <tr>
      <td colspan="2" align="center" valign="top"><hr>
        <input name="proses" type="submit" class="css" value="+"/>
        <input name="proses" type="submit" class="css" value="-"/>
        <input name="proses" type="submit" class="css" value="x"/>
        <input name="proses" type="submit" class="css" value=":"/>
        <input name="proses" type="submit" class="css" value="^"/>
      </td>
    </tr>
    <tr>
      <td colspan="2" align="center" class="footer">Design by : Muhamad Alfan &copy; 2012</td>
    </tr>
  </table>
</form>
</body>
</html>
