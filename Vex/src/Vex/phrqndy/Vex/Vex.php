<?php

namespace Vex\phrqndy\Vex;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerJoinEvent;

class Vex extends PluginBase implements Listener
{
    public function onEnable(): void {
        
        
        $this->getServer()->getPluginManager()->registerEvents($this, $this);
        $this->getLogger()->notice("Vex plugin is enabled!");
    }

    public function onJoin(PlayerJoinEvent $event): void {
        $player = $event->getPlayer();
        $name = $player->getName();

        
        $event->setJoinMessage("§7[§2+§7] $name has joined the server!");
    }
}
