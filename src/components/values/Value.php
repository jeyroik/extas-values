<?php
namespace extas\components\values;

use extas\components\Item;
use extas\components\TDispatcherWrapper;
use extas\interfaces\values\IValue;

/**
 * Class Value
 *
 * @package extas\components\values
 * @author jeyroik <jeyroik@gmail.com>
 */
class Value extends Item implements IValue
{
    use TDispatcherWrapper;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
