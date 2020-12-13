<?php

/**
 * Application Routes
 */

$router->get('/', 'HomeController@index', 'home.index');
$router->get('/contacts', 'HomeController@contacts', 'contacts');
$router->get('/pages/:slug', 'PageController@show', 'pages.show');
$router->get('/news', 'NewsController@index', 'news.index');
$router->get('/news/:slug', 'NewsController@show', 'news.show');