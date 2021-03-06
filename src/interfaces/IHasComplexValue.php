<?php
namespace extas\interfaces;

/**
 * Interface IHasComplexValue
 *
 * @package extas\interfaces
 * @author jeyroik <jeyroik@gmail.com>
 */
interface IHasComplexValue
{
    public const FIELD__PARENT = 'parent';

    /**
     * @param mixed $default
     * @return mixed
     */
    public function buildValue($default = null);
}
