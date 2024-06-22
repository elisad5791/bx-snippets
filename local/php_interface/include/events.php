<?php
use Bitrix\Main\EventManager;

$manager = EventManager::getInstance();

$handler = ['Events', 'addMedicineItem'];
$manager->addEventHandler('main', 'OnEpilog', $handler);