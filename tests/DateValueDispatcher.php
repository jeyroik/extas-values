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
     * @param mixed $value
     * @return mixed|string|string[]
     */
    public function build($value)
    {
        $replaces = $this->getReplaces();
        $replaces['time'] = date($value['format'], $value['timestamp']);

        return Replace::please()->apply($replaces)->to($value['say']);
    }

    /**
     * @param mixed $value
     * @return bool
     */
    public function isValid($value): bool
    {
        return is_array($value) && isset($value['format'], $value['timestamp'], $value['say']);
    }
}
