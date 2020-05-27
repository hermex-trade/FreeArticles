<?php

namespace FreeArticles\Helpers\Plenty;

use Plenty\Plugin\Log\Loggable;

class Logger 
{
    use Loggable;

    public function __construct() 
    {
    }

    public static function error($identifikator, $message, $value)
    {
        return pluginApp(Logger::class)->getLogger($identifikator)->error($message, $value);
    }
}


?>