<?php

namespace FreeArticles\Migrations;

use FreeArticles\Helpers\Plenty\Logger;
use FreeArticles\Models\FreeArticle;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

class FillFreeArticleTable
{
    public function run(Migrate $migrate) 
    {
        Logger::info("FillFreeArticleTable", "Migration executed", "Migration executed");
        $result = $migrate->updateTable(FreeArticle::class);
        Logger::info('FillFreeArticleTable_finished', 'Migration finished', $result);
    }
}