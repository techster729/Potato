<?php

$router->get( '' , 'PostsController@home' );
$router->get( 'about' , 'PagesController@about' );
$router->get( 'create' , 'PostsController@create' );
$router->post('store' , 'PostsController@store');