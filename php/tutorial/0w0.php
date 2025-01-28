<?php
if ($argc !== 2) {
	echo "Usage: php 0w0.php <name>" . PHP_EOL;
exit(1);
}
$name=$argv[1];
echo "this is php $name" . PHP_EOL;
