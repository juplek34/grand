<?php 
function segitiga($deret){
if($deret >= 11){
	echo "lebih dari 10";
}
else{
	for($i=1;$i<=$deret;$i++) { 
	for($j=1;$j<=$i;$j++) { 
		echo "$j, &nbsp"; 
	} 
		echo "<br>"; 
	}  
}
}
segitiga(7);
?>