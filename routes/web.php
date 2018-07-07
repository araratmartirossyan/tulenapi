<?php

$router->group(['prefix' => 'api/v1'], function ($router) {
	// get all categories
	$router->get('categories', 'CategoriesController@index');
	// post new category
	$router->post('categories', 'CategoriesController@create');
    // remove category
    $router->post('categories/{id}', 'CategoriesController@remove');
    // update categories
    $router->put('categories/{id}', 'CategoriesController@editCategory');
    // get all posts
    $router->get('posts', 'PostController@index');
    // get posts by category
    $router->get('posts/sort/{id}', 'PostController@sort');
    // get one post
    $router->get('posts/{id}', 'PostController@getPost');
    // create post
    $router->post('posts', 'PostController@create');
    // edit post
    $router->put('posts/{id}', 'PostController@editPost');
    // delete one post
    $router->delete('posts/{id}', 'PostController@remove');
    // delete all posts
    $router->delete('posts/admin/deleteAll', 'PostController@removeAll');

    $router->post('posts/file/{id}', 'PostController@fileUpload');

    //post like
    $router->post('posts/like/{id}', 'PostController@like');
    $router->post('posts/unlike/{id}', 'PostController@unlike');
    $router->post('posts/view/{id}', 'PostController@view');

});