# IPFS Client in PHP

### Install:
```bash
 composer require nebulaprotocol/ipfs-php
 ```

### Examples:

```php

use IPFSPHP\IPFS;

include 'vendor/autoload.php';

$ipfs = new IPFS('127.0.0.1', 8080, 5001);



```

## API


#### add

Adds content to IPFS. 

**Usage**
```PHP
$hash = $ipfs->add($filePath);
```



#### cat

Retrieves the contents of a single hash.

**Usage**
```PHP
$ipfs->cat($hash);
```

#### ls
Gets the node structure of a hash.

**Usage**
```PHP
$obj = $ipfs->ls($hash);

foreach ($obj as $e) {
	echo $e['Hash'];
	echo $e['Size'];
	echo $e['Name'];
}
```


#### Object size

Returns object size.

**Usage**
```PHP
$size = $ipfs->size($hash);
```

#### Pin

Pins a hash.

**Usage**
```PHP
$ipfs->pinAdd($hash);
```

## CREDITS

Initially forked from https://github.com/cloutier/php-ipfs-api 