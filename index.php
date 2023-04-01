<?php
//    TASK ONE
echo'<p style=color:orange> (TASK NUMBER ONE): </p><br>';
echo nl2br("welcome to our website \n CMS web <br> .");
//    TASK TWO
echo'<p style=color:orange> (TASK NUMBER TWO): </p><br>';
echo'<p style=color:red> First:chop() Function: <br> <p style=color:green>Remove characters from the right end of a string.</p> </p>';
echo '<p style=color:red>EXAMPLE:<br></p>';
$hello = "Hello World!";
echo $hello . "<br>";
echo chop($hello,"World!");



echo'<p style=color:red> Second:chr() Function <br> <p style=color:green>Return characters from different ASCII values.</p> </p>';
echo '<p style=color:red>EXAMPLE:<br></p>';
echo chr(52) . "<br>"; // Decimal value
echo chr(052) . "<br>"; // Octal value
echo chr(0x52) . "<br>"; // Hex value


echo'<p style=color:red> Third:chunk_split() Function <br> <p style=color:green>Split the string after each character and add a "." after each split:.</p> </p>';
echo '<p style=color:red>EXAMPLE:<br></p>';
$word = "Hello world!";
echo chunk_split($word,1,".");


//    TASK THREE
echo'<p style=color:orange> (TASK NUMBER THREE): </p>';

foreach ($_SERVER  as $key =>$value)
{
    echo '<br>'. $key,'=>'. $value;
}


//    TASK FOUR
echo'<p style=color:orange> (TASK NUMBER FOUR): </p>';
$numbers = array(12,45,10,25);
echo'<p style=color:blue> the array consists of </p>';
print_r($numbers).'<br>';
 $sum = array_sum($numbers);
 $count= count($numbers);
 $avg = $sum / $count;
  
  echo '<br>the sum of the numbers = '.$sum."<br>";
  echo 'the avg of the numbers = '.$avg.'<br>';
  echo'<p> the reverse order is </p>';
  krsort($numbers);
  print_r($numbers).'<br>';

//    TASK FIVE
echo'<p style=color:orange;>  (TASK NUMBER FIVE): </p>';
//    THE ARRAY
  $name= array('sara'=>31,'john'=>41,'walaa'=>39,'ramy'=>40);
  echo'<p style=color:blue>  the array consists of </p>';
 print_r($name).'<br>';
foreach ($name as $key => $val) {
    echo  "<br>$key = $val";
}
/////////  B
ksort($name);
 echo'<br><p style=color:red>ascending order by key  (B)</p>';
 print_r($name);
 foreach ($name as $key => $val) {
    echo  "<br>$key = $val";
}
///////////  D
krsort($name);
 echo'<br><p style=color:red>descinding order by key (D)</p>';
 print_r($name);
 foreach ($name as $key => $val) {
    echo  "<br>$key = $val";
}
 /////////// A
 asort($name);
 echo'<br><p style=color:red>ascending order by value (A)</p>';
 print_r($name);
 foreach ($name as $key => $val) {
    echo  "<br>$key = $val";
}
 ///////// C
 arsort($name);
 echo'<br><p style=color:red>descinding order by value (C)</p>';
 print_r($name);
 foreach ($name as $key => $val) {
    echo  "<br>$key = $val";
}

?>


