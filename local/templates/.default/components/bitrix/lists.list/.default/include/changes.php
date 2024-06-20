<?php
if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['ELEMENTS_ROWS'] as &$item) {
    $arr = preg_split('/[<>]/', $item['columns']['NAME']);
    $result = '<' . $arr[1] . '><em>' . $arr[2] . '</em><' . $arr[3] . '>';
    $item['columns']['NAME'] = $result;
}