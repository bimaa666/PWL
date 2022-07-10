<?php
if(!session_id()) session_start();

// teknik bootstraping -> dimana kita memanggil 1 gile maka akan menggil seluruh file
require_once '../app/init.php';

$app = new App();