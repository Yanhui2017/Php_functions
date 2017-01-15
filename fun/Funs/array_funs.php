<?php

// array_push
$array = array();
for($i = 0; $i < 10; $i++){
	$array[] = ['item'=>[1,2,3]];
}

var_dump($array);
echo json_encode($array);

