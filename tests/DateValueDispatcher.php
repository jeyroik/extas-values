<?php
namespace tests;

use extas\components\Replace;
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
        $replaces = $this->getReplaces();
        $replaces['time'] = date($this->config['format'], $this->config['timestamp']);

        return Replace::please()->apply($replaces)->to($this->config['say']);
    }

    /**
     * @return bool
     */
    public function isValid(): bool
    {
        return isset($this->config['format'], $this->config['timestamp'], $this->config['say']);
    }
}
