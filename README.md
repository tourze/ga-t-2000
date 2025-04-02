# GA/T 2000 Public Security Information Code

[![Latest Version](https://img.shields.io/packagist/v/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![License](https://img.shields.io/packagist/l/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)

[English](README.md) | [中文](README.zh-CN.md)

A PHP package that implements GA/T 2000 (Public Security Information Code) standards, providing type-safe enums for various document related codes.

## Features

- Complete implementation of GA/T 2000.156-2016 document type codes
- Type-safe PHP 8.1+ enums with strict typing
- Comprehensive Chinese labels for all codes
- Additional remarks for special document types
- Easy integration with forms and data validation
- PSR-4 compliant autoloading
- Zero dependencies except PHP 8.1+

## Installation

You can install the package via composer:

```bash
composer require tourze/ga-t-2000
```

## Requirements

- PHP 8.1 or higher
- Composer for dependency management

## Quick Start

```php
use Tourze\GAT2000\DocumentType;

// Get document type code
$code = DocumentType::ID_CARD->value; // '111'

// Get document type label in Chinese
$label = DocumentType::ID_CARD->getLabel(); // '身份证'

// Get document type remark (if available)
$remark = DocumentType::TEMP_ENTRY_EXIT_CARD->getRemark(); // '临时出入内部单位证'

// Get all document types as array
$types = DocumentType::items(); // ['111' => '身份证', '112' => '临时身份证', ...]
```

## Available Document Types

The package includes all standard document types defined in GA/T 2000.156-2016, including but not limited to:

- Identity documents (ID cards, passports, etc.)
- Professional certificates (police, judge, lawyer cards, etc.)
- Border control documents
- Special permits and licenses
- Organization and business documents

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
