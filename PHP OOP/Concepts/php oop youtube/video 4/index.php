<?php

require 'Bird.php';
require 'Pigeon.php';
require 'penguin.php';

echo '<h2> video 4</h2>';

// let say that the bird is falcon
$bird = new Bird(true,2);

echo $bird->getLegCount();

echo '<br>';

$Pigeon = new Pigeon(true,4);

echo $Pigeon->getLegCount();

if($Pigeon->canFly()){
	echo '<br>can fly';
}


echo '<br>';

$perguin = new penguin(false,3);

echo $perguin->getLegCount();

if($perguin->canFly()){
	echo '<br>can fly';
}else{
	echo '<br>cannot fly';
}