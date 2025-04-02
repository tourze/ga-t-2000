# GA/T 2000 公安信息代码

[![Latest Version](https://img.shields.io/packagist/v/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![Total Downloads](https://img.shields.io/packagist/dt/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)
[![License](https://img.shields.io/packagist/l/tourze/ga-t-2000.svg?style=flat-square)](https://packagist.org/packages/tourze/ga-t-2000)

[English](README.md) | [中文](README.zh-CN.md)

一个实现 GA/T 2000（公安信息代码）标准的 PHP 包，提供类型安全的枚举用于常用证件代码。

## 特性

- 完整实现 GA/T 2000.156-2016 证件类型代码
- 基于 PHP 8.1+ 的类型安全枚举
- 完整的中文标签支持
- 特殊证件类型的附加说明
- 易于集成到表单和数据验证
- 符合 PSR-4 自动加载规范
- 除 PHP 8.1+ 外无其他依赖

## 安装

通过 Composer 安装：

```bash
composer require tourze/ga-t-2000
```

## 系统要求

- PHP 8.1 或更高版本
- Composer 用于依赖管理

## 快速开始

```php
use Tourze\GAT2000\DocumentType;

// 获取证件类型代码
$code = DocumentType::ID_CARD->value; // '111'

// 获取证件类型中文标签
$label = DocumentType::ID_CARD->getLabel(); // '身份证'

// 获取证件类型备注（如果有）
$remark = DocumentType::TEMP_ENTRY_EXIT_CARD->getRemark(); // '临时出入内部单位证'

// 获取所有证件类型数组
$types = DocumentType::items(); // ['111' => '身份证', '112' => '临时身份证', ...]
```

## 可用证件类型

本包包含 GA/T 2000.156-2016 中定义的所有标准证件类型，包括但不限于：

- 身份证件（身份证、护照等）
- 职业证件（警官证、法官证、律师证等）
- 边境管理证件
- 特殊许可证和执照
- 组织和企业证件

## 贡献

详情请参见 [CONTRIBUTING.md](CONTRIBUTING.md)。

## 开源协议

MIT 开源协议。详情请参见 [License 文件](LICENSE)。
