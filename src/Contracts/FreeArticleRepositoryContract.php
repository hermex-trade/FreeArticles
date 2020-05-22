<?php

namespace FreeArticles\Contracts;

use FreeArticles\Models\FreeArticle;

interface FreeArticleRepositoryContract 
{
    public function createFreeArticle(array $data): FreeArticle;

    public function getFreeArticleList(): array;

    public function updateFreeArticle($id, array $data): FreeArticle;

    public function deleteFreeArticle($id): FreeArticle;
}

?>