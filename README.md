# PHP Code Style
Code styling standard for Oirë projects written in PHP.
[![MIT License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/Oire/php-code-style/blob/master/LICENSE)

This repository contains a set of [PHP CS Fixer](https://github.com/friendsofphp/php-cs-fixer) rules we use in our projects at Oirë. You can use them in your projects, too.  
The rules were reviewed with *PHP CS Fixer version 2.16.3 Yellow Bird*.

## Usage
I assume you use [Composer](https://getcomposer.org/) for your dependency management. As we dont add this tiny project to Packagist, first you need to add its repository to your *composer.json* file as follows:

```json
{
    <...>,
    "repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/Oire/php-code-style"
        }
    ],
```

Then add a file called `.php_cs.dist` to the root of your projects with this contents, adjusting your paths accordingly:

```php
<?php
use Oire\Helpers\CsFixerRules;

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__);

return CsFixerRules::style($finder);
```

If you have Php-Cs-Fixer installed locally in your project, run:

```shell
./vendor/bin/php-cs-fixer fix
```

That's it, enjoy your cleaner code style!

## Contributing

Contributions are welcome. However, as code style is mostly a pure matter of taste (I do include `@PSR2` ruleset which is, it seems, adopted by everyone nowadays), I may reject your pull request if I don't like the rules in there 😀.

## License
Copyright © 2020, Andre Polykanine also known as Menelion Elensúlë, [The Magical Kingdom of Oirë](https://github.com/Oire/).  
This software is licensed under an MIT license.