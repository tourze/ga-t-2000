# GA/T 2000 公安信息代码

[English](#english) | [中文](#中文)

## English

A PHP package for GA/T 2000 (Public Security Information Code) standards, providing enums and constants for various public security related codes.

### Features

- Complete implementation of document type codes (GA/T 2000.156-2016)
- Type-safe PHP 8.1+ enums
- Support for labels and remarks
- Easy to use in forms and data validation

### Installation

```bash
composer require tourze/ga-t-2000
```

### Usage

```php
use Tourze\GAT2000\DocumentType;

// Get document type code
$code = DocumentType::ID_CARD->value; // '111'

// Get document type label
$label = DocumentType::ID_CARD->getLabel(); // '身份证'

// Get document type remark (if any)
$remark = DocumentType::TEMP_ENTRY_EXIT_CARD->getRemark(); // '临时出入内部单位证'

// Get all document types as array
$types = DocumentType::items(); // ['111' => '身份证', '112' => '临时身份证', ...]
```

### Requirements

- PHP 8.1 or higher
- tourze/enum-extra package

## 中文

GA/T 2000（公安信息代码）标准的 PHP 包，提供各种公安相关代码的枚举和常量。

### 特性

- 完整的证件类型代码实现（GA/T 2000.156-2016）
- 类型安全的 PHP 8.1+ 枚举
- 支持标签和备注
- 易于在表单和数据验证中使用

### 安装

```bash
composer require tourze/ga-t-2000
```

### 使用示例

```php
use Tourze\GAT2000\DocumentType;

// 获取证件类型代码
$code = DocumentType::ID_CARD->value; // '111'

// 获取证件类型标签
$label = DocumentType::ID_CARD->getLabel(); // '身份证'

// 获取证件类型备注（如果有）
$remark = DocumentType::TEMP_ENTRY_EXIT_CARD->getRemark(); // '临时出入内部单位证'

// 获取所有证件类型数组
$types = DocumentType::items(); // ['111' => '身份证', '112' => '临时身份证', ...]
```

### 系统要求

- PHP 8.1 或更高版本
- tourze/enum-extra 包
