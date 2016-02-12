<?php
namespace TheDeibo\;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getLogger()->info(TEXTFORMAT::GOLD . "[--xStaffx--]" .TEXTFORMAT::RED. " --> -->" .TEXTFORMAT::AQUA.  " Hurahh! xStaffx is Active on Version 2.0.0!");
	}
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "staff":
                if (!($sender instanceof Player)){
                    $sender->sendMessage(TEXTFORMAT::GOLD . "--------[TheDeiboMC Staff]--------");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff1"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff2"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff3"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff4"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff5"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff6"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff7"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff8"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff9"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff10"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff11"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff12"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff13"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff14"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("thedeibo.staff")){
                    $sender->sendMessage("§a--------§2[TheDeiboMC Staff]§a--------");
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff1"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("staff2"));
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff3"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("staff4"));
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff5"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("staff6"));
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff7"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("staff8"));
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff9"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("staff10"));
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff11"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("staff12"));
                    $sender->sendMessage("§2- " . $this->getConfig()->get("staff13"));
                    $sender->sendMessage("§a- " . $this->getConfig()->get("staff14"));
                    return true;
                }
                break;
            }
        }
    }
?>
