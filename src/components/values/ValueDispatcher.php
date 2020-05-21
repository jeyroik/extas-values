<?php
namespace extas\components\values;

use extas\components\Item;
use extas\interfaces\IHasValue;
use extas\interfaces\IItem;
use extas\interfaces\values\IValueDispatcher;

/**
 * Class ValueDispatcher
 *
 * @package extas\components\values
 * @author jeyroik <jeyroik@gmail.com>
 */
abstract class ValueDispatcher extends Item implements IValueDispatcher
{
    /**
     * @var IItem
     */
    protected IItem $item;

    /**
     * @param IItem|IHasValue $item
     */
    public function __invoke(IItem &$item): void
    {
        $this->item = $item;
        $this->config = $item->getValue();
        $item->setValue($this->buildValue());
    }

    /**
     * @return mixed
     */
    abstract public function buildValue();

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}