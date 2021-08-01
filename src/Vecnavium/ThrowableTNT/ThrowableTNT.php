<?php

namespace Vecnavium\ThrowableTNT;

use pocketmine\entity\Entity;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\item\Item;
use pocketmine\plugin\PluginBase;
use Vecnavium\ThrowableTNT\Listener;

class ThrowableTNT extends PluginBase
{

    public function onEnable(): void
    {
        $this->getServer()->getPluginManager()->registerEvents(new TaskHandler($this), $this);
    }

}