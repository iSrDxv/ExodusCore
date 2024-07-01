<?php
declare(strict_types=1);

namespace isrdxv\lobbycore;

use pocketmine\plugin\PluginBase;
use pocketmine\utils\SingletonTrait;

class Loader extends PluginBase
{
    use SingletonTrait;

    function onLoad(): void
    {
        self::setInstance($this);
    }

    function onEnable(): void
    {
        
    }

    function onDisable(): void
    {
        
    }
}