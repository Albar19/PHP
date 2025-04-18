<?php
$NA = 70;

if ($NA >= 90) {
    $HM = 'A';
} elseif ($NA >= 70) {
    $HM = 'B';
} elseif ($NA >= 60) {
    $HM = 'C';
} elseif ($NA >= 50) {
    $HM = 'D';
} elseif ($NA >50) {
    $HM = 'E';
}

echo "Nilai Anda = $NA<br>Huruf Mutu = $HM";
?>