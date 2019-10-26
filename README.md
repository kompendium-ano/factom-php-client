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


# Usage

```php
require_once __DIR__ . '/../vendor/autoload.php';;
require_once __DIR__.'/../vendor/kompendium/factom-api-php/config.php';

use Factom\Api\Blocks;
```

#### Retreiving a balance

```php
# factomd -> Get EC Balance
# address: EC2dTBH2Nc9t9Y7RFD3FYMN5ottoPeHdk6xqUWEc6eHVoBPj6CmH


```

#### Reading Entry Data
```php
# factomd -> entry api
```

#### Writing an Entry
*Note: Ensure data in the entry fields is hex-encoded. This includes the content section.*

```php
# walletd -> compose entry -> ( <COMMIT>, <REVEAL>)
# chainid: 48e0c94d00bf14d89ab10044075a370e1f55bcb28b2ff16206d865e192827645
# ext-ids: [ "cd90", "90cd"]
# content: "abcdef"
# ec-pub: "EC2DKSYyRcNWf7RS963VFYgMExo1824HVeCfQ9PGPmNzwrcmgm2r"

# factomd -> commit entry
# params: <COMMIT>

# factomd -> reveal entry
#params: <REVEAL>
```

#### Block Height and Current Minute
```php
# factomd -> Get Height

# factomd -> current minute
```



#### Sending A Transaction
```php
# walletd -> new-transaction
# tx-name: "MyTx"

# walletd -> add Input
# tx-name: "MyTx"
# amount: 10000
# address: FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q

# walletd -> add Output
# tx-name: "MyTx"
# amount: 10000
# address: FA2H7gecy8Nr7cxF7ngtByW23PxvrysuzYMAiAhbRTddCWZTLs4P

# walletd -> add Fee
# tx-name: "MyTx"
# address: FA2jK2HcLnRdS94dEcU27rF3meoJfpUcZPSinpb7AwQvPRY6RL1Q

# walletd -> Sign Transaction
# tx-name: "MyTx"

# walletd -> Compose Transaction -> <TX HEX STRING>
# tx-name: "MyTx"

# factomd -> factoidSubmit
#transaction: <TX HEX STRING>
```

## Testing

```bash
<SHOW HOW TO RUN THE TESTS>

php tests/test.php
```

## Support

Additional support for the Factom Protocol or library usage can be found on [discord](https://discord.gg/mYmcQM2)

## Development

To contribute to the factom-php library, clone the repository, create a feature branch and submit a PR to the develop branch.

# Examples

Found in the [examples]("examples/Readme.md") folder


