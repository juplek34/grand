<?php
function myCountChar($t, $o){
$text = str_split($t);
$hasil=0;
 for ($i=0; $i <count($text); $i++) { 
 	if ($text[$i]==$o) {
 		$hasil=$hasil+1;
 	}
 }
 	return  $hasil;
}
echo myCountChar('arkademy','a');
?>