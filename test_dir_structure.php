<?php

function readFolderFiles($dir)
{
	$files = scandir($dir);
	echo '<ul>';
	foreach ($files as $file) {
		echo '<li>';

		if ( is_dir($dir . '/' . $file) ) {
			echo $file;
			readFolderFiles($dir . '/' . $file);
		} else {
			echo '<a href="' . $dir . '/' . $file . '">' . $file . '</a>';
		}

		echo '</li>';
	}
	echo '</ul>';
}

readFolderFiles('./api/db');

?>