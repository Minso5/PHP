<?php
function swap01($a, $b){
    $temp = $a;
    $a = $b;
    $b = $temp;
}
$i = 1;
$j = 6;

print "\$i = $i, \$j = $j <br>";
swap01($i, $j);
print "\$i = $i, \$j = $j <br><hr>";

function swap02(&$a, &$b){   //call by reference(address)
                            // 주소에 있는 값을 처리 
    $temp = $a;
    $a = $b;
    $b = $temp;
}
$i = 1;
$j = 6;

print "\$i = $i, \$j = $j <br>";
swap02($i, $j);
print "\$i = $i, \$j = $j <br>";
?>