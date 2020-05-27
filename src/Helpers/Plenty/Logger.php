<?php

namespace FreeArticles\Helpers\Plenty;

use Plenty\Plugin\Log\Loggable;
use Plenty\Plugin\ConfigRepository;

class Logger 
{
    use Loggable;

    public function __construct() 
    {
    }

    public static function error($identificator, $message, $value)
    {
        return pluginApp(Logger::class)->getLogger($identificator)->error($message, $value);
    }
}


?>