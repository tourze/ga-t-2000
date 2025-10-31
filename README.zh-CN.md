# GA/T 2000 公安信息代码

[![Latest Version](https://img.shields.io/packagist/v/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![PHP Version](https://img.shields.io/packagist/php-v/tourze/ga-t-2000.svg?style=flat-square)](https://php.net)
[![Build Status](https://img.shields.io/github/actions/workflow/status/tourze/ga-t-2000/ci.yml?branch=main&style=flat-square)](https://github.com/tourze/ga-t-2000/actions)
[![Quality Score](https://img.shields.io/scrutinizer/g/tourze/ga-t-2000.svg?style=flat-square)](https://scrutinizer-ci.com/g/tourze/ga-t-2000)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![License](https://img.shields.io/packagist/l/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![Coverage Status](https://img.shields.io/codecov/c/github/tourze/php-monorepo.svg?style=flat-square)](https://codecov.io/gh/tourze/php-monorepo)

[English](README.md) | [中文](README.zh-CN.md)

一个实现 GA/T 2000（公安信息代码）标准的 PHP 包，提供类型安全的枚举用于常用证件代码。

## 特性

- 完整实现 GA/T 2000.156-2016 证件类型代码
- 基于 PHP 8.1+ 的类型安全枚举
- 完整的中文标签支持
- 特殊证件类型的附加说明
- 易于集成到表单和数据验证
- 符合 PSR-4 自动加载规范
- 最小依赖：PHP 8.1+ 和 tourze/enum-extra

## 安装

通过 Composer 安装：

```bash
composer require tourze/ga-t-2000
```

## 系统要求

- PHP 8.1 或更高版本
- Composer 用于依赖管理

## 快速开始

### 基本使用

```php
use Tourze\GAT2000\DocumentType;

// 获取证件类型代码
$code = DocumentType::ID_CARD->value; // '111'

// 获取证件类型中文标签
$label = DocumentType::ID_CARD->getLabel(); // '身份证'

// 获取证件类型备注（如果有）
$remark = DocumentType::TEMP_ENTRY_EXIT_CARD->getRemark(); // '临时出入内部单位证'

// 转换为数组
$array = DocumentType::ID_CARD->toArray(); 
// ['value' => '111', 'label' => '身份证']
```

### 表单集成

```php
use Tourze\GAT2000\DocumentType;

// 生成下拉选择框选项
$options = DocumentType::genOptions();
// [
//     ['label' => '身份证', 'text' => '身份证', 'value' => '111', 'name' => '身份证'],
//     ['label' => '临时身份证', 'text' => '临时身份证', 'value' => '112', 'name' => '临时身份证'],
//     // ... 更多选项
// ]

// 获取特定证件类型的选择项
$selectItem = DocumentType::ID_CARD->toSelectItem();
// ['label' => '身份证', 'text' => '身份证', 'value' => '111', 'name' => '身份证']
```

### 类型转换

```php
use Tourze\GAT2000\DocumentType;

// 从字符串值转换（无效时抛出异常）
$type = DocumentType::from('111'); // DocumentType::ID_CARD

// 尝试从字符串值转换（无效时返回 null）
$type = DocumentType::tryFrom('111'); // DocumentType::ID_CARD
$type = DocumentType::tryFrom('999'); // null

// 获取所有证件类型数组
$types = DocumentType::items(); // ['111' => '身份证', '112' => '临时身份证', ...]
```

### 基于环境变量的过滤

```php
// 可以使用环境变量来过滤选项
$_ENV['enum-display:' . DocumentType::class . '-111'] = false; // 隐藏身份证选项
$filteredOptions = DocumentType::genOptions(); // 身份证不会出现在选项中
```

## 可用证件类型

本包包含 GA/T 2000.156-2016 中定义的所有标准证件类型，包括但不限于：

- 身份证件（身份证、护照等）
- 职业证件（警官证、法官证、律师证等）
- 边境管理证件
- 特殊许可证和执照
- 组织和企业证件

## API 参考

### DocumentType 枚举

`DocumentType` 枚举实现了以下接口：

- `Labelable` - 提供 `getLabel()` 方法用于中文标签
- `Itemable` - 提供 `toArray()` 和 `items()` 方法
- `Selectable` - 提供 `toSelectItem()` 和 `genOptions()` 方法用于表单集成

### 方法

- `getLabel(): string` - 返回证件类型的中文标签
- `getRemark(): ?string` - 返回特定证件类型的附加备注（如果有）
- `toArray(): array` - 将枚举转换为包含 'value' 和 'label' 键的数组
- `toSelectItem(): array` - 将枚举转换为选择项数组
- `items(): array` - 返回所有证件类型的关联数组
- `genOptions(): array` - 生成下拉选择框的选项数组

## 测试

```bash
# 在项目根目录运行测试
./vendor/bin/phpunit packages/ga-t-2000/tests

# 运行 PHPStan 分析
php -d memory_limit=2G ./vendor/bin/phpstan analyse packages/ga-t-2000
```

## 更新日志

### [0.1.0] - 2024-01-01

- 首次发布，完整实现 GA/T 2000.156-2016 证件类型代码
- 基于 PHP 8.1+ 的类型安全枚举实现
- 支持所有证件类型的中文标签
- 集成表单生成工具
- 基于环境变量的选项过滤功能

## 贡献

详情请参见 [CONTRIBUTING.md](CONTRIBUTING.md)。

## 开源协议

MIT 开源协议。详情请参见 [License 文件](LICENSE)。
