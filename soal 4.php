<?php
function fac($asal){ 
    $fac = 1; 
    for ($i = 1; $i <= $asal; $i++){ 
      $fac = $fac * $i; 
    } 
    return $fac; 
}
function count_handshake($r){ 
$orang = fac($r); 
$jabat = fac(2); 
$hitung = fac($r - 2);
$bawah = $jabat * $hitung;
$atas = $orang / $bawah;
echo $atas;
} 
count_handshake(3);
?>