<?php

namespace FreeArticles\Migrations;

use FreeArticles\Helpers\Plenty\Logger;
use FreeArticles\Models\FreeArticle;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

class CreateFreeArticleTable
{
    public function run(Migrate $migrate) 
    {
        Logger::info("CreateFreeArticleTable", "Migration executed", "Migration executed");
        $result = $migrate->createTable(FreeArticle::class);
        Logger::info('CreateFreeArticleTable_finished', 'Migration finished', $result);
    }
}