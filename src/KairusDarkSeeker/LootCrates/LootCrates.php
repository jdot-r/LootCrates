<?php

/**
 *
 *   ;'*¨'`·- .,  ‘                   , ·. ,.-·~·.,   ‘                                  ,.         ,·´'; '         , ·. ,.-·~·.,   ‘             ,  . .,  °                            ,. -  .,                             _,.,  °        ;'*¨'`·- .,  ‘                  ,.-·.                  ,. -,             ,  . .,  °         ,. -  .,                    ,.-·.           ,.  - · - .,  '          .-,             ,'´¨';'             ,  . .,  °                   _,.,  °    
 *   \`:·-,. ,   '` ·.  '            /  ·'´,.-·-.,   `,'‚                             ;'´*´ ,'\       ,'  ';'\°       /  ·'´,.-·-.,   `,'‚       ;'´    ,   ., _';\'                        ,' ,. -  .,  `' ·,               ,.·'´  ,. ,  `;\ '      \`:·-,. ,   '` ·.  '           /    ;'\'          ,.·'´,    ,'\      ;'´    ,   ., _';\'     ,' ,. -  .,  `' ·,            /    ;'\'   ,·'´,.-,   ,. -.,   `';,'       ;  ';\          ,'   ';'\'     ;'´    ,   ., _';\'          ,.·'´  ,. ,  `;\ '  
 *    '\:/   ;\:'`:·,  '`·, '        /  .'´\:::::::'\   '\ °                           ;    ';::\      ;  ;::'\      /  .'´\:::::::'\   '\ °     \:´¨¯:;'   `;::'\:'\                       '; '·~;:::::'`,   ';\          .´   ;´:::::\`'´ \'\       '\:/   ;\:'`:·,  '`·, '       ;    ;:::\     ,·'´ .·´'´-·'´::::\'    \:´¨¯:;'   `;::'\:'\    '; '·~;:::::'`,   ';\        ;    ;:::\   \::\.'´  ;'\::::;:'  ,·':\'    ';   ;:'\        ,'   ,'::'\    \:´¨¯:;'   `;::'\:'\       .´   ;´:::::\`'´ \'\  
 *     ;   ;'::\;::::';   ;\     ,·'  ,'::::\:;:-·-:';  ';\‚                          ;      '\;'      ;  ;:::;   ,·'  ,'::::\:;:-·-:';  ';\‚       \::::;   ,'::_'\;'                        ;   ,':\::;:´  .·´::\'       /   ,'::\::::::\:::\:'       ;   ;'::\;::::';   ;\      ';    ;::::;'   ;    ';:::\::\::;:'       \::::;   ,'::_'\;'     ;   ,':\::;:´  .·´::\'     ';    ;::::;'   '\:';   ;:;:·'´,.·'´\::::';   ';  ';::';      ,'   ,'::::;      \::::;   ,'::_'\;'      /   ,'::\::::::\:::\:' 
 *     ;  ,':::;  `·:;;  ,':'\'  ;.   ';:::;´       ,'  ,':'\‚                        ,'  ,'`\   \      ;  ;:::;  ;.   ';:::;´       ,'  ,':'\‚          ,'  ,'::;'  ‘                          ;  ·'-·'´,.-·'´:::::::';     ;   ;:;:-·'~^ª*';\'´         ;  ,':::;  `·:;;  ,':'\'     ;   ;::::;    \·.    `·;:'-·'´              ,'  ,'::;'  ‘       ;  ·'-·'´,.-·'´:::::::';     ;   ;::::;    ,.·'   ,.·:'´:::::::'\;·´    ';  ';::;     ,'   ,'::::;'           ,'  ,'::;'  ‘       ;   ;:;:-·'~^ª*';\'´   
 *    ;   ;:::;    ,·' ,·':::;   ';   ;::;       ,'´ .'´\::';‚                       ;  ;::;'\  '\    ;  ;:::;    ';   ;::;       ,'´ .'´\::';‚         ;  ;:::;  °                        ;´    ':,´:::::::::::·´'      ;  ,.-·:*'´¨'`*´\::\ '       ;   ;:::;    ,·' ,·':::;    ';  ;'::::;      \:`·.   '`·,  '              ;  ;:::;  °     ;´    ':,´:::::::::::·´'     ';  ;'::::;     '·,   ,.`' ·- :;:;·'´        ';  ';::;    ,'   ,'::::;'            ;  ;:::;  °       ;  ,.-·:*'´¨'`*´\::\ '  
 *    ;  ;:::;'  ,.'´,·´:::::;   ';   ':;:   ,.·´,.·´::::\;'°                      ;  ;:::;  '\  '\ ,'  ;:::;'    ';   ':;:   ,.·´,.·´::::\;'°         ;  ;::;'  ‘                          ';  ,    `·:;:-·'´          ;   ;\::::::::::::'\;'        ;  ;:::;'  ,.'´,·´:::::;    ;  ';:::';         `·:'`·,   \'               ;  ;::;'  ‘       ';  ,    `·:;:-·'´          ;  ';:::';         ;  ';:\:`*·,  '`·,  °     \   '·:_,'´.;   ;::::;‘            ;  ;::;'  ‘       ;   ;\::::::::::::'\;'   
 *   ':,·:;::-·´,.·´\:::::;´'     \·,   `*´,.·'´::::::;·´                        ,' ,'::;'     '\   ¨ ,'\::;'      \·,   `*´,.·'´::::::;·´            ;  ;::;'‚                            ; ,':\'`:·.,  ` ·.,         ;  ;'_\_:;:: -·^*';\       ':,·:;::-·´,.·´\:::::;´'     ';  ;::::;'         ,.'-:;'  ,·\              ;  ;::;'‚         ; ,':\'`:·.,  ` ·.,         ';  ;::::;'        ;  ;:;:'-·'´  ,.·':\        \·,   ,.·´:';  ';:::';             ;  ;::;'‚         ;  ;'_\_:;:: -·^*';\   
 *    \::;. -·´:::::;\;·´         \\:¯::\:::::::;:·´                           ;.'\::;        \`*´\::\; °      \\:¯::\:::::::;:·´               ',.'\::;'‚                            \·-;::\:::::'`:·-.,';       ';    ,  ,. -·:*'´:\:'\°      \::;. -·´:::::;\;·´         \*´\:::;‘    ,·'´     ,.·´:::'\             ',.'\::;'‚         \·-;::\:::::'`:·-.,';        \*´\:::;‘     ,·',  ,. -~:*'´\:::::'\‘       \:\¯\:::::\`*´\::;  '           ',.'\::;'‚         ';    ,  ,. -·:*'´:\:'\° 
 *     \;'\::::::::;·´'             `\:::::\;::·'´  °                            \:::\'          '\:::\:' '         `\:::::\;::·'´  °                 \::\:;'‚                             \::\:;'` ·:;:::::\::\'      \`*´ ¯\:::::::::::\;' '      \;'\::::::::;·´'             '\::\:;'      \`*'´\::::::::;·'‘             \::\:;'‚          \::\:;'` ·:;:::::\::\'       '\::\:;'       \:\`'´\:::::::::'\;:·'´          `'\::\;:·´'\:::'\'   '            \::\:;'‚          \`*´ ¯\:::::::::::\;' '
 *        `\;::-·´                     ¯                                         \:'             `*´'‚               ¯                             \;:'      ‘                          '·-·'       `' · -':::''       \:::::\;::-·^*'´              `\;::-·´                   `*´‘        \::::\:;:·´                   \;:'      ‘       '·-·'       `' · -':::''        `*´‘         '\;\:::\;: -~*´‘                          `*´°                \;:'      ‘        \:::::\;::-·^*'´     
 *                                      ‘                                                                             ‘                               °                                                               `*´¯                                                                '`*'´‘                         °                                                                 '                                  '                     °                 `*´¯              
 *
 * Copyright 2016 KairusDarkSeeker, EvolvedNetwork
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 *
 */

