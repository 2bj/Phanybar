# Phanybar [![Packagist](https://img.shields.io/packagist/v/2bj/phanybar.svg?style=flat-square)](https://packagist.org/packages/2bj/phanybar) [![Packagist](https://img.shields.io/packagist/l/2bj/phanybar.svg?style=flat-square)](http://2bj.mit-license.org)

Control [AnyBar](https://github.com/tonsky/AnyBar) from the command line or from your php code

## Install

**You must have [AnyBar](https://github.com/tonsky/AnyBar) installed and running**

The usual :
```
composer global require 2bj/phanybar
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
