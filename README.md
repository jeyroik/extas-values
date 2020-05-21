![tests](https://github.com/jeyroik/extas-values/workflows/PHP%20Composer/badge.svg?branch=master&event=push)
![codecov.io](https://codecov.io/gh/jeyroik/extas-values/coverage.svg?branch=master)
<a href="https://github.com/phpstan/phpstan"><img src="https://img.shields.io/badge/PHPStan-enabled-brightgreen.svg?style=flat" alt="PHPStan Enabled"></a>
<a href="https://codeclimate.com/github/jeyroik/extas-values/maintainability"><img src="https://api.codeclimate.com/v1/badges/b37ced1fd93c27c3efec/maintainability" /></a>

# Описание

Базовый пакет для обработчиков значений.

# Использование

`extas.json`
```json
{
  "values": [
    {
      "name": "test",
      "title": "Test",
      "description": "Set value to test",
      "class": "tests\\TestValueDispatcher"
    }
  ]
}
```

```php
use extas\components\Item;
use extas\components\THasValue;
use extas\components\THasComplexValue;

$item = new class extends Item {
    use THasValue;
    use THasComplexValue;
    protected function getSubjectForExtension(): string
    {
        return 'test';
    }
};

echo $item->buildValue(); // test
```
