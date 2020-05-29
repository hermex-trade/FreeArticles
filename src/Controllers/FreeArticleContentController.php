<?php

namespace FreeArticles\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Plugin\Http\Request;
use Plenty\Plugin\Templates\Twig;
use FreeArticles\Contracts\FreeArticleRepositoryContract;

class FreeArticleContentController extends Controller 
{
    public function show(Twig $twig, FreeArticleRepositoryContract $freeArticleRepo): string 
    {
        $freeArticleList = $freeArticleRepo->getFreeArticleList();
        //$templateData = array("freearticles" => $freeArticleList);
        //return $twig->render('FreeArticles::content.freearticle', $templateData);
        return json_encode($freeArticleList);
    }

    public function create(Request $request, FreeArticleRepositoryContract $freeArticleRepo): string 
    {
        $createdFreeArticle = $freeArticleRepo->createFreeArticle($request->all());
        return json_encode($createdFreeArticle);
    }

    public function update(int $id, array $data, FreeArticleRepositoryContract $freeArticleRepo): string 
    {
        $updatedFreeArticle = $freeArticleRepo->update($id, $data);
        return json_encode($updatedFreeArticle);
    }

    public function delete(int $id, FreeArticleRepositoryContract $freeArticleRepo): string 
    {
        $deletedFreeArticle = $freeArticleRepo->delete($id);
        return json_encode($deletedFreeArticle);
    }
}

?>