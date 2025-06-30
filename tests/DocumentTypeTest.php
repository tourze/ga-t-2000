<?php

namespace Tourze\GAT2000\Tests;

use PHPUnit\Framework\TestCase;
use Tourze\GAT2000\DocumentType;

/**
 * DocumentType 枚举的单元测试
 */
class DocumentTypeTest extends TestCase
{
    /**
     * 测试枚举值可以被正确初始化
     */
    public function testEnumCasesExist(): void
    {
        $this->assertSame('111', DocumentType::ID_CARD->value);
        $this->assertSame('112', DocumentType::TEMP_ID_CARD->value);
        $this->assertSame('113', DocumentType::HOUSEHOLD_REGISTER->value);
        // 随机测试几个其他枚举值
        $this->assertSame('414', DocumentType::ORDINARY_PASSPORT->value);
        $this->assertSame('990', DocumentType::OTHER->value);
    }

    /**
     * 测试所有枚举值都是字符串类型且格式正确
     */
    public function testAllEnumValuesAreValidStrings(): void
    {
        foreach (DocumentType::cases() as $case) {
            $this->assertIsString($case->value);
            // 验证枚举值都是3位数字字符串
            $this->assertMatchesRegularExpression('/^\d{3}$/', $case->value);
        }
    }

    /**
     * 测试 getLabel 方法返回正确的标签
     */
    public function testGetLabel(): void
    {
        $this->assertSame('身份证', DocumentType::ID_CARD->getLabel());
        $this->assertSame('临时身份证', DocumentType::TEMP_ID_CARD->getLabel());
        $this->assertSame('户口簿', DocumentType::HOUSEHOLD_REGISTER->getLabel());
        $this->assertSame('普通护照', DocumentType::ORDINARY_PASSPORT->getLabel());
        $this->assertSame('其他', DocumentType::OTHER->getLabel());
    }

    /**
     * 测试所有枚举值都有对应的标签
     */
    public function testAllEnumValuesHaveLabels(): void
    {
        foreach (DocumentType::cases() as $case) {
            $label = $case->getLabel();
            $this->assertNotEmpty($label);
        }
    }

    /**
     * 测试 getRemark 方法返回正确的备注
     */
    public function testGetRemark(): void
    {
        // 直接使用断言比较对象
        $this->assertEquals('临时出入内部单位证', DocumentType::TEMP_ENTRY_EXIT_CARD->getRemark());
        $this->assertEquals(DocumentType::INSURANCE_DOCUMENT->getRemark(), DocumentType::INSURANCE_DOCUMENT->getRemark());
        $this->assertEquals('包括工会及各种协会会员证', DocumentType::MEMBER_CARD->getRemark());
        $this->assertEquals('介绍信和证明信等', DocumentType::CERTIFICATE_OF_INTRODUCTION->getRemark());

        // 测试没有备注的枚举值
        $this->assertNull(DocumentType::ID_CARD->getRemark());
        $this->assertNull(DocumentType::ORDINARY_PASSPORT->getRemark());
    }

    /**
     * 测试指定的枚举值能够通过字符串值正确获取
     */
    public function testFromValue(): void
    {
        $this->assertSame(DocumentType::ID_CARD, DocumentType::from('111'));
        $this->assertSame(DocumentType::TEMP_ID_CARD, DocumentType::from('112'));
        $this->assertSame(DocumentType::OTHER, DocumentType::from('990'));

        // 测试不存在的值
        $this->expectException(\ValueError::class);
        DocumentType::from('999');
    }

    /**
     * 测试 tryFrom 方法
     */
    public function testTryFrom(): void
    {
        $this->assertSame(DocumentType::ID_CARD, DocumentType::tryFrom('111'));
        $this->assertSame(DocumentType::TEMP_ID_CARD, DocumentType::tryFrom('112'));
        $this->assertSame(DocumentType::OTHER, DocumentType::tryFrom('990'));

        // 测试不存在的值，应返回 null
        $this->assertNull(DocumentType::tryFrom('999'));
    }

    /**
     * 测试从 ItemTrait 继承的 toSelectItem 方法
     */
    public function testToSelectItem(): void
    {
        $expectedItem = [
            'label' => '身份证',
            'text' => '身份证',
            'value' => '111',
            'name' => '身份证',
        ];

        $this->assertEquals($expectedItem, DocumentType::ID_CARD->toSelectItem());
    }

