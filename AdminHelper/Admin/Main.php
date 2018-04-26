<?php

namespace AdminHelper;

use pocketmine\plugin\PluginBase;
use pocketmine\command\Command;
use pocketmine\command\CommandSender;
use pocketmine\Server;
use pocketmine\utils\TextFormat;
use pocketmine\Player;
use pocketmine\event\Listener;

// You need to have FormAPI or this plugin won't work at all! \\
use jojoe77777\FormAPI;

class Main extends PluginBase Listener{

  public function onEnable{
    $this->getLogger()->info("Admin Helper By DevCold Has Been Enabled!");
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onDisable{
    $this->getLogger()->info("Admin Helper By DevCold Has Been Disabled!");
  }

  public function onCommand(CommandSender $sender, Command $cmd, string $label, array $args) : bool {
    switch ($command->getName()){
      case 'ItemTitle':
      $sender->sendMessage("Just Puted Item In Your Inventory");
      $name = $sender->getName();
      $sender->addTitle("Hello " . $name);
      $item = Item::get(278, 0, 1);
      $inv = $sender->getInventory();
      $inv->addItem($item);
      return true;
    }
  }