namespace KairusDarkSeeker\LootCrates;

use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\block\BlockBreakEvent;
use pocketmine\event\player\PlayerInteractEvent;
use pocketmine\level\particle\Particle;
use pocketmine\level\particle\LavaParticle;
use pocketmine\item\enchantment\Enchantment;
use pocketmine\block\Block;
use pocketmine\math\Vector3;
use pocketmine\level\Position;
use pocketmine\item\Item;
use pocketmine\tile\Chest;
use pocketmine\nbt\tag\{
	CompoundTag,
	IntTag
};

class LootCrates extends PluginBase implements Listener {
	
	const RARITY_COMMON = 0;
	const RARITY_LEGENDARY = 1;
	const RARITY_RARE = 2;

	/**
     * Called when the plugin is being loaded
     */
    public function onLoad() {
    	$this->getLogger()->notice(base64_decode("ICA4ODggIDg4OCAgIDg4ODg4ODg4ODggICAgICAgICAgICAgICAgICA4ODggICAgICAgICAgICAgICAgICAgICAgICA4ODggIC5kODg4OGIuICAgICAgICAgICAgICAgICAgIC5kODg4IDg4OCAgICAKICA4ODggIDg4OCAgIDg4OCAgICAgICAgICAgICAgICAgICAgICAgICA4ODggICAgICAgICAgICAgICAgICAgICAgICA4ODggZDg4UCAgWTg4YiAgICAgICAgICAgICAgICAgZDg4UCIgIDg4OCAgICAKODg4ODg4ODg4ODg4IDg4OCAgICAgICAgICAgICAgICAgICAgICAgICA4ODggICAgICAgICAgICAgICAgICAgICAgICA4ODggODg4ICAgIDg4OCAgICAgICAgICAgICAgICAgODg4ICAgIDg4OCAgICAKICA4ODggIDg4OCAgIDg4ODg4ODggICA4ODggIDg4OCAgLmQ4OGIuICA4ODggODg4ICA4ODggIC5kODhiLiAgIC5kODg4ODggODg4ICAgICAgICA4ODhkODg4IDg4ODhiLiAgODg4ODg4IDg4ODg4OCAKICA4ODggIDg4OCAgIDg4OCAgICAgICA4ODggIDg4OCBkODgiIjg4YiA4ODggODg4ICA4ODggZDhQICBZOGIgZDg4IiA4ODggODg4ICAgICAgICA4ODhQIiAgICAgICI4OGIgODg4ICAgIDg4OCAgICAKODg4ODg4ODg4ODg4IDg4OCAgICAgICBZODggIDg4UCA4ODggIDg4OCA4ODggWTg4ICA4OFAgODg4ODg4ODggODg4ICA4ODggODg4ICAgIDg4OCA4ODggICAgLmQ4ODg4ODggODg4ICAgIDg4OCAgICAKICA4ODggIDg4OCAgIDg4OCAgICAgICAgWThiZDhQICBZODguLjg4UCA4ODggIFk4YmQ4UCAgWThiLiAgICAgWTg4YiA4ODggWTg4YiAgZDg4UCA4ODggICAgODg4ICA4ODggODg4ICAgIFk4OGIuICAKICA4ODggIDg4OCAgIDg4ODg4ODg4ODggIFk4OFAgICAgIlk4OFAiICA4ODggICBZODhQICAgICJZODg4OCAgICJZODg4ODggICJZODg4OFAiICA4ODggICAgIlk4ODg4ODggODg4ICAgICAiWTg4OCAKClR3aXR0ZXI6IEBFdm9sdmVkQ3JhZnRQRQpJUCBhZGRyZXNzOiBwbGF5LmV2b2x2ZWRjcmFmdC50aw=="));
    }
   
