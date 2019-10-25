# factom-php

# Implementation
   
Open a command console, enter your project directory and execute the following command to download the latest stable version of this bundle:

$ composer require harishankar/factom-api-php

The above command requires to have composer installed globally.

# Usage
require_once __DIR__ . '/../vendor/autoload.php';;
require_once __DIR__.'/../vendor/harishankar/factom-api-php/config.php';

use Factom\Api\Blocks;

# get block by height
$ablock = Blocks::ablockByHeight();

# Node Url

If you want to change the node url then you can update node url in following file 

vendor/harishankar/factom-api-php/config.php

# Test
php tests/test.php

# Example

You can check the implementation of factom library in  examples folder.

examples/tests/examples.php

# Documentation

You can provide doc link here
