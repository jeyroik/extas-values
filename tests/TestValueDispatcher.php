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
     * @return mixed|string
     */
    public function buildValue()
    {
        return 'test';
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return true;
    }
}