    /**
     * Called when the plugin is enabled
     */
    public function onEnable() {
		$this->getLogger()->info("§a" . base64_decode("TG9vdENyYXRlcyBieSBLYWlydXNEYXJrU2Vla2VyCgogIF8gICAgICAgICAgICAgICAgIF8gICAgX19fX18gICAgICAgICAgIF8gICAgICAgICAgICAKIHwgfCAgICAgICAgICAgICAgIHwgfCAgLyBfX19ffCAgICAgICAgIHwgfCAgICAgICAgICAgCiB8IHwgICAgIF9fXyAgIF9fXyB8IHxffCB8ICAgICBfIF9fIF9fIF98IHxfIF9fXyAgX19fIAogfCB8ICAgIC8gXyBcIC8gXyBcfCBfX3wgfCAgICB8ICdfXy8gX2AgfCBfXy8gXyBcLyBfX3wKIHwgfF9fX3wgKF8pIHwgKF8pIHwgfF98IHxfX19ffCB8IHwgKF98IHwgfHwgIF9fL1xfXyBcCiB8X19fX19fXF9fXy8gXF9fXy8gXF9ffFxfX19fX3xffCAgXF9fLF98XF9fXF9fX3x8X19fLwoKd2FzIEVuYWJsZWQh"));
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
	}
	
	/**
	 * I have no idea why I added this
     * @param PlayerInteractEvent $event
     */
    public function onInteract(PlayerInteractEvent $event) {
    	$block = $event->getBlock();
        $player = $event->getPlayer();
        if($block->getID() != Block::CHEST) return false;
        $tile = $player->getLevel()->getTile(new Position($block->x, $block->y, $block->z, $block->level));
    	if($tile instanceof Chest && isset($tile->namedtag->LootCrate)) {
    		$player->addWindow($tile->getInventory());
        }
    }

