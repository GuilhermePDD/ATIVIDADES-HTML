<?php

$bmr = $_POST['bmr'];
$bmn = $_POST['bmn'];
$alt = $_POST['alt'];

$calc = ($bmn+$bmr)/2*$alt;
echo "A área total do trapézio é de:$calc";

?>