    /**
     * 测试从 ItemTrait 继承的 toArray 方法
     */
    public function testToArray(): void
    {
        $expectedArray = [
            'value' => '111',
            'label' => '身份证',
        ];

        $this->assertEquals($expectedArray, DocumentType::ID_CARD->toArray());
    }

    /**
     * 测试所有枚举值的 toArray 方法
     */
    public function testAllCasesToArray(): void
    {
        // 创建所有枚举值的数组转换期望结果
        $expectedArrays = [];
        foreach (DocumentType::cases() as $case) {
            $expectedArrays[$case->value] = [
                'value' => $case->value,
                'label' => $case->getLabel(),
            ];
        }

        // 对每个枚举值进行测试
        foreach (DocumentType::cases() as $case) {
            $this->assertEquals(
                $expectedArrays[$case->value],
                $case->toArray(),
                "枚举值 {$case->name} 的 toArray() 结果不正确"
            );
        }
    }

    /**
     * 测试从 SelectTrait 继承的 genOptions 方法
     */
    public function testGenOptions(): void
    {
        $options = DocumentType::genOptions();

        // 验证生成的选项数组结构正确
        $this->assertNotEmpty($options);

        // 验证第一个选项是否正确
        $this->assertEquals([
            'label' => '身份证',
            'text' => '身份证',
            'value' => '111',
            'name' => '身份证',
        ], $options[0]);

        // 验证最后一个选项是否正确
        $lastOption = end($options);
        $this->assertEquals([
            'label' => '其他',
            'text' => '其他',
            'value' => '990',
            'name' => '其他',
        ], $lastOption);

        // 验证选项数量与枚举值数量相同
        $this->assertCount(count(DocumentType::cases()), $options);
    }

    /**
     * 测试生成的选项与预期数组的完全匹配
     */
    public function testGenOptionsMatchesExpected(): void
    {
        // 手动创建预期的选项数组
        $expectedOptions = [];
        foreach (DocumentType::cases() as $case) {
            $expectedOptions[] = [
                'label' => $case->getLabel(),
                'text' => $case->getLabel(),
                'value' => $case->value,
                'name' => $case->getLabel(),
            ];
        }

        // 比较生成的选项与预期数组
        $this->assertEquals($expectedOptions, DocumentType::genOptions());
    }

    /**
     * 测试从环境变量过滤选项的功能
     */
    public function testOptionsFiltering(): void
    {
        // 保存原始环境变量
        $originalEnv = $_ENV;

        try {
            // 过滤掉 ID_CARD 选项
            $_ENV['enum-display:' . DocumentType::class . '-111'] = false;

            $options = DocumentType::genOptions();

            // 验证 ID_CARD 不在选项中
            foreach ($options as $option) {
                $this->assertNotEquals('111', $option['value']);
            }

            // 验证选项数量比枚举值数量少1
            $this->assertCount(count(DocumentType::cases()) - 1, $options);
        } finally {
            // 恢复原始环境变量
            $_ENV = $originalEnv;
        }
    }

    /**
     * 测试多个特定的枚举值同时过滤
     */
    public function testMultipleOptionsFiltering(): void
    {
        // 保存原始环境变量
        $originalEnv = $_ENV;

        try {
            // 过滤掉多个选项
            $_ENV['enum-display:' . DocumentType::class . '-111'] = false; // ID_CARD
            $_ENV['enum-display:' . DocumentType::class . '-112'] = false; // TEMP_ID_CARD
            $_ENV['enum-display:' . DocumentType::class . '-113'] = false; // HOUSEHOLD_REGISTER

            $options = DocumentType::genOptions();

            // 验证被过滤的选项不在结果中
            foreach ($options as $option) {
                $this->assertNotEquals('111', $option['value']);
                $this->assertNotEquals('112', $option['value']);
                $this->assertNotEquals('113', $option['value']);
            }

            // 验证选项数量比枚举值数量少3
            $this->assertCount(count(DocumentType::cases()) - 3, $options);
        } finally {
            // 恢复原始环境变量
            $_ENV = $originalEnv;
        }
    }
}
