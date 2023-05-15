## FileReader

Package for file reading...

### Install

```
composer require aigletter/filesystem
```

### Usage

```php
<?php

use \Aigletter\Filesystem\FileReader;

$reader = new FileReader();

$lines[] = $reader->read();
```