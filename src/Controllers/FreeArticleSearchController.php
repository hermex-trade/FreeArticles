<?php 


namespace FreeArticles\Controllers;

use Plenty\Plugin\Controller;
use Plenty\Modules\Item\Variation\Contracts\VariationSearchRepositoryContract;


class FreeArticleSearchController extends Controller
{
    /**
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
            ] 
        ]);
    
        $result = $repo->search();
        $variation = $result->getResult();

        return $variation;
    }
}


?>