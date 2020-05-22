<?php

namespace FreeArticles\Models;

use Plenty\Modules\Plugin\Database\Contracts\Model;

/**
 * Class FreeArticle
 *
 * @property int    $id
 * @property string $type
 * @property string $condition
 */
class FreeArticleTag extends Model
{
    public $id                  = 0;
    public $freeArticleTagId    = 0;

    public function getTableName(): string
    {
        return "FreeArticles::FreeArticleTag";
    }
}

?>