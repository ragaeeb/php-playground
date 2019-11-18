<?php

function readFileLineByLine($file)
{
	$data = file($file);
	foreach ($data as $line) {
		echo $line;
	}
}

function readFile($file)
{
	$data = file_get_contents($file);
	return $data;
}

readFile('./test_dir_structure.php');
readFileLineByLine('./test_dir_structure.php');

?>