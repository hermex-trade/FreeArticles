<?php

namespace FreeArticles\Models;

use Plenty\Modules\Plugin\Database\Contracts\Model;

/**
 * Class FreeArticleTag
 *
 * @property int $id
 * @property int $freeArticleTagId
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