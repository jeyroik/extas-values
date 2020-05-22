<?php
namespace extas\components\values;

use extas\components\Item;
use extas\components\THasValue;
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
    use THasValue;

    /**
     * @var IItem
     */
    protected IItem $item;

    /**
     * @param mixed $value
     */
    public function __invoke(&$value): void
    {
        if ($this->isValid($value)) {
            $value = $this->build($value);
        }
    }

    /**
     * @return array
     */
    public function getReplaces(): array
    {
        return $this->config[static::FIELD__REPLACES] ?? [];
    }

    /**
     * @param mixed $value
     * @return bool
     */
    abstract public function isValid($value): bool;

    /**
     * @param mixed $value
     * @return mixed
     */
    abstract public function build($value);

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return static::SUBJECT;
    }
}
