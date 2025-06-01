<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TopicsTableSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('topics')->insert([
            [
                'category_ja'  => '国内関係',
                'category_en'  => 'Domestic Relations',
                'title_ja'     => '「事業再構築補助金」に関して',
                'title_en'     => 'Regarding the "Business Restructuring Subsidy"',
                'body_ja'      => '弊社は中小企業庁認定 経営革新等支援機関として、事業再構築補助金の申請支援を行っております。',
                'body_en'      => 'Our company supports applications for the Business Restructuring Subsidy as a certified management innovation support organization by the Small and Medium Enterprise Agency.',
                'link_text_ja' => '申請支援に関するお問い合わせはこちらから',
                'link_text_en' => 'Contact us here for application support inquiries',
                'link'         => 'contact',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'category_ja'  => '国内関係',
                'category_en'  => 'Domestic Relations',
                'title_ja'     => '「財務デューデリジェンス（財務ＤＤ）／株価算定・価値評価」に関して',
                'title_en'     => 'Regarding "Financial Due Diligence / Stock Valuation and Appraisal"',
                'body_ja'      => '財務DDのみならず、財務DD・税務DD・法務DD・労務DDなどワンストップでのデューデリジェンスの窓口対応を行っております。',
                'body_en'      => 'We provide a one-stop service for financial, tax, legal, and labor due diligence.',
                'link_text_ja' => '「財務デューデリジェンス」',
                'link_text_en' => '"Financial Due Diligence"',
                'link'         => 'duediligence',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'category_ja'  => '国内関係',
                'category_en'  => 'Domestic Relations',
                'title_ja'     => '「事業承継」に関して',
                'title_en'     => 'Regarding "Business Succession"',
                'body_ja'      => '一般的な事業承継対策に加え、オーナー経営者様のキャッシュイン最大化を見据えた事業承継対策のサポートを行っております。',
                'body_en'      => 'In addition to general business succession measures, we support strategies aiming to maximize cash-in for owner-managers.',
                'link_text_ja' => '「事業承継支援」はこちらから',
                'link_text_en' => 'Click here for "Business Succession Support"',
                'link'         => 'bussinessSuccession',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'category_ja'  => '海外関係',
                'category_en'  => 'Overseas Relations',
                'title_ja'     => '「タイ進出・現地法人設立支援」に関して',
                'title_en'     => 'Regarding "Thailand Expansion and Local Subsidiary Establishment Support"',
                'body_ja'      => 'タイ現地法人等設立支援や会計・税務・法務支援、マーケティングリサーチ等あらゆる面からタイ進出のサポートをいたします。',
                'body_en'      => 'We provide support for establishing local subsidiaries in Thailand, including accounting, tax, legal assistance, and marketing research.',
                'link_text_ja' => 'GCC SERVICES (THAILAND) CO., LTD.はこちら',
                'link_text_en' => 'Click here for GCC SERVICES (THAILAND) CO., LTD.',
                'link'         => 'http://asia.g-c-c.jp/jp/',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'category_ja'  => '海外関係',
                'category_en'  => 'Overseas Relations',
                'title_ja'     => '「ベトナム進出・現地法人設立支援」に関して',
                'title_en'     => 'Regarding "Vietnam Expansion and Local Subsidiary Establishment Support"',
                'body_ja'      => '一般的な事業承継対策に加え、オーナー経営者様のキャッシュイン最大化を見据えた事業承継対策のサポートを行っております。',
                'body_en'      => 'In addition to general business succession measures, we support strategies aiming to maximize cash-in for owner-managers.',
                'link_text_ja' => 'ベトナム現地法人「AGS」はこちらから',
                'link_text_en' => 'Click here for Vietnamese local subsidiary "AGS"',
                'link'         => 'http://ags-vn.com/?lang=ja',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
            [
                'category_ja'  => '医療支援関係',
                'category_en'  => 'Medical Support',
                'title_ja'     => '「医師開業支援」に関して',
                'title_en'     => 'Regarding "Physician Practice Support"',
                'body_ja'      => '独立開業・医院継承をしたい医師向けのサポートサイトを運営しております。',
                'body_en'      => 'We operate a support site for doctors who want to start independent practices or inherit clinics.',
                'link_text_ja' => '医院開業支援サイト「DMS」はこちらから',
                'link_text_en' => 'Click here for the clinic opening support site "DMS"',
                'link'         => 'https://dmsupport.jp/',
                'created_at'   => now(),
                'updated_at'   => now(),
            ],
        ]);
    }
}
