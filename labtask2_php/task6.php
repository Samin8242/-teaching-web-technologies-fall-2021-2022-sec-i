<?php

$search = array(10, 20, 30,40);
$val=30;
$check=0;

for($i=0;$i<4;$i++){
	
	if($search[$i]==$val){
		
		echo $val." The element is in the array";
		$check=1;
	}
	
}

if($check==0)
{
	echo $val." The element is absent in the array ";
}

?>