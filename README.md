# PHPUnit Testing Demonstration

## Requirements
- PHP 7.x

## Instructions
1. Install dependency softwares
```bash
$ ./composer.phar install
```

1. Verify
```bash
$ ./vendor/phpunit/phpunit/phpunit --bootstrap src/Greeting.php test/GreetingTest
```

The output should be

```
PHPUnit 6.3.0 by Sebastian Bergmann and contributors.

.                                                                   1 / 1 (100%)

Time: 54 ms, Memory: 4.00MB

OK (1 test, 1 assertion)
```
