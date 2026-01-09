<?php
$txt1 = "Learn PHP"; 
$txt2 = "W3Schools.com"; 
echo "<h2>$txt1</h2>"; 
echo "<p>Study PHP at $txt2</p>";
echo '<h2>'. $txt1 . '</h2>'; 
echo '<p>Study PHP at ' . $txt2 . '</p>' ;
?> 
<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo "I love " . $txt .$x.$y. "!";
echo $x + $y;
echo "</br>";
$cars =array("Volvo","BMW","Toyota");
var_dump($cars);
$colors =array("red","green","blue","yellow");
foreach($colors as $value) 
{
    echo"$value <br>";
}

$x = 5985;
var_dump($x);

$y = 10.365;
var_dump($y);

$cars = array("Volvo", "BMW", "Toyota");
var_dump($cars);
$age = array("Peter" => "35", "Ben" => "37", "Joe" => "43");

foreach ($age as $x => $val) {
  echo "$x = $val<br>";
}



echo $_SERVER['PHP_SELF'];

echo "<br>";

echo $_SERVER['SERVER_NAME'];

echo "<br>";

echo $_SERVER['HTTP_HOST'];

echo "<br>";

echo $_SERVER['HTTP_REFERER'];

echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];

echo "<br>";

echo $_SERVER['SCRIPT_NAME'];

?>


