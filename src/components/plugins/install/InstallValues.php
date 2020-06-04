<?php
namespace extas\components\plugins\install;

use extas\components\values\Value;

/**
 * Class InstallValues
 *
 * @package extas\components\plugins\install
 * @author jeyroik <jeyroik@gmail.com>
 */
class InstallValues extends InstallSection
{
    protected string $selfSection = 'values';
    protected string $selfName = 'value';
    protected string $selfRepositoryClass = 'valueRepository';
    protected string $selfUID = Value::FIELD__NAME;
    protected string $selfItemClass = Value::class;
}
