<?php

function mass_define($arr)
{
    foreach($arr as $name => $value)
        define($name, $value);
}

switch($_SESSION['locale'])
{
	// --- RUSSIAN LOCALE ---
	case '8':
	mass_define(array(
		// quest
		'LOCALE_REQUIREMENTS' =>  'Требования',
		// classes
		'LOCALE_WARRIOR' => 		'Воин',
		'LOCALE_PALADIN' => 		'Паладин',
		'LOCALE_HUNTER' => 		'Охотник',
		'LOCALE_ROGUE' => 		'Разбойник',
		'LOCALE_PRIEST' => 		'Жрец',
		'LOCALE_DEATH_KNIGHT' => 'Рыцарь Смерти',
		'LOCALE_SHAMAN' => 		'Шаман',
		'LOCALE_MAGE' => 		'Маг',
		'LOCALE_WARLOCK' => 		'Чернокнижник',
		'LOCALE_DRUID' => 		'Друид',
		// races
		'LOCALE_HUMAN' => 		'Человек',
		'LOCALE_ORC' => 			'Орк',
		'LOCALE_DWARF' => 		'Дворф',
		'LOCALE_NIGHT_ELF' => 	'Ночной Эльф',
		'LOCALE_UNDED' => 		'Нежить',
		'LOCALE_TAUREN' => 		'Таурен',
		'LOCALE_GNOME' => 		'Гном',
		'LOCALE_TROLL' => 		'Троль',
		'LOCALE_BLOOD_ELF' => 	'Эльф Крови',
		'LOCALE_DRAENEI' => 		'Дреней',
		// side
		'LOCALE_BOTH' => 		'Обе',
		'LOCALE_HORDE' => 		'Орда',
		'LOCALE_ALLIANCE' => 	'Альянс',
		// reputation
		'LOCALE_NEUTRAL' => 		'Равнодушие',
		'LOCALE_FRIENDLY' => 	'Дружелюбие',
		'LOCALE_HONORED' => 		'Уважение',
		'LOCALE_REVERED' => 		'Почтение',
		'LOCALE_EXALTED' => 		'Превознесение',
		// resistances
		'LOCALE_FIRE_RESISTANCE' => 		'Сопротивляемость магии Огня',
		'LOCALE_FROST_RESISTANCE' => 	'Сопротивляемость магии Льда',
		'LOCALE_ARCANE_RESISTANCE' => 	'Сопротивляемость тайной магии',
		'LOCALE_SHADOW_RESISTANCE' => 	'Сопротивляемость темной магии',
		'LOCALE_NATURE_RESISTANCE' => 	'Сопротивляемость природной магии',
		'LOCALE_HOLY_RESISTANCE' => 		'RESISTANCE DOES NOT EXIST',
		// binds
		'LOCALE_BIND_PICKUP' => 		'Становится персональным при нахождении',
		'LOCALE_BIND_EQUIP' => 		'Становится персональным при надевании',
		'LOCALE_BIND_USE' => 		'Становится персональным при использовании',
		'LOCALE_BIND_SOULBOUND' => 	'Soulbound',
		'LOCALE_BIND_QUEST_ITEM' => 	'Quest Item',
		// bags
		'LOCALE_BAG' => 			'Сумка',
		'LOCALE_BAG_QUIVER' => 	'Колчан',
		'LOCALE_BAG_AMMO' => 	'Подсумок',
		'LOCALE_BAG_SOUL' => 	'Сумка душ',
		'LOCALE_BAG_LEATHER' => 	'Сумка кожевника',
		'LOCALE_BAG_HERB' => 	'Сумка травника',
		'LOCALE_BAG_ENCHANT' => 	'Сумка зачаровывателя',
		'LOCALE_BAG_ENGINEER' => 'Сумка инженера',
		'LOCALE_BAG_GEM' => 		'Сумка ювелира',
		'LOCALE_BAG_MINING' => 	'Шахтерская сумка',
		// equip slots
		'LOCALE_EQUIP_HEAD' => 			'Голова',
		'LOCALE_EQUIP_NECK' => 			'Шея',
		'LOCALE_EQUIP_SHOULDER' => 		'Плечи',
		'LOCALE_EQUIP_SHIRT' => 			'Рубашка',
		'LOCALE_EQUIP_CHEST' => 			'Грудь',
		'LOCALE_EQUIP_WAIST' => 			'Пояс',
		'LOCALE_EQUIP_LEGS' => 			'Ноги',
		'LOCALE_EQUIP_FEET' => 			'Ступни',
		'LOCALE_EQUIP_WRIST' => 			'Запястья',
		'LOCALE_EQUIP_HANDS' => 			'Кисть руки',
		'LOCALE_EQUIP_FINGER' => 		'Палец',
		'LOCALE_EQUIP_TRINKET' => 		'Аксессуар',
		'LOCALE_EQUIP_ONEHAND' => 		'Одноручный',
		'LOCALE_EQUIP_OFFHAND' => 		'Под левую руку',
		'LOCALE_EQUIP_RANGED' => 		'Для дальнего боя',
		'LOCALE_EQUIP_BACK' => 			'Спина',
		'LOCALE_EQUIP_TWOHAND' => 		'Двуручный',
		'LOCALE_EQUIP_UNK0' => 			'', // bag
		'LOCALE_EQUIP_TABARD' => 		'Гербовая накидка',
		'LOCALE_EQUIP_MAINHAND' => 		'Под правую руку',
		'LOCALE_EQUIP_CHEST2' => 		'Грудь',
		'LOCALE_EQUIP_OFFHAND2' => 		'Под левую руку',
		'LOCALE_EQUIP_HELDINOFFHAND' => 	'Держится в левой руке',
		'LOCALE_EQUIP_PROJECTILE' => 	'Снаряд',
		'LOCALE_EQUIP_THROWN' => 		'Метательное оружие',
		'LOCALE_EQUIP_RANGED2' => 		'Для дальнего боя',
		'LOCALE_EQUIP_UNK1' => 			'', // quiver
		'LOCALE_EQUIP_RELIC' => 			'Реликвия',
		// armor type
		'LOCALE_ARMOR_CLOTH' => 			'Ткань',
		'LOCALE_ARMOR_LEATHER' => 		'Кожа',
		'LOCALE_ARMOR_MAIL' => 			'Кольчуга',
		'LOCALE_ARMOR_PLATE' => 			'Латы',
		'LOCALE_ARMOR_BUCKLER' => 		'',
		'LOCALE_ARMOR_SHIELD' => 		'Щит',
		'LOCALE_ARMOR_LIBRAM' => 		'Манускрипт',
		'LOCALE_ARMOR_IDOL' => 			'Идол',
		'LOCALE_ARMOR_TOTEM' => 			'Тотем',
		// weapon type
		'LOCALE_WEAPON_AXE1H' => 		'Топор',
		'LOCALE_WEAPON_AXE2H' => 		'Топор',
		'LOCALE_WEAPON_BOW' => 			'Лук',
		'LOCALE_WEAPON_GUN' => 			'Огнестрельное',
		'LOCALE_WEAPON_MACE1H' => 		'Ударное',
		'LOCALE_WEAPON_MACE2H' => 		'Ударное',
		'LOCALE_WEAPON_POLEARM' => 		'Древковое',
		'LOCALE_WEAPON_SWORD1H' => 		'Меч',
		'LOCALE_WEAPON_SWORD2H' => 		'Меч',
		'LOCALE_WEAPON_OBSOLETE' => 		'',
		'LOCALE_WEAPON_STAFF' => 		'Посох',
		'LOCALE_WEAPON_EXOTIC' => 		'',
		'LOCALE_WEAPON_EXOTIC2' => 		'',
		'LOCALE_WEAPON_FIST' => 			'Кистевое',
		'LOCALE_WEAPON_MISC' => 			'',
		'LOCALE_WEAPON_DAGGER' => 		'Кинжал',
		'LOCALE_WEAPON_THROWN' => 		'Метательное',
		'LOCALE_WEAPON_SPEAR' => 		'',
		'LOCALE_WEAPON_CROSSBOW' => 		'Арбалет',
		'LOCALE_WEAPON_WAND' => 			'Жезл',
		'LOCALE_WEAPON_FISHINGPOLE' => 	'Удочка',
		// projectile type
		'LOCALE_PROJECTILE_WAND' => 		'',
		'LOCALE_PROJECTILE_BOLT' => 		'',
		'LOCALE_PROJECTILE_ARROW' => 	'Стрелы',
		'LOCALE_PROJECTILE_BULLET' => 	'Пули',
		'LOCALE_PROJECTILE_THROWN' => 	'',
		// damage
		'LOCALE_DAMAGE_PRE' => 			' Урон ',
		'LOCALE_DAMAGE_POST' => 			'',
		'LOCALE_DAMAGE_HOLY' =>  		'',
		'LOCALE_DAMAGE_FIRE' =>  		'от магии Огня',
		'LOCALE_DAMAGE_FROST' =>  		'от магии Льда',
		'LOCALE_DAMAGE_ARCANE' =>  		'от тайной магии',
		'LOCALE_DAMAGE_SHADOW' =>  		'от темной магии',
		'LOCALE_DAMAGE_NATURE' =>  		'',
		// stats
		'LOCALE_STAT_STRENGTH' => 		' Сила',
		'LOCALE_STAT_STAMINA' => 		' Выносливость',
		'LOCALE_STAT_INTELLECT' => 		' Интеллект',
		'LOCALE_STAT_SPIRIT' => 			' Дух',
		'LOCALE_STAT_AGILITY' => 		' Ловкость',
		// green bonuses
		'LOCALE_GBONUS_DEFENCE' => 				'При надевании: Увеличение рейтинга защиты на %d ед.',
		'LOCALE_GBONUS_DODGE' => 				'При надевании: повышает уровень уворачивания на %d.',
		'LOCALE_GBONUS_PARRY' => 				'При надевании: повышает уровень парирования ударов на %d.',
		'LOCALE_GBONUS_SHIELDBLOCK' => 			'При надевании: повышает уровень отражения ударов на %d.',
		'LOCALE_GBONUS_SPELLHIT_RATING' => 		'При надевании: повышает уровень меткости при использовании заклинания на %d.',
		'LOCALE_GBONUS_MELEECRIT_RATING' => 		'bonusCritMeleeRating %d',		// eu armory uses this
		'LOCALE_GBONUS_RANGEDCRIT_RATING' => 	'bonusCritRangedRating %d',
		'LOCALE_GBONUS_SPELLCRIT_RATING' => 		'При надевании: повышает уровень вероятности критического удара при использовании заклинания на %d.',
		'LOCALE_GBONUS_SPELLHASTE_RATING' => 	'При надевании: повышает частоту ударов при использования заклинания на %d.',
		'LOCALE_GBONUS_HIT_RATING' => 			'При надевании: Увеличение рейтинга меткости на %d ед.',
		'LOCALE_GBONUS_CRIT_RATING' => 			'При надевании: повышает уровень вероятности критического удара на %d.',
		'LOCALE_GBONUS_RESILIENCE_RATING' => 	'При надевании: повышает уровень стойкости на %d.',
		'LOCALE_GBONUS_HASTE_RATING' => 			'При надевании: повышает частоту ударов на %d.',
		'LOCALE_GBONUS_EXPERTISE_RATING' => 		'При надевании: повышает уровень мастерства на %d.',
		'LOCALE_GBONUS_UNKNOWN' => 				'<span class="q7">Неизвестный Бонус</span>',
		'LOCALE_GBONUS_CHANCEONHIT' => 			'Вероятность попадания при ударе: ',
		'LOCALE_GBONUS_EQUIP' => 				'При надевании: ',
		'LOCALE_GBONUS_USE' => 					'Использование: ',
		// sockets
		'LOCALE_SOCKET_META' => 		'Мета-оправа',
		'LOCALE_SOCKET_RED' => 		'Красная оправа',
		'LOCALE_SOCKET_YELLOW' => 	'Желтая оправа',
		'LOCALE_SOCKET_BLUE' => 		'Синяя оправа',

		// misc
		'LOCALE_SPEED' => 				'Скорость',
		'LOCALE_UNIQUE' => 				'Уникальный',
		'LOCALE_START_QUEST' => 			'Позволяет получить новое задание',
		'LOCALE_SLOT' => 				' Ячейка ',
		'LOCALE_DPS' => 					'Единиц урона в секунду',
		'LOCALE_DPS2' => 				'урон в секунду',
		'LOCALE_DPS_ADDS' => 			'Увеличивает',
		'LOCALE_ARMOR' => 				'Броня',
		'LOCALE_BLOCK' => 				'Способность отражать удары',
		'LOCALE_REQUIRES' => 			'Требует',
		'LOCALE_REQUIRES_LEVEL' => 		'Требует уровень',
		'LOCALE_DURABILITY' => 			'Прочность:',
		'LOCALE_CLASSES' => 				'Классы',
		));
		break;
	// --- GERMAN LOCALE ---
	case '3':
	mass_define(array(
		// quest
		'LOCALE_REQUIREMENTS' => 'Anforderungen',
		// classes
		'LOCALE_WARRIOR'	 => 'Krieger',
		'LOCALE_PALADIN'	 => 'Paladin',
		'LOCALE_HUNTER'		 => 'Jäger',
		'LOCALE_ROGUE'		 => 'Schurke',
		'LOCALE_PRIEST'		 => 'Priester',
		'LOCALE_DEATH_KNIGHT' => 'Todesritter',
		'LOCALE_SHAMAN'		 => 'Schamane',
		'LOCALE_MAGE'		 => 'Magier',
		'LOCALE_WARLOCK'	 => 'Hexenmeister',
		'LOCALE_DRUID'		 => 'Druide',
		// races
		'LOCALE_HUMAN'		 => 'Mensch',
		'LOCALE_ORC'		 => 'Orc',
		'LOCALE_DWARF'		 => 'Zwerg',
		'LOCALE_NIGHT_ELF'	 => 'Nachtelf',
		'LOCALE_UNDED'		 => 'Untoter',
		'LOCALE_TAUREN'		 => 'Taure',
		'LOCALE_GNOME'		 => 'Gnom',
		'LOCALE_TROLL'		 => 'Troll',
		'LOCALE_BLOOD_ELF'	 => 'Butelf',
		'LOCALE_DRAENEI'	 => 'Draenei',
		// side
		'LOCALE_BOTH' => 'Beide',
		'LOCALE_HORDE'		 => 'Horde',
		'LOCALE_ALLIANCE'	 => 'Allianz',
		// reputation
		'LOCALE_NEUTRAL' => 'Neutral',
		'LOCALE_FRIENDLY' => 'Freundlich',
		'LOCALE_HONORED' => 'Wohlwollend',
		'LOCALE_REVERED' => 'Respektvoll',
		'LOCALE_EXALTED' => 'Ehrfürchtig',
		// resistances
		'LOCALE_FIRE_RESISTANCE' => 'Feuerwiderstand',
		'LOCALE_FROST_RESISTANCE' => 'Frostwiderstand',
		'LOCALE_ARCANE_RESISTANCE' => 'Arkanwiderstand',
		'LOCALE_SHADOW_RESISTANCE' => 'Schattenwiderstand',
		'LOCALE_NATURE_RESISTANCE' => 'Naturwiderstand',
		'LOCALE_HOLY_RESISTANCE' => 'RESISTANCE DOES NOT EXIST',
		// binds
		'LOCALE_BIND_PICKUP'	 => 'Beim Aufheben gebunden',
		'LOCALE_BIND_EQUIP'		 => 'Beim Anlegen gebunden',
		'LOCALE_BIND_USE'		 => 'Bei Benutzung gebunden',
		'LOCALE_BIND_SOULBOUND'	 => 'Seelengebunden',
		'LOCALE_BIND_QUEST_ITEM' => 'Questitem',
		// bags
		'LOCALE_BAG'		 => 'Tasche',
		'LOCALE_BAG_QUIVER'	 => 'Köcher',
		'LOCALE_BAG_AMMO'	 => 'Munitionsbeutel',
		'LOCALE_BAG_SOUL'	 => 'Seelentasche',
		'LOCALE_BAG_LEATHER' => 'Lederertasche',
		'LOCALE_BAG_HERB'	 => 'Kräutertasche',
		'LOCALE_BAG_ENCHANT' => 'Verzauberertasche',
		'LOCALE_BAG_ENGINEER' => 'Ingenieurstasche',
		'LOCALE_BAG_GEM'	 => 'Edelsteintasche',
		'LOCALE_BAG_MINING'	 => 'Bergbautasche',
		// equip slots
		'LOCALE_EQUIP_HEAD'			 => 'Kopf',
		'LOCALE_EQUIP_NECK'			 => 'Hals',
		'LOCALE_EQUIP_SHOULDER'		 => 'Schulter',
		'LOCALE_EQUIP_SHIRT'		 => 'Hemd',
		'LOCALE_EQUIP_CHEST'		 => 'Brust',
		'LOCALE_EQUIP_WAIST'		 => 'Taille',
		'LOCALE_EQUIP_LEGS'			 => 'Beine',
		'LOCALE_EQUIP_FEET'			 => 'Füße',
		'LOCALE_EQUIP_WRIST'		 => 'Handgelenke',
		'LOCALE_EQUIP_HANDS'		 => 'Hände',
		'LOCALE_EQUIP_FINGER'		 => 'Finger',
		'LOCALE_EQUIP_TRINKET'		 => 'Schmuck',
		'LOCALE_EQUIP_ONEHAND'		 => 'Einhändig',
		'LOCALE_EQUIP_OFFHAND'		 => 'Schildhand',
		'LOCALE_EQUIP_RANGED'		 => 'Distanz',
		'LOCALE_EQUIP_BACK'			 => 'Rücken',
		'LOCALE_EQUIP_TWOHAND'		 => 'Zweihändig',
		'LOCALE_EQUIP_UNK0'			 => '',
		'LOCALE_EQUIP_TABARD'		 => 'Wappenrock',
		'LOCALE_EQUIP_MAINHAND'		 => 'Waffenhand',
		'LOCALE_EQUIP_CHEST2'		 => 'Brust',
		'LOCALE_EQUIP_OFFHAND2'		 => 'Schildhand',
		'LOCALE_EQUIP_HELDINOFFHAND' => 'In der Schildhand getragen',
		'LOCALE_EQUIP_PROJECTILE'	 => 'Projektil',
		'LOCALE_EQUIP_THROWN'		 => 'Wurfwaffe',
		'LOCALE_EQUIP_RANGED2'		 => 'Distanz',
		'LOCALE_EQUIP_UNK1'			 => '',
		'LOCALE_EQUIP_RELIC'		 => 'Relikt',
		// armor type
		'LOCALE_ARMOR_CLOTH' => 'Stoff',
		'LOCALE_ARMOR_LEATHER' => 'Leder',
		'LOCALE_ARMOR_MAIL'	 => 'Schwere Rüstung',
		'LOCALE_ARMOR_PLATE' => 'Platte',
		'LOCALE_ARMOR_BUCKLER' => '',
		'LOCALE_ARMOR_SHIELD' => 'Schild',
		'LOCALE_ARMOR_LIBRAM' => 'Buchband',
		'LOCALE_ARMOR_IDOL'	 => 'Götze',
		'LOCALE_ARMOR_TOTEM' => 'Totem',
		// weapon type
		'LOCALE_WEAPON_AXE1H'	 => 'Einhandaxt',
		'LOCALE_WEAPON_AXE2H'	 => 'Zweihandaxt',
		'LOCALE_WEAPON_BOW'		 => 'Bogen',
		'LOCALE_WEAPON_GUN'		 => 'Schusswaffe',
		'LOCALE_WEAPON_MACE1H'	 => 'Einhandstreitkolben',
		'LOCALE_WEAPON_MACE2H'	 => 'Zweihandstreitkolben',
		'LOCALE_WEAPON_POLEARM'	 => 'Stangenwaffe',
		'LOCALE_WEAPON_SWORD1H'	 => 'Einhandschwert',
		'LOCALE_WEAPON_SWORD2H'	 => 'Zweihandschwert',
		'LOCALE_WEAPON_OBSOLETE' => '',
		'LOCALE_WEAPON_STAFF'	 => 'Stab',
		'LOCALE_WEAPON_EXOTIC'	 => '',
		'LOCALE_WEAPON_EXOTIC2'	 => '',
		'LOCALE_WEAPON_FIST'	 => 'Faustwaffe',
		'LOCALE_WEAPON_MISC'	 => 'Diverse',
		'LOCALE_WEAPON_DAGGER'	 => 'Dolche',
		'LOCALE_WEAPON_THROWN'	 => 'Wurfwaffe',
		'LOCALE_WEAPON_SPEAR'	 => '',
		'LOCALE_WEAPON_CROSSBOW' => 'Armbrust',
		'LOCALE_WEAPON_WAND'	 => 'Zauberstab',
		'LOCALE_WEAPON_FISHINGPOLE' => 'Angelrute',
		// projectile type
		'LOCALE_PROJECTILE_WAND' => '',
		'LOCALE_PROJECTILE_BOLT' => '',
		'LOCALE_PROJECTILE_ARROW' => 'Pfeil',
		'LOCALE_PROJECTILE_BULLET' => 'Kugel',
		'LOCALE_PROJECTILE_THROWN' => '',
		// damage
		'LOCALE_DAMAGE_PRE'	 => ' ',
		'LOCALE_DAMAGE_POST' => 'schaden',
		'LOCALE_DAMAGE_HOLY' => 'Heilig',
		'LOCALE_DAMAGE_FIRE' => 'Feuer',
		'LOCALE_DAMAGE_FROST' => 'Frost',
		'LOCALE_DAMAGE_ARCANE' => 'Arkan',
		'LOCALE_DAMAGE_SHADOW' => 'Schatten',
		'LOCALE_DAMAGE_NATURE' => 'Natur',
		// stats
		'LOCALE_STAT_STRENGTH' => ' Stärke',
		'LOCALE_STAT_STAMINA' => ' Ausdauer',
		'LOCALE_STAT_INTELLECT' => ' Intelligenz',
		'LOCALE_STAT_SPIRIT' => ' Willenskraft',
		'LOCALE_STAT_AGILITY' => ' Beweglichkeit',
		// green bonuses
		'LOCALE_GBONUS_DEFENCE'			 => 'Erhöht Verteidigungswertung um %d.',
		'LOCALE_GBONUS_DODGE'			 => 'Erhöht Eure Ausweichwertung um %d.',
		'LOCALE_GBONUS_PARRY'			 => 'Erhöht Eure Parierwertung um %d.',
		'LOCALE_GBONUS_SHIELDBLOCK'		 => 'Erhöht Eure Blockwertung um %d.',
		'LOCALE_GBONUS_SPELLHIT_RATING'	 => 'Erhöht Zaubertrefferwertung um %d.',
		'LOCALE_GBONUS_MELEECRIT_RATING' => 'Erhöht kritische Nahkampftrefferwertung um %d.',
		'LOCALE_GBONUS_RANGEDCRIT_RATING' => 'Erhöht kritische Fernkampftrefferwertung um %d.',
		'LOCALE_GBONUS_SPELLCRIT_RATING' => 'Erhöht kritische Zaubertrefferwertung um %d.',
		'LOCALE_GBONUS_SPELLHASTE_RATING' => 'Erhöht Zaubertempowertung um %d.',
		'LOCALE_GBONUS_HIT_RATING'		 => 'Erhöht Eure Trefferwertung um %d.',
		'LOCALE_GBONUS_CRIT_RATING'		 => 'Erhöht Eure kritische Trefferwertung um %d.',
		'LOCALE_GBONUS_RESILIENCE_RATING' => 'Erhöht Eure Abhärtungswertung um %d.',
		'LOCALE_GBONUS_HASTE_RATING'	 => 'Erhöht Tempowertung um %d.',
		'LOCALE_GBONUS_EXPERTISE_RATING' => 'Erhöht Eure Waffenkundewertung um %d.',
		'LOCALE_GBONUS_UNKNOWN'			 => 'Unbekannter Bonus #%d',
		'LOCALE_GBONUS_CHANCEONHIT'		 => 'Chance bei Treffer: ',
		'LOCALE_GBONUS_EQUIP'			 => 'Anlegen: ',
		'LOCALE_GBONUS_USE'				 => 'Benutzen: ',
		// sockets
		'LOCALE_SOCKET_META' => 'Metasockel',
		'LOCALE_SOCKET_RED'	 => 'Roter Sockel',
		'LOCALE_SOCKET_YELLOW' => 'Gelber Sockel',
		'LOCALE_SOCKET_BLUE' => 'Blauer Sockel',
		
		// misc
		'LOCALE_SPEED'		 => 'Geschwindigkeit',
		'LOCALE_UNIQUE'		 => 'Einzigartig',
		'LOCALE_START_QUEST' => 'Dieser Gegenstand startet eine Quest',
		'LOCALE_SLOT'		 => ' Platz ',
		'LOCALE_DPS'		 => 'Schaden pro Sekunde',
		'LOCALE_DPS2'		 => 'Schaden pro Sekunde',
		'LOCALE_DPS_ADDS'	 => 'Adds',
		'LOCALE_ARMOR'		 => 'Rüstung',
		'LOCALE_BLOCK'		 => 'Blocken',
		'LOCALE_REQUIRES'	 => 'Benötigt',
		'LOCALE_REQUIRES_LEVEL' => 'Benötigt Stufe',
		'LOCALE_DURABILITY'	 => 'Haltbarkeit',
		'LOCALE_CLASSES'	 => 'Klassen',
		));
		break;
	// --- ENGLISH default LOCALE ---
	default:
	mass_define(array(
		// quest
		'LOCALE_REQUIREMENTS' =>  'Requirements',
		// classes
		'LOCALE_WARRIOR' => 		'Warrior',
		'LOCALE_PALADIN' => 		'Paladin',
		'LOCALE_HUNTER' => 		'Hunter',
		'LOCALE_ROGUE' => 		'Rogue',
		'LOCALE_PRIEST' => 		'Priest',
		'LOCALE_DEATH_KNIGHT' => 'Death Knight',
		'LOCALE_SHAMAN' => 		'Shaman',
		'LOCALE_MAGE' => 		'Mage',
		'LOCALE_WARLOCK' => 		'Warlock',
		'LOCALE_DRUID' => 		'Druid',
		// races
		'LOCALE_HUMAN' => 		'Human',
		'LOCALE_ORC' => 			'Orc',
		'LOCALE_DWARF' => 		'Dwarf',
		'LOCALE_NIGHT_ELF' => 	'Night Elf',
		'LOCALE_UNDED' => 		'Undead',
		'LOCALE_TAUREN' => 		'Tauren',
		'LOCALE_GNOME' => 		'Gnome',
		'LOCALE_TROLL' => 		'Troll',
		'LOCALE_BLOOD_ELF' => 	'Blood Elf',
		'LOCALE_DRAENEI' => 		'Draenei',
		// side
		'LOCALE_BOTH' => 		'Both',
		'LOCALE_HORDE' => 		'Horde',
		'LOCALE_ALLIANCE' => 	'Alliance',
		// reputation
		'LOCALE_NEUTRAL' => 		'Neutral',
		'LOCALE_FRIENDLY' => 	'Friendly',
		'LOCALE_HONORED' => 		'Honored',
		'LOCALE_REVERED' => 		'Revered',
		'LOCALE_EXALTED' => 		'Exalted',
		// resistances
		'LOCALE_FIRE_RESISTANCE' => 		'Fire Resistance',
		'LOCALE_FROST_RESISTANCE' => 	'Frost Resistance',
		'LOCALE_ARCANE_RESISTANCE' => 	'Arcane Resistance',
		'LOCALE_SHADOW_RESISTANCE' => 	'Shadow Resistance',
		'LOCALE_NATURE_RESISTANCE' => 	'Nature Resistance',
		'LOCALE_HOLY_RESISTANCE' => 		'RESISTANCE DOES NOT EXIST',
		// binds
		'LOCALE_BIND_PICKUP' => 		'Binds when picked up',
		'LOCALE_BIND_EQUIP' => 		'Binds when equipped',
		'LOCALE_BIND_USE' => 		'Binds when used',
		'LOCALE_BIND_SOULBOUND' => 	'Soulbound',
		'LOCALE_BIND_QUEST_ITEM' => 	'Quest Item',
		// bags
		'LOCALE_BAG' => 			'Bag',
		'LOCALE_BAG_QUIVER' => 	'Quiver',
		'LOCALE_BAG_AMMO' => 	'Ammo Pouch',
		'LOCALE_BAG_SOUL' => 	'Soul Bag',
		'LOCALE_BAG_LEATHER' => 	'Leatherworking Bag',
		'LOCALE_BAG_HERB' => 	'Herb Bag',
		'LOCALE_BAG_ENCHANT' => 	'Enchanting bag',
		'LOCALE_BAG_ENGINEER' => 'Engineering Bag',
		'LOCALE_BAG_GEM' => 		'Gem Bag',
		'LOCALE_BAG_MINING' => 	'Mining Bag',
		// equip slots
		'LOCALE_EQUIP_HEAD' => 			'Head',
		'LOCALE_EQUIP_NECK' => 			'Neck',
		'LOCALE_EQUIP_SHOULDER' => 		'Shoulder',
		'LOCALE_EQUIP_SHIRT' => 			'Shirt',
		'LOCALE_EQUIP_CHEST' => 			'Chest',
		'LOCALE_EQUIP_WAIST' => 			'Waist',
		'LOCALE_EQUIP_LEGS' => 			'Legs',
		'LOCALE_EQUIP_FEET' => 			'Feet',
		'LOCALE_EQUIP_WRIST' => 			'Wrist',
		'LOCALE_EQUIP_HANDS' => 			'Hands',
		'LOCALE_EQUIP_FINGER' => 		'Finger',
		'LOCALE_EQUIP_TRINKET' => 		'Trinket',
		'LOCALE_EQUIP_ONEHAND' => 		'One-hand',
		'LOCALE_EQUIP_OFFHAND' => 		'Off Hand',
		'LOCALE_EQUIP_RANGED' => 		'Ranged',
		'LOCALE_EQUIP_BACK' => 			'Back',
		'LOCALE_EQUIP_TWOHAND' => 		'Two-hand',
		'LOCALE_EQUIP_UNK0' => 			'',
		'LOCALE_EQUIP_TABARD' => 		'Tabard',
		'LOCALE_EQUIP_MAINHAND' => 		'Main Hand',
		'LOCALE_EQUIP_CHEST2' => 		'Chest',
		'LOCALE_EQUIP_OFFHAND2' => 		'Off Hand',
		'LOCALE_EQUIP_HELDINOFFHAND' => 	'Held In Off-Hand',
		'LOCALE_EQUIP_PROJECTILE' => 	'Projectile',
		'LOCALE_EQUIP_THROWN' => 		'Thrown',
		'LOCALE_EQUIP_RANGED2' => 		'Ranged',
		'LOCALE_EQUIP_UNK1' => 			'',
		'LOCALE_EQUIP_RELIC' => 			'Relic',
		// armor type
		'LOCALE_ARMOR_CLOTH' => 			'Cloth',
		'LOCALE_ARMOR_LEATHER' => 		'Leather',
		'LOCALE_ARMOR_MAIL' => 			'Mail',
		'LOCALE_ARMOR_PLATE' => 			'Plate',
		'LOCALE_ARMOR_BUCKLER' => 		'',
		'LOCALE_ARMOR_SHIELD' => 		'Shield',
		'LOCALE_ARMOR_LIBRAM' => 		'Libram',
		'LOCALE_ARMOR_IDOL' => 			'Idol',
		'LOCALE_ARMOR_TOTEM' => 			'Totem',
		// weapon type
		'LOCALE_WEAPON_AXE1H' => 		'Axe',
		'LOCALE_WEAPON_AXE2H' => 		'Axe',
		'LOCALE_WEAPON_BOW' => 			'Bow',
		'LOCALE_WEAPON_GUN' => 			'Gun',
		'LOCALE_WEAPON_MACE1H' => 		'Mace',
		'LOCALE_WEAPON_MACE2H' => 		'Mace',
		'LOCALE_WEAPON_POLEARM' => 		'Polearm',
		'LOCALE_WEAPON_SWORD1H' => 		'Sword',
		'LOCALE_WEAPON_SWORD2H' => 		'Sword',
		'LOCALE_WEAPON_OBSOLETE' => 		'',
		'LOCALE_WEAPON_STAFF' => 		'Staff',
		'LOCALE_WEAPON_EXOTIC' => 		'',
		'LOCALE_WEAPON_EXOTIC2' => 		'',
		'LOCALE_WEAPON_FIST' => 			'Fist Weapon',
		'LOCALE_WEAPON_MISC' => 			'Miscellaneous',
		'LOCALE_WEAPON_DAGGER' => 		'Dagger',
		'LOCALE_WEAPON_THROWN' => 		'Thrown',
		'LOCALE_WEAPON_SPEAR' => 		'',
		'LOCALE_WEAPON_CROSSBOW' => 		'Crossbow',
		'LOCALE_WEAPON_WAND' => 			'Wand',
		'LOCALE_WEAPON_FISHINGPOLE' => 	'Fishing Pole',
		// projectile type
		'LOCALE_PROJECTILE_WAND' => 		'',
		'LOCALE_PROJECTILE_BOLT' => 		'',
		'LOCALE_PROJECTILE_ARROW' => 	'Arrow',
		'LOCALE_PROJECTILE_BULLET' => 	'Bullet',
		'LOCALE_PROJECTILE_THROWN' => 	'',
		// damage
		'LOCALE_DAMAGE_PRE' => 			' ',
		'LOCALE_DAMAGE_POST' => 			' Damage',
		'LOCALE_DAMAGE_HOLY' =>  		'Holy',
		'LOCALE_DAMAGE_FIRE' =>  		'Fire',
		'LOCALE_DAMAGE_FROST' =>  		'Frost',
		'LOCALE_DAMAGE_ARCANE' =>  		'Arcane',
		'LOCALE_DAMAGE_SHADOW' =>  		'Shadow',
		'LOCALE_DAMAGE_NATURE' =>  		'Nature',
		// stats
		'LOCALE_STAT_STRENGTH' => 		' Strength',
		'LOCALE_STAT_STAMINA' => 		' Stamina',
		'LOCALE_STAT_INTELLECT' => 		' Intellect',
		'LOCALE_STAT_SPIRIT' => 			' Spirit',
		'LOCALE_STAT_AGILITY' => 		' Agility',
		// green bonuses
		'LOCALE_GBONUS_DEFENCE' => 				'Equip: Increases defense rating by %d.',
		'LOCALE_GBONUS_DODGE' => 				'Equip: Increases your dodge rating by %d.',
		'LOCALE_GBONUS_PARRY' => 				'Equip: Increases your parry rating by %d.',
		'LOCALE_GBONUS_SHIELDBLOCK' => 			'Equip: Increases your shield block rating by %d.',
		'LOCALE_GBONUS_SPELLHIT_RATING' => 		'Equip: Improves spell hit rating by %d.',
		'LOCALE_GBONUS_MELEECRIT_RATING' => 		'Equip: Improves melee critical strike rating by %d.',
		'LOCALE_GBONUS_RANGEDCRIT_RATING' => 	'Equip: Improves ranged critical strike rating by $d.',
		'LOCALE_GBONUS_SPELLCRIT_RATING' => 		'Equip: Improves spell critical strike rating by %d.',
		'LOCALE_GBONUS_SPELLHASTE_RATING' => 	'Equip: Improves spell haste rating by %d.',
		'LOCALE_GBONUS_HIT_RATING' => 			'Equip: Increases your hit rating by %d.',
		'LOCALE_GBONUS_CRIT_RATING' => 			'Equip: Increases your critical strike rating by %d.',
		'LOCALE_GBONUS_RESILIENCE_RATING' => 	'Equip: Improves your resilience rating by %d.',
		'LOCALE_GBONUS_HASTE_RATING' => 			'Equip: Improves haste rating by %d.',
		'LOCALE_GBONUS_EXPERTISE_RATING' => 		'Equip: Increases your expertise rating by %d.',
		'LOCALE_GBONUS_UNKNOWN' => 				'Unknown Bonus',
		'LOCALE_GBONUS_CHANCEONHIT' => 			'Chance on hit: ',
		'LOCALE_GBONUS_EQUIP' => 				'Equip: ',
		'LOCALE_GBONUS_USE' => 					'Use: ',
		// sockets
		'LOCALE_SOCKET_META' => 		'Meta Socket',
		'LOCALE_SOCKET_RED' => 		'Red Socket',
		'LOCALE_SOCKET_YELLOW' => 	'Yellow Socket',
		'LOCALE_SOCKET_BLUE' => 		'Blue Socket',
		
		// misc
		'LOCALE_SPEED' => 				'Speed',
		'LOCALE_UNIQUE' => 				'Unique',
		'LOCALE_START_QUEST' => 			'This Item Begins a Quest',
		'LOCALE_SLOT' => 				' Slot ',
		'LOCALE_DPS' => 					'damage per second',
		'LOCALE_DPS2' => 				'damage per second',
		'LOCALE_DPS_ADDS' => 			'Adds',
		'LOCALE_ARMOR' => 				'Armor',
		'LOCALE_BLOCK' => 				'Block',
		'LOCALE_REQUIRES' => 			'Requires',
		'LOCALE_REQUIRES_LEVEL' => 		'Requires Level',
		'LOCALE_DURABILITY' => 			'Durability',
		'LOCALE_CLASSES' => 				'Classes',
		));
}
?>