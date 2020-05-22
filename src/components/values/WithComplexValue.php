<?php
namespace extas\components\values;

use extas\components\Item;
use extas\components\THasComplexValue;
use extas\interfaces\IHasComplexValue;

/**
 * Class WithComplexValue
 *
 * @package extas\components\values
 * @author jeyroik <jeyroik@gmail.com>
 */
class WithComplexValue extends Item implements IHasComplexValue
{
    use THasComplexValue;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return 'extas.value.complex';
    }
}
