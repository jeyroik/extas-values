<?php
namespace tests;

use Dotenv\Dotenv;
use extas\components\extensions\ExtensionRepository;
use extas\components\extensions\TSnuffExtensions;
use extas\components\Item;
use extas\components\repositories\TSnuffRepository;
use extas\components\THasComplexValue;
use extas\components\THasValue;
use extas\components\values\Value;
use extas\components\values\ValueRepository;
use extas\components\values\WithComplexValue;
use extas\interfaces\IHasValue;
use extas\interfaces\repositories\IRepository;
use extas\interfaces\values\IValueDispatcher;
use PHPUnit\Framework\TestCase;

/**
 * Class ValueTest
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class ValueTest extends TestCase
{
    use TSnuffRepository;

    protected IRepository $valueRepo;

    protected function setUp(): void
    {
        parent::setUp();
        $env = Dotenv::create(getcwd() . '/tests/');
        $env->load();
        $this->valueRepo = new ValueRepository();
        $this->registerSnuffRepos([
            'valueRepository' => ValueRepository::class,
            'extensionRepository' => ExtensionRepository::class
        ]);
    }

    protected function tearDown(): void
    {
        $this->unregisterSnuffRepos();
    }

    public function testHasComplexValue()
    {
        $item = new class extends Item {
            use THasValue;
            use THasComplexValue;
            protected function getSubjectForExtension(): string
            {
                return 'test';
            }
        };

        $this->createWithSnuffRepo('valueRepository', new Value([
            Value::FIELD__NAME => 'test',
            Value::FIELD__CLASS => TestValueDispatcher::class
        ]));

        $this->assertEquals('test', $item->buildValue());
    }

    public function testValueAsSettings()
    {
        $item = new WithComplexValue([
            WithComplexValue::FIELD__VALUE => [
                'format' => 'Y-m-d',
                'timestamp' => time(),
                'say' => '@day is @time'
            ],
            IValueDispatcher::FIELD__REPLACES => [
                'day' => 'today'
            ]
        ]);

        $this->createWithSnuffRepo('valueRepository', new Value([
            Value::FIELD__NAME => 'test',
            Value::FIELD__CLASS => DateValueDispatcher::class
        ]));

        $this->assertEquals('today is ' . date('Y-m-d'), $item->buildValue());
    }
}
