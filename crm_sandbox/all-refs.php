<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';

$refs = CCrmStatus::GetEntityTypes();
$result = [];
foreach ($refs as $key => $item) {
    $result[$key] = $item['NAME'];
}
echo '<a href="/crm_sandbox/">Назад &rarr;</a><br><br>';
deb($result, 'Все справочники');

require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';