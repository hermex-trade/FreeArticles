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
class FreeArticle extends Model 
{
    public $id          = 0;
    public $type        = "";
    public $condition   = "";

    public function getTableName(): string 
    {
        return 'FreeArticles::FreeArticle';
    }
}

?>