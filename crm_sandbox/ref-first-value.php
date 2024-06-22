<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

$ref = 'DEAL_STAGE';
$firstValue = CCrmStatus::GetFirstStatusID($ref);
echo '<a href="/crm_sandbox/">Назад &rarr;</a><br><br>';
deb($firstValue, 'Первое значение справочника DEAL_STAGE');

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';