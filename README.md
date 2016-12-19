# Rastris

RAndom STRIngS generator.

![Travis CI](https://travis-ci.org/MpStyle/rastris.svg?branch=master)

## How to install 
Simply add a dependency on _mpstyle/rastris_ to your project's _composer.json_ file if you use Composer to manage the dependencies of your project. Here is a minimal example of a composer.json file that just defines a development-time dependency on MpStyle Rastris:

```json
{
    "require-dev": {
        "mpstyle/rastris": "1.*.*"
    }
}
```

or using console:

```
composer require "mpstyle/rastris=1.*.*"
```

## How to use

Generate a random string (the length is 10 characters) using this subset of chars _\|!"£$%&/()=?^+_*§°ç@-.,;_<>€[]{}abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ*
```php
$generator = new RandomCharsGenerator();
$str = $generator->get(10);
```

Generate a random string (the length is 10 characters) using this subset of chars _abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_
```php
$generator = new RandomCharsGenerator();
$str = $generator->getAlphas(10);
```

Generate a random string (the length is 10 characters) using this subset of chars _ABCDEFGHIJKLMNOPQRSTUVWXYZ_
```php
$generator = new RandomCharsGenerator();
$str = $generator->getUpperAlphas(10);
```

Generate a random string (the length is 10 characters) using this subset of chars _abcdefghijklmnopqrstuvwxyz_
```php
$generator = new RandomCharsGenerator();
$str = $generator->getLowerAlphas(10);
```

Generate a random string (the length is 10 characters) using this subset of chars _1234567890_
```php
$generator = new RandomCharsGenerator();
$str = $generator->getDigits(10);
```

## Run tests
In the root of the project run:
```
composer test
```
