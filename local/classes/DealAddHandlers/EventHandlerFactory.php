<?php

namespace DealAddHandlers;

class EventHandlerFactory
{
    public static function create($typeId)
    {
        switch ($typeId) {
            case 'SALE':
                $handlerClass = CommentEventHandler::class;
                break;
            case 'COMPLEX':
                $handlerClass = InvoiceEventHandler::class;
                break;
            case 'GOODS':
                $handlerClass = QuoteEventHandler::class;
                break;
            default:
                $handlerClass = null;
        }
        $handler = isset($handlerClass) ? new $handlerClass : null;
        return $handler;
    }
}
