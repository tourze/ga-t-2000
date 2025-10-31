# GA/T 2000 Public Security Information Code

[![Latest Version](https://img.shields.io/packagist/v/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![PHP Version](https://img.shields.io/packagist/php-v/tourze/ga-t-2000.svg?style=flat-square)](https://php.net)
[![Build Status](https://img.shields.io/github/actions/workflow/status/tourze/ga-t-2000/ci.yml?branch=main&style=flat-square)](https://github.com/tourze/ga-t-2000/actions)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/ga-t-2000.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/ga-t-2000)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![License](https://img.shields.io/packagist/l/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![Coverage Status](https://img.shields.io/codecov/c/github/tourze/php-monorepo.svg?style=flat-square)](https://codecov.io/gh/tourze/php-monorepo)

[English](README.md) | [中文](README.zh-CN.md)

A PHP package that implements GA/T 2000 (Public Security Information Code) standards, providing type-safe enums for various document related codes.

## Features

- Complete implementation of GA/T 2000.156-2016 document type codes
- Type-safe PHP 8.1+ enums with strict typing
- Comprehensive Chinese labels for all codes
- Additional remarks for special document types
- Easy integration with forms and data validation
- PSR-4 compliant autoloading
- Minimal dependencies: PHP 8.1+ and tourze/enum-extra

## Installation

You can install the package via composer:

```bash
composer require tourze/ga-t-2000
```

## Requirements

- PHP 8.1 or higher
- Composer for dependency management

## Quick Start

### Basic Usage

```php
use Tourze\GAT2000\DocumentType;

// Get document type code
$code = DocumentType::ID_CARD->value; // '111'

// Get document type label in Chinese
$label = DocumentType::ID_CARD->getLabel(); // '身份证'

// Get document type remark (if available)
$remark = DocumentType::TEMP_ENTRY_EXIT_CARD->getRemark(); // '临时出入内部单位证'

// Convert to array
$array = DocumentType::ID_CARD->toArray(); 
// ['value' => '111', 'label' => '身份证']
```

### Working with Forms

```php
use Tourze\GAT2000\DocumentType;

// Generate options for select dropdown
$options = DocumentType::genOptions();
// [
//     ['label' => '身份证', 'text' => '身份证', 'value' => '111', 'name' => '身份证'],
//     ['label' => '临时身份证', 'text' => '临时身份证', 'value' => '112', 'name' => '临时身份证'],
//     // ... more options
// ]

// Get select item for specific document type
$selectItem = DocumentType::ID_CARD->toSelectItem();
// ['label' => '身份证', 'text' => '身份证', 'value' => '111', 'name' => '身份证']
```

### Type Conversion

```php
use Tourze\GAT2000\DocumentType;

// Convert from string value (throws exception if invalid)
$type = DocumentType::from('111'); // DocumentType::ID_CARD

// Try to convert from string value (returns null if invalid)
$type = DocumentType::tryFrom('111'); // DocumentType::ID_CARD
$type = DocumentType::tryFrom('999'); // null

// Get all document types as array
$types = DocumentType::items(); // ['111' => '身份证', '112' => '临时身份证', ...]
```

### Environment-based Filtering

```php
// You can filter options using environment variables
$_ENV['enum-display:' . DocumentType::class . '-111'] = false; // Hide ID_CARD
$filteredOptions = DocumentType::genOptions(); // ID_CARD won't appear in options
```

## Available Document Types

The package includes all standard document types defined in GA/T 2000.156-2016, including but not limited to:

- Identity documents (ID cards, passports, etc.)
- Professional certificates (police, judge, lawyer cards, etc.)
- Border control documents
- Special permits and licenses
- Organization and business documents

## API Reference

### DocumentType Enum

The `DocumentType` enum implements the following interfaces:

- `Labelable` - Provides `getLabel()` method for Chinese labels
- `Itemable` - Provides `toArray()` and `items()` methods
- `Selectable` - Provides `toSelectItem()` and `genOptions()` methods for form integration

### Methods

- `getLabel(): string` - Returns the Chinese label for the document type
- `getRemark(): ?string` - Returns additional remarks for specific document types (if available)
- `toArray(): array` - Converts the enum to an array with 'value' and 'label' keys
- `toSelectItem(): array` - Converts the enum to a select item array
- `items(): array` - Returns all document types as an associative array
- `genOptions(): array` - Generates options array for select dropdowns

## Testing

```bash
# Run tests from project root
./vendor/bin/phpunit packages/ga-t-2000/tests

# Run PHPStan analysis
php -d memory_limit=2G ./vendor/bin/phpstan analyse packages/ga-t-2000
```

## Changelog

### [0.1.0] - 2024-01-01

- Initial release with complete GA/T 2000.156-2016 document type codes
- Type-safe PHP 8.1+ enum implementation
- Chinese label support for all document types
- Integration with form generation utilities
- Environment-based option filtering

## Contributing

Please see [CONTRIBUTING.md](CONTRIBUTING.md) for details.

## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
