<?php
namespace extas\components\plugins;

use extas\components\values\Value;
use extas\interfaces\values\IValueRepository;

/**
 * Class PluginInstallValues
 *
 * @package extas\components\plugins
 * @author jeyroik <jeyroik@gmail.com>
 */
class PluginInstallValues extends PluginInstallDefault
{
    protected string $selfSection = 'values';
    protected string $selfName = 'value';
    protected string $selfRepositoryClass = IValueRepository::class;
    protected string $selfUID = Value::FIELD__NAME;
    protected string $selfItemClass = Value::class;
}
