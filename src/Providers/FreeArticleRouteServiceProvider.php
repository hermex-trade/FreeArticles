<?php

namespace FreeArticles\Providers;

use Plenty\Plugin\RouteServiceProvider;
use Plenty\Plugin\Routing\Router;


class FreeArticleRouteServiceProvider extends RouteServiceProvider 
{
    public function map(Router $router) 
    {
        $router->get('freearticle', 'FreeArticles\Controllers\FreeArticleContentController@showFreeArticle');
        $router->post('freearticle', 'FreeArticles\Controllers\FreeArticleContentController@createFreeArticle');
        $router->put('freearticle/{id}', 'FreeArticles\Controllers\FreeArticleContentController@updateFreeArticle')->where('id', '\d+');
        $router->delete('freearticle/{id}', 'FreeArticles\Controllers\FreeArticleContentController@deleteFreeArticle')->where('id', '\d+');
        
        $router->get('search', 'FreeArticles\Controllers\FreeArticleSearchController@searchFreeArticleTag');
    }
}

?>