<?php
namespace extas\components\values;

use extas\components\Item;
use extas\components\THasComplexValue;
use extas\components\THasValue;
use extas\interfaces\IHasComplexValue;
use extas\interfaces\IHasValue;

/**
 * Class WithComplexValue
 *
 * @package extas\components\values
 * @author jeyroik <jeyroik@gmail.com>
 */
class WithComplexValue extends Item implements IHasComplexValue, IHasValue
{
    use THasComplexValue;
    use THasValue;

    /**
     * @return string
     */
    protected function getSubjectForExtension(): string
    {
        return 'extas.value.complex';
    }
}
