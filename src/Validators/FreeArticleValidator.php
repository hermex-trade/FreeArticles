<?php

namespace FreeArticles\Validators;

use Plenty\Validation\Validator;


class FreeArticleValidator extends Validator 
{
    protected function defineAttributes() 
    {
        $this->addString('type', true);
        $this->addString('condition', true);
    }

    public function buildCustomMessages()
    {
        // TODO: Implement buildCustomMessages() method.
    }
}