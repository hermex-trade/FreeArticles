<?php 

namespace FreeArticles\Repostories;

use Plenty\Exceptions\ValidationException;
use Plenty\Modules\Plugin\DataBase\Contracts\DataBase;
use ToDoList\Contracts\FreeArticleRepositoryContract;
use ToDoList\Models\FreeArticle;
use ToDoList\Validators\FreeArticleValidator;
 
class FreeArticleRepository implements FreeArticleRepositoryContract 
{

    public function createFreeArticle(array $data): FreeArticle 
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

    public function getFreeArticleList(): array 
    {
        $database = pluginApp(Database::class);
        $freeArticleList = $database->query(FreeArticle::class)->select("*");

        return $freeArticleList;
    }

    public function updateFreeArticle($id, array $data): FreeArticle 
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
}



?>