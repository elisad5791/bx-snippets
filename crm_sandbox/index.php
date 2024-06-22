<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/header.php';
?>
    <h2>Справочники</h2>
    <ul>
        <li>
            <a href="/crm_sandbox/all-refs.php">Все справочники</a>
        </li>
        <li>
            <a href="/crm_sandbox/ref-all-values.php">Все значения справочника (полная форма)</a>
        </li>
        <li>
            <a href="/crm_sandbox/ref-all-values-short.php">Все значения справочника (краткая форма)</a>
        </li>
        <li>
            <a href="/crm_sandbox/ref-first-value.php">Первое значение справочника</a>
        </li>
    </ul>

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/bitrix/footer.php';