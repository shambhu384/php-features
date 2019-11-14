<?php

/**
 * Strategy interface
 */
interface StrategyInterface
{
    public const FLAG = false;
    public static function strategy(): bool;
}


class Solid implements StrategyInterface
{
    public const FLAG = true;

    public static function strategy(): bool
    {
        return false;
    }
}

var_dump(StrategyInterface::strategy());
