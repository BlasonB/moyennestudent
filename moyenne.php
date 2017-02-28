<?php
/**
 * Created by PhpStorm.
 * User: wilder1
 * Date: 27/02/17
 * Time: 17:24
 */

$students = [
    "Emmanuel"  => 42,
    "Thierry"   => 51,
    "Pascal"    => 45,
    "Eric"      => 48,
    "Nicolas"   => 19
];
foreach ($students as $name => $age){
    echo $name . ' a ' . $age . '</br>';
}
echo array_sum($students) / count ($students);
?>