<?php 


namespace FreeArticles\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Modules\Item\Variation\Contracts\VariationSearchRepositoryContract;


class FreeArticleSearchController extends Controller
{
    // TODO The tag should be a setting later and not hardcoded 
    /**
     * Searches the all variations which have a variationTagId with the number 126 which equals the 
     * freeArticle tag id
     */
    public function searchFreeArticleTag() 
    {
        $repo = pluginApp(VariationSearchRepositoryContract::class);

        $repo->setFilters([
            'variationTagId' => 126
        ]);

        $repo->setSearchParams([
            'variationTagId' => 126,
            'with'  => [
                'item' => null,
                'stock' => null,
            ] 
        ]);
    
        $variation = $repo->search();
        $result = $variation->getResult();
    }
}


?>