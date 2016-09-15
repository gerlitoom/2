<?php

	$age = 5;
	if ($age < 18) {
		//true-on vaiksem kui 18
		echo "alaealine";
		} 
	else {
		//muul juhul
		echo "taisealine";	
		}
		
?>

<br>

<?php

	for ($i=0; $i < $age; $i=$i+1){
		echo  "palju ";
	}
	echo "onne!";
?>

<br>

<?php

	echo date("r");

?>