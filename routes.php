<?php

    $router->get('','PagesController@home');
    $router->get('about','PagesController@about');
    $router->get('contact','PagesController@contact');

    $router->post('names','NamesController@add');
