<?php

namespace FreeArticles\Providers;

use FreeArticles\Contracts\FreeArticleRepositoryContract;
use Plenty\Plugin\ServiceProvider;
use FreeArticles\Repositories\FreeArticleRepository;

class FreeArticleServiceProvider extends ServiceProvider
{
    public function register() 
    {
        $this->getApplication()->register(FreeArticleRouteServiceProvider::class);
        $this->getApplication()->bind(FreeArticleRepositoryContract::class, FreeArticleRepository::class);
    }
}

?>