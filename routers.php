<?php
RouterList::addRouter([
    'url_path' => '/',
    'handler' => 'HomeController@index',
    'method' => 'GET'
]);

RouterList::addRouter([
    'url_path' => '/login',
    'handler' => 'LoginController@index',
    'method' => 'GET'
]);

RouterList::addRouter([
    'url_path' => '/products',
    'handler' => 'ProductsController@index',
    'method' => 'GET'
]);

RouterList::addRouter([
    'url_path' => '/products/show',
    'handler' => 'ProductsController@show',
    'method' => 'GET'
]);

RouterList::addRouter([
    'url_path' => '/products/create',
    'handler' => 'ProductsController@create',
    'method' => 'POST'
]);

RouterList::addRouter([
    'url_path' => '/products/delete',
    'handler' => 'ProductsController@delete',
    'method' => 'POST'
]);

RouterList::addRouter([
    'url_path' => '/filemanager',
    'handler' => 'FilemanagerController@index',
    'method' => 'GET'
]);

RouterList::addRouter([
    'url_path' => '/filemanager/upload',
    'handler' => 'FilemanagerController@upload',
    'method' => 'POST'
]);

RouterList::addRouter([
    'url_path' => '/filemanager/delete',
    'handler' => 'FilemanagerController@delete',
    'method' => 'POST'
]);