    /**
     * @param BlockBreakEvent $event
     */
    public function onBreak(BlockBreakEvent $event) {
		$block = $event->getBlock();
		$player = $event->getPlayer();
		if($event->isCancelled()) return false;
		$rnd = rand(1, 180);
		/** Debugging purposes only! **/
		#$this->getLogger()->info($rnd);
		switch($rnd) {
			case 50:
				$this->getServer()->broadcastMessage("§6{$player->getName()} §bfound a §3Common §bLoot Crate!");
				$player->sendMessage("§2You've found a §3Common §2Loot Crate!");
				$this->addLootCrate(new Position($block->getX(), $block->getY(), $block->getZ(), $block->getLevel()), self::RARITY_COMMON);
				$this->createHollowParticles(new Position($block->getX(), $block->getY(), $block->getZ(), $block->getLevel()), new LavaParticle(new Vector3($block->getX(), $block->getY(), $block->getZ())));
			break;
			case 10:
				$this->getServer()->broadcastMessage("§6{$player->getName()} §bfound a §aLegendary §bLoot Crate!");
				$player->sendMessage("§2You've found a §aLegendary §2Loot Crate!");
				$this->addLootCrate(new Position($block->getX(), $block->getY(), $block->getZ(), $block->getLevel()), self::RARITY_LEGENDARY);
				$this->createHollowParticles(new Position($block->getX(), $block->getY(), $block->getZ(), $block->getLevel()), new LavaParticle(new Vector3($block->getX(), $block->getY(), $block->getZ())));
			break;
			case 95:
				$this->getServer()->broadcastMessage("§6{$player->getName()} §bfound a §6Rare §bLoot Crate!");
				$player->sendMessage("§2You've found a §6Rare §2Loot Crate!");
				$this->addLootCrate(new Position($block->getX(), $block->getY(), $block->getZ(), $block->getLevel()), self::RARITY_RARE);
				$this->createHollowParticles(new Position($block->getX(), $block->getY(), $block->getZ(), $block->getLevel()), new LavaParticle(new Vector3($block->getX(), $block->getY(), $block->getZ())));
			break;
		}
	}

