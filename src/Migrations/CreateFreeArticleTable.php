<?php

namespace FreeArticles\Migrations;

use FreeArticles\Helpers\Plenty\Logger;
use FreeArticles\Models\FreeArticle;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

class CreateFreeArticleTable 
{
    public function run(Migrate $migrate) 
    {
        Logger::error("CreateFreeArticleTable", "Migration executed", "Migration executed");
        $result = $migrate->createTable(FreeArticle::class);
        Logger::error('CreateFreeArticleTable_finished', 'Migration finished', $result);
    }
}