<?php

namespace DealAddHandlers;

use CCrmQuote;

class QuoteEventHandler implements AddDealInterface
{
    public static function onAfterAdd(array $fields): void
    {
        $data = [
            'DEAL_ID' => $fields['ID'],
            'ASSIGNED_BY_ID' => $fields['ASSIGNED_BY_ID'],
            'TITLE' => 'Коммерческое предложение по сделке № ' . $fields['ID']
        ];
        $quote = new CCrmQuote();
        $quote->Add($data);
    }
}