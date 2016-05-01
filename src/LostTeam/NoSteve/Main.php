<?php
namespace LostTeam\NoSteve;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Event;
use pocketmine\event\Listener;
use pocketmine\Server;
use pocketmine\utils\TextFormat as Color;
use pocketmine\Player;
use pocketmine\event\player\PlayerPreLoginEvent;

class Main extends PluginBase implements Listener {
  $this->getPlugin = $this->getOwner();
  $this->cfg = $this->getPlugin->getConfig->getAll();
  $message = $this->cfg[message];

  public function onEnable() {
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
    $this->getLogger()->notice(Color::GREEN."NoSteve Enabled!");
  }
  public function onJoin(PlayerPreLoginEvent $event) {
    $name=$event->getPlayer()->getName();
    if($name=="Steve") {
      $player->close(Color::RED . $this->plugin->getConfig, $message);
      $event->setCancelled(true);
    }
  }
  public function onDisable() {
    $this->getLogger()->notice(Color::GREEN."NoSteve disabled!");
  }
}
