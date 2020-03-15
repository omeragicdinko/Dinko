<?php
require 'vendor/__autoload.php';

Flight::route('/',function(){
  echo 'Hello World!';
});

Flight::start();
 ?>
