<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

$ref = 'DEAL_STAGE';
$values = CCrmStatus::GetStatus($ref);
echo '<a href="/crm_sandbox/">Назад &rarr;</a><br><br>';
deb($values, 'Все значения справочника DEAL_STAGE (полная форма)');

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';