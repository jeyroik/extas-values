<?php
namespace extas\components\plugins\uninstall;

use extas\components\values\Value;

/**
 * Class UninstallValues
 *
 * @package extas\components\plugins\uninstall
 * @author jeyroik <jeyroik@gmail.com>
 */
class UninstallValues extends UninstallSection
{
    protected string $selfSection = 'values';
    protected string $selfName = 'value';
    protected string $selfRepositoryClass = 'valueRepository';
    protected string $selfUID = Value::FIELD__NAME;
    protected string $selfItemClass = Value::class;
}
