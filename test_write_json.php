<?php

function writeJson($file)
{
	$book = [
		'title' => filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING),
		'published' => filter_input(INPUT_POST, 'published', FILTER_SANITIZE_NUMBER_FLOAT),
		'type' => filter_input(INPUT_POST, 'type', FILTER_SANITIZE_NUMBER_INT)
	];

	$json = json_encode($book, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
	file_put_contents($file, $json);
}

writeJson('./test3.json');

header('location: /api/get_collection.php?id=233')

?>