<?php

namespace FreeArticles\Providers;

use Plenty\Plugin\ServiceProvider;
use FreeArticles\Contracts\FreeArticleRepositoryContract;
use FreeArticles\Repositories\FreeArticleRepository;
use FreeArticles\Providers\FreeArticleRouteServiceProvider;

class FreeArticleViewServiceProvider extends ServiceProvider 
{
    public function register() 
    {
        $this->getApplication()->register(FreeArticleRouteServiceProvider::class);
        $this->getApplication()->bind(FreeArticleRepositoryContract::class, FreeArticleRepository::class);
    }
}

?>