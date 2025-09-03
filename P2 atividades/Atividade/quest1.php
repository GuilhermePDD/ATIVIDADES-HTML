<?php

$custo = $_POST['cus'];

if ($custo<40000){
    $vt = $custo * 1.05;
    echo "O valor total será:$vt";
}
elseif ($custo>=40000 && $custo<70000) {
    $vt = $custo * 1.25;
    echo "O valor total será:$vt";
}
else {
    $vt = $custo * 1.35;
    echo "O valor total será:$vt";
}
?>