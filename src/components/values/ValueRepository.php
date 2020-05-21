<?php
namespace extas\components\values;

use extas\components\repositories\Repository;
use extas\interfaces\values\IValueRepository;

/**
 * Class ValueRepository
 *
 * @package extas\components\values
 * @author jeyroik <jeyroik@gmail.com>
 */
class ValueRepository extends Repository implements IValueRepository
{
    protected string $name = 'values';
    protected string $scope = 'extas';
    protected string $pk = Value::FIELD__NAME;
    protected string $itemClass = Value::class;
}
