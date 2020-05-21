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
interface IValueDispatcher extends IItem
{
    public const SUBJECT = 'extas.value.dispatcher';

    /**
     * @param IItem|IHasValue $item
     */
    public function __invoke(IItem &$item): void;
}
