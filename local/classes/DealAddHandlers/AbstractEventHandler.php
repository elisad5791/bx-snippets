<?php

namespace DealAddHandlers;

abstract class AbstractEventHandler
{
    public static function onDealAddDispatcher($fields)
    {
        $handler = EventHandlerFactory::create($fields['TYPE_ID']);
        if ($handler instanceof AddDealInterface) {
            $handler->onAfterAdd($fields);
        }
    }
}
