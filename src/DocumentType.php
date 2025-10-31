<?php

declare(strict_types=1);

namespace Tourze\GAT2000;

use Tourze\EnumExtra\Itemable;
use Tourze\EnumExtra\ItemTrait;
use Tourze\EnumExtra\Labelable;
use Tourze\EnumExtra\Selectable;
use Tourze\EnumExtra\SelectTrait;

/**
 * 身份证件类型
 */
enum DocumentType: string implements Labelable, Itemable, Selectable
{
    use ItemTrait;
    use SelectTrait;

    case ID_CARD = '111';
    case TEMP_ID_CARD = '112';
    case HOUSEHOLD_REGISTER = '113';
    case ARMY_OFFICER_CARD = '114';
    case POLICE_OFFICER_CARD = '115';
    case TEMP_RESIDENCE_CARD = '116';
    case BIRTH_CERTIFICATE = '117';
    case ARMY_SOLDIER_CARD = '118';
    case POLICE_SOLDIER_CARD = '119';
    case JUDGE_CARD = '121';
    case POLICE_CARD = '123';
    case PROSECUTOR_CARD = '125';
    case LAWYER_CARD = '127';
    case REPORTER_CARD = '129';
    case WORK_CARD = '131';
    case STUDENT_CARD = '133';
    case ENTRY_EXIT_CARD = '151';
    case TEMP_ENTRY_EXIT_CARD = '153';
    case RESIDENCE_PERMIT = '154';
    case MEDICAL_CARD = '157';
    case SOCIAL_SECURITY_CARD = '159';
    case BLOOD_DONATION_CARD = '161';
    case INSURANCE_DOCUMENT = '163';
    case MEMBER_CARD = '191';
    case RETIREMENT_CARD = '211';
    case ARMY_OFFICER_RETIREMENT_CARD = '212';
    case PENSIONER_CARD = '213';
    case ARMY_OFFICER_PENSIONER_CARD = '214';
    case SENIOR_CITIZEN_CARD = '215';
    case POLICE_OFFICER_RETIREMENT_CARD = '216';
    case DISABILITY_CARD = '217';
    case POLICE_OFFICER_PENSIONER_CARD = '218';
    case MARRIAGE_CERTIFICATE = '219';
    case DIVORCE_CERTIFICATE = '221';
    case ONLY_CHILD_CERTIFICATE = '223';
    case DIPLOMA = '225';
    case DROPOUT_CERTIFICATE = '227';
    case COMPLETION_CERTIFICATE = '229';
    case DEGREE_CERTIFICATE = '231';
    case MILITARY_PASS = '233';
    case SOCIAL_MEDICAL_INSURANCE_CARD = '240';
    case PUBLIC_TRANSPORT_CARD = '241';
    case CERTIFICATE_OF_INTRODUCTION = '291';
    case FIREARM_PERMIT = '311';
    case SERVICE_PASSPORT = '412';
    case SERVICE_ORDINARY_PASSPORT = '413';
    case ORDINARY_PASSPORT = '414';
    case TRAVEL_PERMIT = '415';
    case EXIT_ENTRY_PERMIT = '416';
    case FOREIGNER_EXIT_ENTRY_PERMIT = '417';
    case FOREIGNER_TRAVEL_PERMIT = '418';
    case SEAMAN_CARD = '419';
    case HONG_KONG_PASSPORT = '420';
    case MACAO_PASSPORT = '421';
    case TAIWAN_RESIDENT_MULTI_VISIT_MAINLAND_PERMIT = '511';
    case TAIWAN_RESIDENT_SINGLE_VISIT_MAINLAND_PERMIT = '512';
    case HONG_KONG_MACAO_VISIT_PERMIT = '513';
    case GO_TO_HONG_KONG_MACAO_PERMIT = '515';
    case HONG_KONG_MACAO_RESIDENT_VISIT_INLAND_PERMIT = '516';
    case TAIWAN_VISIT_PERMIT = '517';
    case OFFICIAL_HONG_KONG_MACAO_VISIT_PERMIT = '518';
    case TAIWAN_RESIDENT_SETTLEMENT_CERTIFICATE = '552';
    case FOREIGNER_PERMANENT_RESIDENCE_CARD = '553';
    case FOREIGNER_RESIDENCE_PERMIT = '554';
    case FOREIGNER_TEMPORARY_RESIDENCE_CARD = '555';
    case NATURALIZATION_CERTIFICATE = '556';
    case DENATURALIZATION_CERTIFICATE = '557';
    case RE_NATURALIZATION_CERTIFICATE = '558';
    case RED_SEA_DUTY_CARD = '620';
    case BLUE_SEA_DUTY_CARD = '621';
    case SEAFARER_CARD = '631';
    case SEA_VESSEL_HOUSEHOLD_REGISTER = '633';
    case SEA_VESSEL_BORDER_REGISTER = '634';
    case DOCKING_TAIWANESE_SHIP_PERMIT = '635';
    case TAIWAN_RESIDENT_LANDING_PERMIT = '636';
    case TAIWAN_CREW_LANDING_PERMIT = '637';
    case TEMPORARY_ENTRY_PERMIT_FOR_SEAFARERS = '638';
    case TAIWAN_LABORER_BOARDING_OPERATION_CARD = '639';
    case JOINT_VENTURE_SHIP_CREW_LANDING_PERMIT = '640';
    case JOINT_VENTURE_SHIP_CREW_BOARDING_OPERATION_CARD = '641';
    case GUANGDONG_HONG_KONG_MACAO_FISHERMAN_CARD = '642';
    case GUANGDONG_HONG_KONG_MACAO_TEMP_FISHERMAN_CARD = '643';
    case GUANGDONG_HONG_KONG_MACAO_FISHING_VESSEL_HOUSEHOLD_REGISTER = '644';
    case BOARDING_PERMIT = '647';
    case LABORER_BOARDING_OPERATION_CARD = '650';
    case BORDER_CONTROL_AREA_PASS = '711';
    case SINO_NORTH_KOREAN_HYDROGRAPHIC_WORK_CARD = '721';
    case NORTH_KOREAN_SINO_HYDROGRAPHIC_WORK_CARD = '722';
    case SINO_NORTH_KOREAN_RAFT_REPRESENTATIVE_CARD = '723';
    case NORTH_KOREAN_SINO_RAFT_REPRESENTATIVE_CARD = '724';
    case SINO_NORTH_KOREAN_SEAFARER_CARD = '725';
    case NORTH_KOREAN_SINO_SEAFARER_CARD = '726';
    case SINO_NORTH_KOREAN_BORDER_POLICE_GENERAL_REPRESENTATIVE_CARD = '727';
    case NORTH_KOREAN_SINO_BORDER_SECURITY_GENERAL_REPRESENTATIVE_CARD = '728';
    case SINO_NORTH_KOREAN_BORDER_POLICE_DEPUTY_GENERAL_REPRESENTATIVE_CARD = '729';
    case NORTH_KOREAN_SINO_BORDER_SECURITY_DEPUTY_GENERAL_REPRESENTATIVE_CARD = '730';
    case SINO_NORTH_KOREAN_BORDER_POLICE_REPRESENTATIVE_CARD = '731';
    case NORTH_KOREAN_SINO_BORDER_SECURITY_REPRESENTATIVE_CARD = '732';
    case SINO_NORTH_KOREAN_BORDER_ENTRY_EXIT_PERMIT = '733';
    case NORTH_KOREAN_SINO_BORDER_OFFICIAL_PASS = '734';
    case NORTH_KOREAN_SINO_BORDER_RESIDENT_NATIONAL_BORDER_PASS = '735';
    case SINO_MONGOLIAN_BORDER_ENTRY_EXIT_PERMIT = '736';
    case MONGOLIAN_SINO_BORDER_ENTRY_EXIT_PERMIT = '737';
    case SINO_BURMESE_BORDER_ENTRY_EXIT_PERMIT = '738';
    case BURMESE_SINO_BORDER_PASS = '739';
    case YUNNAN_BORDER_REGION_FOREIGN_NATIONAL_ENTRY_EXIT_CARD = '740';
    case SINO_NEPALESE_BORDER_ENTRY_EXIT_PERMIT = '741';
    case NEPALESE_SINO_BORDER_ENTRY_EXIT_PERMIT = '742';
    case SINO_VIETNAMESE_BORDER_ENTRY_EXIT_PERMIT = '743';
    case VIETNAMESE_SINO_BORDER_ENTRY_EXIT_PERMIT = '744';
    case SINO_LAO_BORDER_ENTRY_EXIT_PERMIT = '745';
    case LAO_SINO_BORDER_ENTRY_EXIT_PERMIT = '746';
    case SINO_INDIAN_BORDER_ENTRY_EXIT_PERMIT = '747';
    case INDIAN_SINO_BORDER_ENTRY_EXIT_PERMIT = '748';
    case SHENZHEN_TRANSIT_FARMING_PERMIT = '761';
    case TRADE_CARD = '765';
    case RAILWAY_STAFF_CARD = '771';
    case CREW_MEMBER_CARD = '781';
    case DIPLOMAT_ID = '791';
    case FOREIGNER_ID = '792';
    case ORGANIZATION_CODE_CERTIFICATE = '811';
    case COMPANY_CANCELLATION_CERTIFICATE = '812';
    case FOREIGN_EMBASSY_CERTIFICATE = '813';
    case BUSINESS_LICENSE_ORIGINAL = '821';
    case BUSINESS_LICENSE_COPY = '822';
    case OTHER = '990';

