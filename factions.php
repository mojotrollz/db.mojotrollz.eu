<?php

/*
 * UDWBase: WOWDB Web Interface
 *
 * © UDW 2009-2011
 *
 * Released under the terms and conditions of the
 * GNU General Public License (http://gnu.org).
 *
 */

$smarty->config_load($conf_file, 'factions');

global $DB;

$rows = $DB->select('
	SELECT factionID, team, name' . ' as name, side
	FROM '.$UDWBaseconf['aowow']['db'].'.?_aowow_factions
	WHERE
		reputationListID!=-1
	'
);
if (!$factions = load_cache(19, 'x')) {
    unset($factions);

    $factions = array();
    foreach ($rows as $numRow => $row) {
        $factions[$numRow] = array();
        $factions[$numRow]['entry'] = $row['factionID'];
        if ($row['team'] != 0)
            $factions[$numRow]['group'] = $DB->selectCell('SELECT name' . ' FROM '.$UDWBaseconf['aowow']['db'].'.?_aowow_factions WHERE factionID=? LIMIT 1', $row['team']);
        if ($row['side'])
            $factions[$numRow]['side'] = $row['side'];
        $factions[$numRow]['name'] = $row['name'];
    }
    save_cache(19, 'x', $factions);
}

global $page;
$page = array(
    'Mapper' => false,
    'Book' => false,
    'Title' => $smarty->get_config_vars('Factions'),
    'tab' => 0,
    'type' => 0,
    'typeid' => 0,
    'path' => '[0, 7]'
);
$smarty->assign('page', $page);

// Статистика выполнения mysql запросов
$smarty->assign('mysql', $DB->getStatistics());
$smarty->assign('factions', $factions);
// Загружаем страницу
$smarty->display('factions.tpl');