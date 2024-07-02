<?php
use Bitrix\Main\EventManager;

$manager = EventManager::getInstance();

$handler = ['Events', 'addMenuItems'];
$manager->addEventHandler('main', 'OnEpilog', $handler);

$handler = ['DealAddHandlers\AbstractEventHandler', 'onDealAddDispatcher'];
$manager->addEventHandler('crm', 'OnAfterCrmDealAdd', $handler);