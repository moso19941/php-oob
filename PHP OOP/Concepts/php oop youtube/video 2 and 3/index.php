<?php

echo "<h2>Video 2 & 3</h2> <br>";

echo '<h3> video 2</h3> <br>';
require 'Person.php';

// here video 2
// without construct ******
$person = new Person ();

echo '<br>
		<h2 style="color:red" > the error occur beacuse we make consturct
		remove the argments from constuct to remove erros </h2>
		
		<br>';

echo "<h2 style='color:green'>without construct</h2>";
$person->name = 'Sulaiman';
$person->age = '22';

echo $person->name . ' is ' . $person->age . ' years old <br>';

// another way

$name = $person->name = 'Sulaiman';
$age = $person->age = '55';

echo $name . ' is ' . $age . ' years old <br>';


// from method
echo "From method -- > ";
$person->name = 'Someone';
$person->age = '18';

echo $person->sentence();

// $name = 'sulaiman';
// $age = 22;




// video 3

echo '<h3> video 3 </h3>';
echo "<h2 style='color:green'>with construct</h2>";
// with constucter
$person2 = new Person('Sulaiman','22');

echo $person2->sentence();
