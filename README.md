### StopWatch - measures time inside the scripts

This library is a super simple to tool for measuring time between two points in the script.

Setup
-----

Add the library to your `composer.json` file in your project:

```javascript
{
  "require": {
      "mvan/stopwatch": "1.*"
  }
}
```

Use [composer](http://getcomposer.org) to install the library:

```bash
$ php composer.phar install
```

Composer will install CLItoris inside your vendor folder. Then you can add the following to your
.php files to use the library with Autoloading.

```php
require_once __DIR__ . '/vendor/autoload.php';
```

Alternatively, use composer on the command line to require and install CLItoris:

```
$ php composer.phar require mvan/stopwatch:1.*
```

### Minimum Requirements
 * PHP 7

Usage
-----
```php
<?php

$sw = new StopWatch();
// Set a start point in time
$sw->start();
sleep(30);
// Stop measuring time
$sw->stop();

// Show results
print $sw->getResult().PHP_EOL;
print $sw->getResult(StopWatch::IN_SECONDS).PHP_EOL;
print $sw->getResult(StopWatch::IN_MINUTES).PHP_EOL;
```