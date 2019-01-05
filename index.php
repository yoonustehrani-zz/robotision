<?php 
// echo "hello world";
// You must have a loop
for ($i=0; $i < 3; $i++) {
	switch ($i) {
		case 1:
			$numb = "first";
		break;
		case 2:
			$numb = "sceond";
		default:
			$num = "third";
		break;
	} 
	echo "hello for the ".$numb." time";
}
