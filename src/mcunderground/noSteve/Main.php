<?php
/*
written by MCUnderground
*/
namespace mcunderground\nosteve;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Event;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;
use pocketmine\event\player\PlayerPreLoginEvent;

class Main extends PluginBase implements Listener {
 
  public function onEnable(){
  $this->getServer()->getPluginManager()->registerEvents($this, $this);
  $this->getLogger()->info("[noSteve] Loaded!");
  }
 
  public function join(PlayerPreLoginEvent $event){ 
$player = $event->getPlayer(); 
$name = $player->getName();
if($name == "Steve"){
$player->kick(Color::RED . "Please change your username. Don't use Steve.",false);
$event->setCancelled();
}
}

    }
