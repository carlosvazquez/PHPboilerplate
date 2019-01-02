<?php
  require 'vendor/autoload.php';
  $query = require 'core/bootstrap.php';
  
  Router::load('routes.php')->direct(Request::uri(), Request::method());
  

