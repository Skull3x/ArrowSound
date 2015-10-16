<?php

/* 
Twitter.com/CaptainKenji17
 */

namespace ArrowSound;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\event\entity\ProjectileHitEvent;
use pocketmine\entity\Arrow;
use pocketmine\Player;
use pocketmine\level\sound\AnvilFallSound;
use pocketmine\event\entity\EntityDamageEvent;
use pocketmine\event\entity\EntityDamageByEntityEvent;
use pocketmine\event\entity\EntityDamageByChildEntityEvent;

class Main extends PluginBase implements Listener{
    
    public function onEnable(){
    $this->getServer()->getPluginManager()->registerEvents($this,$this);
        $this->getLogger()->info('Activated');
    }
    public function onDisable(){
        $this->getLogger()->info('Deactivated');
    }
    
    public function onHit(EntityDamageEvent $ev){
if($ev instanceof EntityDamageByChildEntityEvent){
$ev->getEntity()->getLevel()->addSound(new AnvilFallSound($ev->getEntity()->getLocation()));
//SPACE
$ev->getEntity()->getDamager()->getLevel()->addSound(new AnvilFallSound($ev->getEntity()->getDamager()->getLocation()));
}
}
}
