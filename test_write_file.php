<?php

function writeLineByLine($file, $lines)
{
	$fh = fopen($file, 'w');
	foreach ($lines as $line) {
		fwrite($fh, $line . PHP_EOL);
	}

	fclose($fh);
}

function writeOnce($file, $lines)
{
	file_put_contents($file, implode(PHP_EOL, $lines));
}

writeLineByLine('./test.txt', ['abc', 'cdef', 'hij']);
writeOnce('./test2.txt', ['abc', 'cdef', 'hij']);

?>