    public function getLabel(): string
    {
        return match ($this) {
            self::ID_CARD => '身份证',
            self::TEMP_ID_CARD => '临时身份证',
            self::HOUSEHOLD_REGISTER => '户口簿',
            self::ARMY_OFFICER_CARD => '中国人民解放军军官证',
            self::POLICE_OFFICER_CARD => '中国人民武装警察部队警官证',
            self::TEMP_RESIDENCE_CARD => '暂住证',
            self::BIRTH_CERTIFICATE => '出生医学证明',
            self::ARMY_SOLDIER_CARD => '中国人民解放军士兵证',
            self::POLICE_SOLDIER_CARD => '中国人民武装警察部队士兵证',
            self::JUDGE_CARD => '法官证',
            self::POLICE_CARD => '人民警察证',
            self::PROSECUTOR_CARD => '检察官证',
            self::LAWYER_CARD => '律师证',
            self::REPORTER_CARD => '记者证',
            self::WORK_CARD => '工作证',
            self::STUDENT_CARD => '学生证',
            self::ENTRY_EXIT_CARD => '出入证',
            self::TEMP_ENTRY_EXIT_CARD => '临时出入证',
            self::RESIDENCE_PERMIT => '居住证',
            self::MEDICAL_CARD => '医疗证',
            self::SOCIAL_SECURITY_CARD => '劳保证',
            self::BLOOD_DONATION_CARD => '献血证',
            self::INSURANCE_DOCUMENT => '保险单',
            self::MEMBER_CARD => '会员证',
            self::RETIREMENT_CARD => '离休证',
            self::ARMY_OFFICER_RETIREMENT_CARD => '中国人民解放军军官离休证',
            self::PENSIONER_CARD => '退休证',
            self::ARMY_OFFICER_PENSIONER_CARD => '中国人民解放军军官退休证',
            self::SENIOR_CITIZEN_CARD => '老年证',
            self::POLICE_OFFICER_RETIREMENT_CARD => '中国人民武装警察部队警官离休证',
            self::DISABILITY_CARD => '残疾证',
            self::POLICE_OFFICER_PENSIONER_CARD => '中国人民武装警察部队警官退休证',
            self::MARRIAGE_CERTIFICATE => '结婚证',
            self::DIVORCE_CERTIFICATE => '离婚证',
            self::ONLY_CHILD_CERTIFICATE => '独生子女证',
            self::DIPLOMA => '毕业证',
            self::DROPOUT_CERTIFICATE => '肄业证',
            self::COMPLETION_CERTIFICATE => '结业证',
            self::DEGREE_CERTIFICATE => '学位证',
            self::MILITARY_PASS => '军人通行证',
            self::SOCIAL_MEDICAL_INSURANCE_CARD => '社会医疗保障卡',
            self::PUBLIC_TRANSPORT_CARD => '公共交通卡',
            self::CERTIFICATE_OF_INTRODUCTION => '证明信',
            self::FIREARM_PERMIT => '持枪证',
            self::SERVICE_PASSPORT => '公务护照',
            self::SERVICE_ORDINARY_PASSPORT => '公务普通护照',
            self::ORDINARY_PASSPORT => '普通护照',
            self::TRAVEL_PERMIT => '旅行证',
            self::EXIT_ENTRY_PERMIT => '出入境通行证',
            self::FOREIGNER_EXIT_ENTRY_PERMIT => '外国人出入境通行证',
            self::FOREIGNER_TRAVEL_PERMIT => '外国人旅行证',
            self::SEAMAN_CARD => '海员证',
            self::HONG_KONG_PASSPORT => '香港特别行政区护照',
            self::MACAO_PASSPORT => '澳门特别行政区护照',
            self::TAIWAN_RESIDENT_MULTI_VISIT_MAINLAND_PERMIT => '台湾居民来往大陆通行证(多次有效)',
            self::TAIWAN_RESIDENT_SINGLE_VISIT_MAINLAND_PERMIT => '台湾居民来往大陆通行证(一次有效)',
            self::HONG_KONG_MACAO_VISIT_PERMIT => '往来港澳通行证',
            self::GO_TO_HONG_KONG_MACAO_PERMIT => '前往港澳通行证',
            self::HONG_KONG_MACAO_RESIDENT_VISIT_INLAND_PERMIT => '港澳居民来往内地通行证',
            self::TAIWAN_VISIT_PERMIT => '往来台湾通行证',
            self::OFFICIAL_HONG_KONG_MACAO_VISIT_PERMIT => '因公往来香港澳门特别行政区通行证',
            self::TAIWAN_RESIDENT_SETTLEMENT_CERTIFICATE => '台湾居民定居证',
            self::FOREIGNER_PERMANENT_RESIDENCE_CARD => '外国人永久居留证',
            self::FOREIGNER_RESIDENCE_PERMIT => '外国人居留证或居留许可',
            self::FOREIGNER_TEMPORARY_RESIDENCE_CARD => '外国人临时居留证',
            self::NATURALIZATION_CERTIFICATE => '入籍证书',
            self::DENATURALIZATION_CERTIFICATE => '退籍证书',
            self::RE_NATURALIZATION_CERTIFICATE => '复籍证书',
            self::RED_SEA_DUTY_CARD => '海上值勤证(红色)',
            self::BLUE_SEA_DUTY_CARD => '海上值勤证(蓝色)',
            self::SEAFARER_CARD => '出海船民证',
            self::SEA_VESSEL_HOUSEHOLD_REGISTER => '出海船舶户口簿',
            self::SEA_VESSEL_BORDER_REGISTER => '出海船舶边防登记簿',
            self::DOCKING_TAIWANESE_SHIP_PERMIT => '搭靠台轮许可证',
            self::TAIWAN_RESIDENT_LANDING_PERMIT => '台湾居民登陆证',
            self::TAIWAN_CREW_LANDING_PERMIT => '台湾船员登陆证',
            self::TEMPORARY_ENTRY_PERMIT_FOR_SEAFARERS => '临时入境许可(船员)',
            self::TAIWAN_LABORER_BOARDING_OPERATION_CARD => '对台劳务人员登轮作业证',
            self::JOINT_VENTURE_SHIP_CREW_LANDING_PERMIT => '合资船船员登陆证',
            self::JOINT_VENTURE_SHIP_CREW_BOARDING_OPERATION_CARD => '合资船船员登轮作业证',
            self::GUANGDONG_HONG_KONG_MACAO_FISHERMAN_CARD => '粤港澳流动渔民证',
            self::GUANGDONG_HONG_KONG_MACAO_TEMP_FISHERMAN_CARD => '粤港澳临时流动渔民证',
            self::GUANGDONG_HONG_KONG_MACAO_FISHING_VESSEL_HOUSEHOLD_REGISTER => '粤港澳流动渔船户口簿',
            self::BOARDING_PERMIT => '登轮许可证',
            self::LABORER_BOARDING_OPERATION_CARD => '劳务人员登轮作业证',
            self::BORDER_CONTROL_AREA_PASS => '边境管理区通行证',
            self::SINO_NORTH_KOREAN_HYDROGRAPHIC_WORK_CARD => '中朝国境河流航行船舶船员证',
            self::NORTH_KOREAN_SINO_HYDROGRAPHIC_WORK_CARD => '朝中国境河流航行船舶船员证',
            self::SINO_NORTH_KOREAN_RAFT_REPRESENTATIVE_CARD => '中朝国境河流木排工作人员证',
            self::NORTH_KOREAN_SINO_RAFT_REPRESENTATIVE_CARD => '朝中国境河流木排工作人员证',
            self::SINO_NORTH_KOREAN_SEAFARER_CARD => '中朝边境地区出入境通行证（中方）',
            self::NORTH_KOREAN_SINO_SEAFARER_CARD => '中朝边境地区出入境通行证（朝方）',
            self::SINO_NORTH_KOREAN_BORDER_POLICE_GENERAL_REPRESENTATIVE_CARD => '中朝边境地区公安会谈会晤代表证（中方）',
            self::NORTH_KOREAN_SINO_BORDER_SECURITY_GENERAL_REPRESENTATIVE_CARD => '中朝边境地区公安会谈会晤代表证（朝方）',
            self::SINO_NORTH_KOREAN_BORDER_POLICE_DEPUTY_GENERAL_REPRESENTATIVE_CARD => '中朝边境地区公安会谈会晤副代表证（中方）',
            self::NORTH_KOREAN_SINO_BORDER_SECURITY_DEPUTY_GENERAL_REPRESENTATIVE_CARD => '中朝边境地区公安会谈会晤副代表证（朝方）',
            self::SINO_NORTH_KOREAN_BORDER_POLICE_REPRESENTATIVE_CARD => '中朝边境地区公安会谈会晤代表工作证（中方）',
            self::NORTH_KOREAN_SINO_BORDER_SECURITY_REPRESENTATIVE_CARD => '中朝边境地区公安会谈会晤代表工作证（朝方）',
            self::SINO_NORTH_KOREAN_BORDER_ENTRY_EXIT_PERMIT => '中朝边境地区出入境通行证（中方）',
            self::NORTH_KOREAN_SINO_BORDER_OFFICIAL_PASS => '中朝边境地区公务通行证（朝方）',
            self::NORTH_KOREAN_SINO_BORDER_RESIDENT_NATIONAL_BORDER_PASS => '中朝边境地区居民临时出国（境）通行证（朝方）',
            self::SINO_MONGOLIAN_BORDER_ENTRY_EXIT_PERMIT => '中蒙边境地区出入境通行证（中方）',
            self::MONGOLIAN_SINO_BORDER_ENTRY_EXIT_PERMIT => '中蒙边境地区出入境通行证（蒙方）',
            self::SINO_BURMESE_BORDER_ENTRY_EXIT_PERMIT => '中缅边境地区出入境通行证（中方）',
            self::BURMESE_SINO_BORDER_PASS => '中缅边境地区出入境通行证（缅方）',
            self::YUNNAN_BORDER_REGION_FOREIGN_NATIONAL_ENTRY_EXIT_CARD => '云南省边境地区境外边民入出境证',
            self::SINO_NEPALESE_BORDER_ENTRY_EXIT_PERMIT => '中尼边境地区出入境通行证（中方）',
            self::NEPALESE_SINO_BORDER_ENTRY_EXIT_PERMIT => '中尼边境地区出入境通行证（尼方）',
            self::SINO_VIETNAMESE_BORDER_ENTRY_EXIT_PERMIT => '中越边境地区出入境通行证（中方）',
            self::VIETNAMESE_SINO_BORDER_ENTRY_EXIT_PERMIT => '中越边境地区出入境通行证（越方）',
            self::SINO_LAO_BORDER_ENTRY_EXIT_PERMIT => '中老边境地区出入境通行证（中方）',
            self::LAO_SINO_BORDER_ENTRY_EXIT_PERMIT => '中老边境地区出入境通行证（老方）',
            self::SINO_INDIAN_BORDER_ENTRY_EXIT_PERMIT => '中印边境地区出入境通行证（中方）',
            self::INDIAN_SINO_BORDER_ENTRY_EXIT_PERMIT => '中印边境地区出入境通行证（印方）',
            self::SHENZHEN_TRANSIT_FARMING_PERMIT => '深圳过境耕作证',
            self::TRADE_CARD => '边境贸易证',
            self::RAILWAY_STAFF_CARD => '铁路工作证',
            self::CREW_MEMBER_CARD => '船员证',
            self::DIPLOMAT_ID => '外交人员证',
            self::FOREIGNER_ID => '外国人居留身份证',
            self::ORGANIZATION_CODE_CERTIFICATE => '组织机构代码证',
            self::COMPANY_CANCELLATION_CERTIFICATE => '企业注销证明',
            self::FOREIGN_EMBASSY_CERTIFICATE => '外国驻华使馆人员证',
            self::BUSINESS_LICENSE_ORIGINAL => '营业执照（正本）',
            self::BUSINESS_LICENSE_COPY => '营业执照（副本）',
            self::OTHER => '其他',
        };
    }

    public function getRemark(): ?string
    {
        return match ($this) {
            self::TEMP_ENTRY_EXIT_CARD => '临时出入内部单位证',
            self::INSURANCE_DOCUMENT => '含“保险证”',
            self::MEMBER_CARD => '包括工会及各种协会会员证',
            self::CERTIFICATE_OF_INTRODUCTION => '介绍信和证明信等',
            default => null,
        };
    }
}
