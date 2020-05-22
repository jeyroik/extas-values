<?php
namespace extas\interfaces\values;

use extas\interfaces\IHasValue;
use extas\interfaces\IItem;

/**
 * Interface IValueDispatcher
 *
 * @package extas\interfaces\values
 * @author jeyroik <jeyroik@gmail.com>
 */
interface IValueDispatcher extends IItem, IHasValue
{
    public const SUBJECT = 'extas.value.dispatcher';
    public const FIELD__REPLACES = 'replaces';

    /**
     * @param mixed $value
     */
    public function __invoke(&$value): void;
}
