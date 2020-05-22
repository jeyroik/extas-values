<?php
namespace tests;

use extas\components\values\ValueDispatcher;

/**
 * Class TestValueDispatcher
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class TestValueDispatcher extends ValueDispatcher
{
    /**
     * @param mixed $value
     * @return mixed|string
     */
    public function build($value)
    {
        return 'test';
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value): bool
    {
        return true;
    }
}
