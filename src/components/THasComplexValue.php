<?php
namespace extas\components;

use extas\interfaces\values\IValue;
use extas\interfaces\values\IValueDispatcher;

/**
 * Trait THasComplexValue
 *
 * Works only with IITem.
 *
 * @method getValue($default = null)
 * @method setValue($value)
 * @method valueRepository()
 *
 * @package extas\components
 * @author jeyroik <jeyroik@gmail.com>
 */
trait THasComplexValue
{
    /**
     * @param mixed $default
     * @return mixed
     */
    public function buildValue($default = null)
    {
        /**
         * @var IValue[] $values
         */
        $values = $this->valueRepository()->all([]);
        foreach ($values as $value) {
            /**
             * @var IValueDispatcher $dispatcher
             */
            $dispatcher = $value->buildClassWithParameters();
            $dispatcher($this);
        }

        return $this->getValue($default);
    }
}
