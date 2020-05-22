<?php

namespace FreeArticles\Providers;

use Plenty\Plugin\ServiceProvider;

class FreeArticlesViewServiceProvider extends ServiceProvider 
{
    public function register() 
    {
        $this->getApplication()->register(FreeArticleRouteServiceProvider::class);
        $this->getApplication()->bind(FreeArticleRepositoryContract::class, FreeArticleRepository::class);
    }
}

?>