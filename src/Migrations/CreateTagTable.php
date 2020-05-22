<?php

namespace FreeArticles\Migrations;

use FreeArticles\Models\FreeArticleTag;
use Plenty\Modules\Plugin\DataBase\Contracts\Migrate;

class CreateTagTable
{
    public function run(Migrate $migrate)
    {
        $migrate->createTable(FreeArticleTag::class);
    }
}