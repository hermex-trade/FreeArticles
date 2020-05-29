<?php 

namespace FreeArticles\Repositories;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;
use FreeArticles\Contracts\FreeArticleRepositoryContract;
use FreeArticles\Models\FreeArticle;
use FreeArticles\Validators\FreeArticleValidator;
 
class FreeArticleRepository implements FreeArticleRepositoryContract 
{

    public static function create(array $data): FreeArticle 
    {
        try {
            FreeArticleValidator::validateOrFail($data);
        } catch (ValidationException $e) {
            throw $e;
        }

        $database = pluginApp(DataBase::class);
        $freeArticle = pluginApp(FreeArticle::class);
        $freeArticle->type = $data['type'];
        $freeArticle->condition = $data['condition'];
        $database->save($freeArticle);

        return $freeArticle;    
    }

    public static function all(): array 
    {
        $database = pluginApp(Database::class);
        $freeArticleList = $database->query(FreeArticle::class)->get();
        
        return $freeArticleList;
    }

    public static function update($id, array $data): FreeArticle 
    {
        $database = pluginApp(DataBase::class);
        $freeArticleList = $database->query(FreeArticle::class)
            ->where('id', '=', $id)
            ->get();
        $freeArticle = $freeArticleList[0];
        
        $type = $data[0];
        $condition = $data[1];

        if ($type) {
            $freeArticle->type = $type;
        }
        if ($condition) {
            $freeArticle->condition = $condition;
        }

        $database->save($freeArticle);

        return $freeArticle;
    }

    public static function delete($id): FreeArticle
    {
        $database = pluginApp(DataBase::class);

        $freeArticleList = $database->query(FreeArticle::class)
            ->where('id', '=', $id)
            ->get();

        $freeArticle = $freeArticleList[0];
        $database->delete($freeArticle);

        return $freeArticle;
    }

    public static function findOrCreate(array $fields) 
    {
        $freeArticle = FreeArticleRepository::findById($fields["id"]);

        if ($freeArticle) {
            return $freeArticle;
        }

        return FreeArticleRepository::create($fields);
    }
}


?>