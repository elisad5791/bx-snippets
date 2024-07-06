<?php

use Bitrix\Main\Web\HttpClient;
use Bitrix\Iblock\Elements\ElementClientsTable;;
use Bitrix\Main\Loader;

class Agents
{
    public static function noteToLog()
    {
        debf('From Agent noteToLog');
        return 'Agents::noteToLog();';
    }

    public static function noteToLog7($count)
    {
        debf('From Agent noteToLog7 - N ' . $count);
        $count++;
        if ($count > 7) {
            return '';
        }
        return 'Agents::noteToLog7(' . $count . ');';
    }


    public static function getCurrencyRate()
    {
        global $DB;
        if (!CModule::IncludeModule('currency')) {
            return 'getCurrencyRate();';
        }

        $warning = false;
        $day = date('d.m.Y');
        $query = 'date_req=' . $DB->FormatDate($day, 'DD.MM.YYYY', 'D.M.Y');
        $url = 'https://cbr.ru/scripts/XML_daily.asp?' . $query;
        $httpClient = new HttpClient();
        $queryText = $httpClient->get($url);
        $queryText = iconv('windows-1251', 'utf-8', $queryText);

        if (strlen($queryText) <= 0) {
            $warning = true;
        }

        if (!$warning) {
            require_once($_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/classes/general/xml.php');
            $xml = new CDataXML();
            $xml->LoadString($queryText);
            $data = $xml->GetArray();

            if (is_array($data) && count($data['ValCurs']['#']['Valute']) > 0) {
                for ($j = 0; $j < count($data['ValCurs']['#']['Valute']); $j++) {
                    $rate = str_replace(',', '.', $data['ValCurs']['#']['Valute'][$j]['#']['Value'][0]['#']);
                    $counter = $data['ValCurs']['#']['Valute'][$j]['#']['Nominal'][0]['#'];
                    $fields = [
                        'CURRENCY' => $data['ValCurs']['#']['Valute'][$j]['#']['CharCode'][0]['#'],
                        'DATE_RATE' => $day,
                        'RATE' => DoubleVal($rate),
                        'RATE_CNT' => IntVal($counter)
                    ];
                    debf($fields['CURRENCY'] . ' - ' . $fields['RATE']);
                    CCurrencyRates::Add($fields);
                }
            }
        }

        return 'Agents::getCurrencyRate();';
    }

    public static function logEmptyClients()
    {
        if (!Loader::includeModule('iblock')) {
            return '';
        }

        $select = ['ID', 'NAME', 'SSYLKA_' => 'SSYLKA'];
        $filter = ['SSYLKA_VALUE' => false];
        $clients = ElementClientsTable::getList(['select' => $select, 'filter' => $filter])->fetchAll();
        $clients = array_column($clients, 'NAME', 'ID');
        debf($clients);

        return 'Agents::logEmptyClients();';
    }
}