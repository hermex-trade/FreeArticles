<?php

namespace FreeArticles\Models;

use Plenty\Modules\Plugin\Database\Contracts\Model;
use FreeArticles\Repositories\FreeArticleRepository;
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
    public $variationId = 0;
    public $type        = "";
    public $condition   = "";

    public function getTableName(): string 
    {
        return 'FreeArticles::FreeArticle';
    }

    public static function createInitalFreeArticles() 
    {
        //TODO we should fill the table with test data
        FreeArticleRepository::findOrCreate([
            "variationId" => 123,
            "type" => "category",
            "condition" => "Toner & Druckerpatronen"
        ]);
        FreeArticleRepository::findOrCreate([
            "variationId" => 123,
            "type" => "category",
            "condition" => "Erotik"
        ]);
    }
}

?>