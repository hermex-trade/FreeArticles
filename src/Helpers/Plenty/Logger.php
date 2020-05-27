<?php

namespace FreeArticles\Helpers\Plenty;

use Plenty\Plugin\Log\Loggable;

class Logger 
{
    use Loggable;

    public function __construct() 
    {
    }

    public static function info($identifikator, $message, $value)
    {
        return pluginApp(Logger::class)->getLogger($identifikator)->info($message, $value);
    }
}


?>