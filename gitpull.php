<?php
	header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
	header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past
	//$output = `git pull`;
	$output = `git pull && git submodule foreach git checkout master && git submodule foreach git pull origin master`;
	echo "<pre>$output</pre>";
?>