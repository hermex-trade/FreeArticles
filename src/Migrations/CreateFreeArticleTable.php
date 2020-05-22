<?php

namespace FreeArticles\Migrations;

use FreeArticles\Models\FreeArticle;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

class CreateFreeArticleTable 
{
    public function run(Migrate $migrate) 
    {
        $migrate->createTable(FreeArticle::class);
    }
}