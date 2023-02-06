<?php
if (isset($_POST['submit'])) {
    $n1 = $_POST['n1'];
    $n2 = $_POST['n2'];
    $n3 = $_POST['n3'];
    $max = $n1;
    if ($n2 > $max) $max = $n2;
    if ($n3 > $max) $max = $n3;
    echo $max;
    echo "<br>";
    echo $b=$n1+$n2+$n3;
    echo "<br>";
    echo $b/3;
}
?>

