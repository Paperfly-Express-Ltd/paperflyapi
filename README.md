# PAPERFLY - PaperflyApi


Paperfly Private Limited is the best logistics company in Bangladesh.


## Table of Contents

- [Getting Started](#getting-started)
  - [Installation](#installation)
  - [Usage](#usage)
- [Examples](#examples)
- [Video Explanation](https://www.youtube.com/watch?v=KCXGY4Ukhxk&feature=youtu.be)
- [API Documentation](#api-documentation)
- [Mail Type explanation](#mail-type)


## Getting Started


- Complete registration from merchant panel
- Get Token
- Install package
- You are ready to go.



### Installation

The recommended way to install PAPERFLY PHP Client is through [Composer](https://getcomposer.org).

```bash
// Install Composer
curl -sS https://getcomposer.org/installer | php

// Add PAPERFLY PHP client as a dependency
composer require onlinecheckwriter/mailcheck
```

After installing, you need to require Composer's autoloader:

```php
require_once __DIR__ . '/vendor/autoload.php';
```

### Usage

Check variables in .env file and change the variables accordingly

## Examples

We've provided various examples for you to try out [here](https://github.com/onlinecheckwriter/mailcheck/tree/master/examples).

There are simple scripts to demonstrate how to create all the core onlinecheckwriter objects (checks, sent mail) 

## API Documentation
- [Introduction](https://apidoc.onlinecheckwriter.com/?version=latest)
- [Bank Account](https://apidoc.onlinecheckwriter.com/?version=latest#48499893-414c-4ce8-8dab-88f1d6c32ffd)
- [Payee](https://apidoc.onlinecheckwriter.com/?version=latest#6b0716e6-12df-4f9e-90a7-bb9a5e699940)
- [Check](https://apidoc.onlinecheckwriter.com/?version=latest#a69a82af-6c8f-492d-a976-87866392b534)
- [Mail](https://apidoc.onlinecheckwriter.com/?version=latest#02510e12-f13c-42fa-b6dc-7109e518a629)

=======================

### Mail Type
- 1 = First Class Mail
- 2 = First Class with Tracking
- 4 = USPS Priority Mail
- 5 = USPS Express Mail
- 6 = Fedex express saver
- 11 = Fedex 2 days shipping
- 11 = Fedex Standard Overnight
- 13 = Fedex Priority Overnight


Copyright &copy; 2019 onlinecheckwriter.com

