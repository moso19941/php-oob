<?php
echo "<h2>Video 1</h2><br>";

$object = new stdClass;

$object->names = ['john', 'sulaiman', 'max'];

foreach ($object->names as $name){
	echo $name . '<br>';
}