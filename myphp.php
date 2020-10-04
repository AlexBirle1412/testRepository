<?php
$myfrm = '
<!doctype html>
<html>
<form method="POST" action="">
   <input type="text"
          size="48"
          name="sir_numere"
          placeholder="introduceti numerele separate prin virgula">
   <input type="submit">
</form>';
if (!isset($_POST['sir_numere'])){
echo "<br/>vom aduna cateva numere $myfrm";
}
else {
// echo $myfrm;
$sir = $_POST['sir_numere'];
 $arr = explode(',',$sir);
$nr = count($arr);
echo "<br/>suma celor $nr numere: ";
 $sir = "";
$sum = 0;
foreach($arr as $value){
$sum += $value;
$sir .= $value . " + ";
}
$sir = substr($sir, 0, -3);   //ca sa nu afiseze ultimul egal
echo "$sir = <span style='border:
1px solid grey;padding:3px;background-color:#dedede;'> $sum </span>
     <br/><br/>
     <form><input type='submit' value='clear'></form>";
}
?>