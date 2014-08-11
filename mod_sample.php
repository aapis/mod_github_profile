<?php

	defined('_JEXEC') or die;

	require_once __DIR__ . '/helper.php';

	$cacheparams = new stdClass;
	$cacheparams->cachemode = 'safeuri';
	$cacheparams->class = 'ModSample';
	$cacheparams->method = 'getData';
	$cacheparams->methodparams = $params;
	$cacheparams->modeparams = array('id' => 'int', 'Itemid' => 'int');

	$user = JModuleHelper::moduleCache($module, $params, $cacheparams);

	if (sizeof($user) === 0){
		return;
	}

	$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));
	$showDate = $params->get('showDate', 0);

	require JModuleHelper::getLayoutPath('mod_sample', $params->get('layout', 'default'));


?>