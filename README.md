[![Build Status](https://travis-ci.com/kompendium-llc/factom-php.svg?branch=master)](https://travis-ci.com/kompendium-llc/factom-php)
[![codecov](https://codecov.io/gh/kompendium-llc/factom-php/branch/master/graph/badge.svg)](https://codecov.io/gh/kompendium-llc/factom-php)
[![License](https://img.shields.io/badge/license-MIT-blue.svg)](https://github.com/kompendium-llc/factom-php/blob/master/LICENSE)
[![Discord](https://img.shields.io/discord/419201548372017163.svg?label=&logo=discord&logoColor=ffffff&color=7389D8&labelColor=6A7EC2)](https://discord.gg/mYmcQM2)

# Factom-Php

## [Documentation](kompendium-llc.github.io/factom-php)

A json-rpc client for the Factom protocol. 

# Installation
   
**Composer**:
```bash
composer require kompendium/factom-api-php
```

**Git**:
```bash
git clone  https://github.com/kompendium-llc/factom-php.git
```

# Config
    You can change default node url or ports
    Add this lines after this -
    require_once __DIR__ . '/../vendor/autoload.php';

    
    // Set Custom host of node
    define('walletHost', 'https://dev.factomd.net/v2');
    define('host', 'https://dev.factomd.net/v2');
    define('debugHost', 'http://localhost:8088/debug');

# Usage

```php
require_once __DIR__ . '/../vendor/autoload.php';;
require_once __DIR__.'/../vendor/kompendium/factom-api-php/config.php';

use Factom\Api\Blocks;
```

#### Retreiving a balance

```php
use Factom\Api\Factoid;
result = Factoid::factoidBalance("EC2dTBH2Nc9t9Y7RFD3FYMN5ottoPeHdk6xqUWEc6eHVoBPj6CmH");
print_r(result); 

```

#### Reading Entry Data
```php
# factomd -> entry api
use Factom\Api\Entry;
result = Entry::entry("61b3d3175f211f3b23b455bb8710fdbcf545cb40da397d9e20b26eca31c389a6");
print_r(result);
```

#### Writing an Entry
*Note: Ensure data in the entry fields is hex-encoded. This includes the content section.*

```php
use Factom\Api\Entry;
$composeEntry = Entry::composeEntry("48e0c94d00bf14d89ab10044075a370e1f55bcb28b2ff16206d865e192827645","EC2DKSYyRcNWf7RS963VFYgMExo1824HVeCfQ9PGPmNzwrcmgm2r");
print_r($composeEntry);

use Factom\Api\Commits;
$commitEntry = Commits::commitEntry("00015507C1024BF5C956749FC3EBA4ACC60FD485FB100E601070A44FCCE54FF358D60669854734013B6A27BCCEB6A42D62A3A8D02A6F0D73653215771DE243A63AC048A18B59DA29F4CBD953E6EBE684D693FDCA270CE231783E8ECC62D630F983CD59E559C6253F84D1F54C8E8D8665D493F7B4A4C1864751E3CDEC885A64C2144E0938BF648A00");
print_r($commitEntry);

use Factom\Api\Entry;
$revealEntry = Entry::revealEntry("007E18CCC911F057FB111C7570778F6FDC51E189F35A6E6DA683EC2A264443531F000E0005746573745A0005746573745A48656C6C6F20466163746F6D21");
print_r($revealEntry);
```

#### Block Height and Current Minute
```php
# factomd -> Get Height
use Factom\Api\FactomWalletd;
$getheight = FactomWalletd::getHeight();
print_r($getheight);

# factomd -> current minute
use Factom\Api\Minute;
$currentMinute = Minute::currentMinute();
print_r($currentMinute);
```



#### Sending A Transaction
```php
# send transaction
use Factom\Api\Transaction;
$data = [
    "txname" => "test1234",
    "inputAddress" => "FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q",
    "inputAmount" => 1000012000,
    "outputAddress" => "FA2yeHMMJR6rpjRYGe3Q4ogThHUmByk3WLhTjQDvPrxDoTYF8BbC",
    "outputAmount" => 1000000000
];
$transaction = Transaction::sendTransaction($data);
print_r($transaction);
```

## Testing

```bash
php tests/blocks.php

php tests/chains.php

php tests/commits.php

php tests/debug.php

php tests/entry.php

php tests/factoid.php

php tests/factomaddress.php

php tests/factomd.php

php tests/factomwalletd.php

php tests/minute.php

php tests/pending.php

php tests/security.php

php tests/transaction.php
```

## Response parser class 

Response parser class is converting the result in proper json format to access the result directly through key name.

## How to fetch response by key
```
$ablock = Blocks::ablockByHeight();

echo $ablock->result->ablock->header->prevbackrefhash;

You can access all the keys like above mentioned for all the apis.
```
## Support

Additional support for the Factom Protocol or library usage can be found on [discord](https://discord.gg/mYmcQM2)

## Development

To contribute to the factom-php library, clone the repository, create a feature branch and submit a PR to the develop branch.

# Examples

Found in the [examples]("examples/Readme.md") folder


