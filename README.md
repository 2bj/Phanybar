# Phanybar
[![Latest Stable Version](https://poser.pugx.org/2bj/phanybar/v/stable.svg)](https://packagist.org/packages/2bj/phanybar)
[![License](https://poser.pugx.org/2bj/phanybar/license.svg)](https://packagist.org/packages/2bj/phanybar)

Control [AnyBar](https://github.com/tonsky/AnyBar) from the command line or from your php code

## Install

**You must have [AnyBar](https://github.com/tonsky/AnyBar) installed and running**

The usual :
```
composer [global] require 2bj/phanybar
```

## Usage

From the command line :

```
phanybar green
```

Or if [AnyBar](https://github.com/tonsky/AnyBar) is on another port :

```
phanybar black 1387
```

Or use it as a library :
```php
use Bakyt\Console\Phanybar;

$phanybar = new Phanybar;
$phanybar->send('green');
$phanybar->send('black', 1387);
```

## Thank's
[nanybar](https://github.com/rumpl/nanybar)

## License

[MIT](http://2bj.mit-license.org)
