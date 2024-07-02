<?php

namespace DealAddHandlers;

use Bitrix\Crm\Timeline\CommentEntry;
use CCrmOwnerType;
use CCrmStatus;

class CommentEventHandler implements AddDealInterface
{
    public static function onAfterAdd(array $fields):void
    {
        $ref = 'DEAL_TYPE';
        $values = CCrmStatus::GetStatus($ref);
        $text = 'Тип сделки - ' . $values[$fields['TYPE_ID']]['NAME'];

        $comment = [
            'TEXT' => $text,
            'SETTINGS' => [],
            'AUTHOR_ID' => $fields['ASSIGNED_BY_ID'],
            'BINDINGS' => [['ENTITY_TYPE_ID' => CCrmOwnerType::Deal, 'ENTITY_ID' => $fields['ID']]]
        ];

        CommentEntry::create($comment);
    }
}