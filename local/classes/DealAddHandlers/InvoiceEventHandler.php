<?php

namespace DealAddHandlers;

use Bitrix\Crm\Service\Container;
use CCrmOwnerType;

class InvoiceEventHandler implements AddDealInterface
{
    public static function onAfterAdd(array $fields): void
    {
        $invoice = [
            'PARENT_ID_2' => $fields['ID'],
            'ASSIGNED_BY_ID' => $fields['ASSIGNED_BY_ID'],
            'COMMENTS' => 'Cчет создан при создании сделки'
        ];
        $factory = Container::getInstance()->getFactory(CCrmOwnerType::SmartInvoice);
        $factory->createItem($invoice)->save();
    }
}