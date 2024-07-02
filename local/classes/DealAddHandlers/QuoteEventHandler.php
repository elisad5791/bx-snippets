<?php

namespace DealAddHandlers;

use CCrmQuote;

class QuoteEventHandler
{
    public static function onAfterAdd($fields)
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