<?php
namespace tests;

use Dotenv\Dotenv;
use extas\components\extensions\TSnuffExtensions;
use extas\components\Item;
use extas\components\THasComplexValue;
use extas\components\THasValue;
use extas\components\values\Value;
use extas\components\values\ValueRepository;
use extas\interfaces\repositories\IRepository;
use PHPUnit\Framework\TestCase;

/**
 * Class ValueTest
 *
 * @package tests
 * @author jeyroik <jeyroik@gmail.com>
 */
class ValueTest extends TestCase
{
    use TSnuffExtensions;

    protected IRepository $valueRepo;

    protected function setUp(): void
    {
        parent::setUp();
        $env = Dotenv::create(getcwd() . '/tests/');
        $env->load();
        $this->valueRepo = new ValueRepository();
        $this->addReposForExt([
            'valueRepository' => ValueRepository::class
        ]);
        $this->createRepoExt(['valueRepository']);
    }

    protected function tearDown(): void
    {
        $this->valueRepo->delete([Value::FIELD__NAME => 'test']);
        $this->deleteSnuffExtensions();
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

        $this->valueRepo->create(new Value([
            Value::FIELD__NAME => 'test',
            Value::FIELD__CLASS => TestValueDispatcher::class
        ]));

        $this->assertEquals('test', $item->buildValue());
    }
}
