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
                'category'   => '国内関係',
                'title'      => '「事業再構築補助金」に関して',
                'body'       => '弊社は中小企業庁認定 経営革新等支援機関として、事業再構築補助金の申請支援を行っております。',
                'link_text'  => '申請支援に関するお問い合わせはこちらから',
                'link'       => 'contact',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category'   => '国内関係',
                'title'      => '「財務デューデリジェンス（財務ＤＤ）／株価算定・価値評価」に関して',
                'body'       => '財務DDのみならず、財務DD・税務DD・法務DD・労務DDなどワンストップでのデューデリジェンスの窓口対応を行っております。',
                'link_text'  => '「財務デューデリジェンス」',
                'link'       => 'duediligence',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category'   => '国内関係',
                'title'      => '「事業承継」に関して',
                'body'       => '一般的な事業承継対策に加え、オーナー経営者様のキャッシュイン最大化を見据えた事業承継対策のサポートを行っております。',
                'link_text'  => '「事業承継支援」はこちらから',
                'link'       => 'bussinessSuccession',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category'   => '海外関係',
                'title'      => '「タイ進出・現地法人設立支援」に関して',
                'body'       => 'タイ現地法人等設立支援や会計・税務・法務支援、マーケティングリサーチ等あらゆる面からタイ進出のサポートをいたします。',
                'link_text'  => 'GCC SERVICES (THAILAND) CO., LTD.はこちら',
                'link'       => 'http://asia.g-c-c.jp/jp/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category'   => '海外関係',
                'title'      => '「ベトナム進出・現地法人設立支援」に関して',
                'body'       => '一般的な事業承継対策に加え、オーナー経営者様のキャッシュイン最大化を見据えた事業承継対策のサポートを行っております。',
                'link_text'  => 'ベトナム現地法人「AGS」はこちらから',
                'link'       => 'http://ags-vn.com/?lang=ja',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'category'   => '医療支援関係',
                'title'      => '「医師開業支援」に関して',
                'body'       => '独立開業・医院継承をしたい医師向けのサポートサイトを運営しております。',
                'link_text'  => '医院開業支援サイト「DMS」はこちらから',
                'link'       => 'https://dmsupport.jp/',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
