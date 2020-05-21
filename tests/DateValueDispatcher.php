<?php
namespace tests;

use extas\components\values\ValueDispatcher;

/**
 * Class DateValueDispatcher
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class DateValueDispatcher extends ValueDispatcher
{
    /**
     * @return false|mixed|string
     */
    public function buildValue()
    {
        return date($this->config['format'], $this->config['timestamp']);
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return isset($this->config['format'], $this->config['timestamp']);
    }
}
