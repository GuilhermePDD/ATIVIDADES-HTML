<?php
                    
$sal = $_POST['sal'];
$com = $_POST['com'];

$ap = $com * 0.04 + $sal;
echo "O salário recebido é de $sal, mais 4% da comissão, que é $com, ficará no total de: $ap";

?>