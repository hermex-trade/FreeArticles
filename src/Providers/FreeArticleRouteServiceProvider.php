<?php

namespace FreeArticles\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;


class FreeArticleRouteServiceProvider extends RouteServiceProvider 
{
    public function map(Router $router) 
    {
        // TODO Secure all routes but /freearticle
        $router->get('freearticle', 'FreeArticles\Controllers\FreeArticleContentController@show');
        $router->post('freearticle', 'FreeArticles\Controllers\FreeArticleContentController@create');
        $router->put('freearticle/{id}', 'FreeArticles\Controllers\FreeArticleContentController@update')->where('id', '\d+');
        $router->delete('freearticle/{id}', 'FreeArticles\Controllers\FreeArticleContentController@delete')->where('id', '\d+');
        
        $router->get('freearticle/tag', 'FreeArticles\Controllers\FreeArticleSearchController@search')->addMiddleware(['oauth.cookie', 'oauth',]);
    }
}

?>