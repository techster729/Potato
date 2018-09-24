<?php

use Core\{Request, Router};

require 'vendor/autoload.php';
$query = require 'core/bootstrap.php';

$router = new Router;

Router::load('app/routes.php')
    ->direct( Request::uri(), Request::method() );