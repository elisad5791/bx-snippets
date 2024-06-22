<?php
use Bitrix\Main\EventManager;

$manager = EventManager::getInstance();

$handler = ['Events', 'addMenuItems'];
$manager->addEventHandler('main', 'OnEpilog', $handler);