<?php

require 'User.php';
require 'Database.php';

$user = new User(new Database);

$user->create(['UserName' => 'Sulaiman']);