    /**
     * @param Position $pos
     * @param int $type
     */
    private function addLootCrate(Position $pos, $type) {
		$x = $pos->x;
		$y = $pos->y;
		$z = $pos->z;
		$level = $pos->getLevel();
		
		if($type == self::RARITY_COMMON) {
            /** @var \pocketmine\block\Chest $chest */
            $chest = Block::get(Block::CHEST, 0, new Position($x, $y, $z, $level));
            $chest->place(Item::get(Item::CHEST), $chest, $chest, 0, 0, 0, 0);
            $chest->setDamage(0);
            $level->setBlock($chest, $chest);
            /** @var Chest $chest */
            $tile = $chest->getLevel()->getTile($pos);
            if($tile instanceof Chest) {
                $tile->setName("§3Rare §2Lootcrate");
                $count = rand(1, 10);
                $tile->getInventory()->addItem(Item::get(Item::STONE, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::GLASS, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::WOODEN_SWORD, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::STICK, 0, $count));
                $tile->namedtag->LootCrate = new CompoundTag("LootCrate", [
                	"Rarity" => new IntTag("Rarity", self::RARITY_COMMON)
                ]);
                $tile->saveNBT();
            }
		}
		
		if($type == self::RARITY_LEGENDARY) {
            /** @var \pocketmine\block\Chest $chest */
            $chest = Block::get(Block::CHEST, 0, new Position($x, $y, $z, $level));
            $chest->place(Item::get(Item::CHEST), $chest, $chest, 0, 0, 0, 0);
            $chest->setDamage(0);
            $level->setBlock($chest, $chest);
            /** @var Chest $tile */
            $tile = $chest->getLevel()->getTile($pos);
            if($tile instanceof Chest) {
                $tile->setName("§aRare §2Lootcrate");
                $count = rand(5, 25);
                $tile->getInventory()->addItem(Item::get(Item::ARROW, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::WOODEN_PLANK, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::BOW, 0, 1));
                $tile->getInventory()->addItem(Item::get(Item::CHAIN_HELMET, 0, 1));
                $tile->getInventory()->addItem(Item::get(Item::CHAIN_CHESTPLATE, 0, 1));
                $tile->getInventory()->addItem(Item::get(Item::CHAIN_LEGGINGS, 0, 1));
                $tile->getInventory()->addItem(Item::get(Item::CHAIN_BOOTS, 0, 1));
                $tile->getInventory()->addItem(Item::get(Item::IRON_INGOT, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::GOLDEN_APPLE, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::IRON_AXE, 0, 1));
                $tile->getInventory()->addItem(Item::get(Item::STONE_PICKAXE, 0, 1));
                $tile->namedtag->LootCrate = new CompoundTag("LootCrate", [
                	"Rarity" => new IntTag("Rarity", self::RARITY_LEGENDARY)
                ]);
                $tile->saveNBT();
            }
		}
		
		if($type == self::RARITY_RARE) {
            /** @var \pocketmine\block\Chest $chest */
            $chest = Block::get(Block::CHEST, 0, new Position($x, $y, $z, $level));
			$chest->place(Item::get(Item::CHEST), $chest, $chest, 0, 0, 0, 0);
			$chest->setDamage(0);
			$level->setBlock($chest, $chest);
            /** @var Chest $tile */
            $tile = $chest->getLevel()->getTile($pos);
			if($tile instanceof Chest) {
                $tile->setName("§6Rare §bLootcrate");
                $count = rand(10, 33);
                $enchlevel = rand(2, 4);
                $bow = Item::get(Item::BOW, 0, 1);
                $bow->addEnchantment(Enchantment::getEnchantment(rand(19, 22))->setLevel($enchlevel));
                $tile->getInventory()->addItem(Item::get(Item::ARROW, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::WOODEN_PLANK, 0, $count));
                $tile->getInventory()->addItem($bow);
                $dhelm = Item::get(Item::DIAMOND_HELMET, 0, 1);
                $dhelm->addEnchantment(Enchantment::getEnchantment(rand(0, 5))->setLevel($enchlevel));
                $tile->getInventory()->addItem($dhelm);
                $dchest = Item::get(Item::DIAMOND_CHESTPLATE, 0, 1);
                $dchest->addEnchantment(Enchantment::getEnchantment(rand(0, 5))->setLevel($enchlevel));
                $tile->getInventory()->addItem($dchest);
                $dleg = Item::get(Item::DIAMOND_LEGGINGS, 0, 1);
                $dleg->addEnchantment(Enchantment::getEnchantment(rand(0, 5))->setLevel($enchlevel));
                $tile->getInventory()->addItem($dleg);
                $dboot = Item::get(Item::DIAMOND_BOOTS, 0, 1);
                $dboot->addEnchantment(Enchantment::getEnchantment(rand(0, 5))->setLevel($enchlevel));
                $tile->getInventory()->addItem($dboot);
                $tile->getInventory()->addItem(Item::get(Item::DIAMOND, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::GOLDEN_APPLE, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::DIAMOND_AXE, 0, 1));
                $dpick = Item::get(Item::DIAMOND_PICKAXE, 0, 1);
                $dpick->addEnchantment(Enchantment::getEnchantment(rand(15, 18))->setLevel($enchlevel));
                $tile->getInventory()->addItem($dpick);
                $tile->getInventory()->addItem(Item::get(Item::GOLDEN_CARROT, 0, $count));
                $tile->getInventory()->addItem(Item::get(Item::MAGMA_CREAM, 0, 1));
                $dsword = Item::get(Item::DIAMOND_SWORD, 0, 1);
                $dsword->addEnchantment(Enchantment::getEnchantment(rand(9, 14))->setLevel($enchlevel));
                $tile->getInventory()->addItem($dsword);
                $tile->namedtag->LootCrate = new CompoundTag("LootCrate", [
                	"Rarity" => new IntTag("Rarity", self::RARITY_RARE)
                ]);
                $tile->saveNBT();
            }
		}
	}

    /**
     * @param Position $pos
     * @param Particle $particle
     */
    public function createHollowParticles(Position $pos, Particle $particle) {
    	$center = new Vector3($pos->x + 0.5, $pos->y, $pos->z + 0.5);
        for($yaw = 0, $y = $center->y; $y < $center->y + 4; $yaw += (M_PI * 2) / 20, $y += 1 / 20) {
        	$x = -sin($yaw) + $center->x;
            $z = cos($yaw) + $center->z;
            $particle->setComponents($x, $y, $z);
            $pos->getLevel()->addParticle($particle);
        }
    }
}
