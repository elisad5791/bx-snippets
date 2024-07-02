<?php

namespace DealAddHandlers;

interface AddDealInterface
{
    public static function onAfterAdd(array $fields): void;
}