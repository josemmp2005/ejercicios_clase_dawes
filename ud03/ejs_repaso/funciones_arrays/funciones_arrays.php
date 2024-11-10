<?php
$aElementos = array("1", 2, "4s", 3, 4);

asort($aElementos);

foreach ($aElementos as $elemento) {
    echo $elemento;
}
echo "<br>";
arsort($aElementos);

foreach ($aElementos as $elemento) {
    echo $elemento;
}
echo "<br>";

$age = array(
    "Peter" => 35,
    "Ben" => 37,
    "Joe" => 43
);

ksort($age);
foreach ($age as $key => $value) {
    echo $key . ":" . $value . "---";

}

echo "<br>";
?>
