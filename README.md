# PHPStan Zend Framework / Expressive extension

Needed extension to sync things easier.

May or may not be useful.

phpstan 0.10 support comes later (because legacy...)

## Usage

First, `composer require --dev asgrim/phpstan-zend-framework`

Then add to `phpstan.neon`:

```
services:
	-
		class: Asgrim\PhpStanZendFramework\InputFilterToAcceptParsedBodyExtension
		tags:
			- phpstan.broker.dynamicMethodReturnTypeExtension
```
