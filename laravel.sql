-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- ホスト: db
-- 生成日時: 2025 年 9 月 12 日 08:14
-- サーバのバージョン： 5.7.44
-- PHP のバージョン: 8.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- データベース: `laravel`
--

-- --------------------------------------------------------

--
-- テーブルの構造 `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_04_07_004017_create_news_table', 1),
(6, '2025_05_24_123005_create_topics_table', 1);

-- --------------------------------------------------------

--
-- テーブルの構造 `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT '自動インクリメントのID',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'タイトル',
  `date` datetime NOT NULL COMMENT '日付',
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'カテゴリ',
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '画像パス',
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '本文',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- テーブルの構造 `topics`
--

CREATE TABLE `topics` (
  `id` bigint(20) UNSIGNED NOT NULL COMMENT '主キー',
  `category_ja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'カテゴリー（日本語）',
  `category_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'カテゴリー（英語）',
  `title_ja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'タイトル（日本語）',
  `title_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'タイトル（英語）',
  `body_ja` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '本文（日本語）',
  `body_en` text COLLATE utf8mb4_unicode_ci NOT NULL COMMENT '本文（英語）',
  `link_text_ja` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'リンクテキスト（日本語）',
  `link_text_en` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'リンクテキスト（英語）',
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT '関連リンク',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- テーブルのデータのダンプ `topics`
--

INSERT INTO `topics` (`id`, `category_ja`, `category_en`, `title_ja`, `title_en`, `body_ja`, `body_en`, `link_text_ja`, `link_text_en`, `link`, `created_at`, `updated_at`) VALUES
(1, '国内関係', 'Domestic Relations', '「事業再構築補助金」に関して', 'Regarding the \"Business Restructuring Subsidy\"', '弊社は中小企業庁認定 経営革新等支援機関として、事業再構築補助金の申請支援を行っております。', 'Our company supports applications for the Business Restructuring Subsidy as a certified management innovation support organization by the Small and Medium Enterprise Agency.', '申請支援に関するお問い合わせはこちらから', 'Contact us here for application support inquiries', 'contact', '2025-05-31 22:01:45', '2025-05-31 22:01:45'),
(2, '国内関係', 'Domestic Relations', '「財務デューデリジェンス（財務ＤＤ）／株価算定・価値評価」に関して', 'Regarding \"Financial Due Diligence / Stock Valuation and Appraisal\"', '財務DDのみならず、財務DD・税務DD・法務DD・労務DDなどワンストップでのデューデリジェンスの窓口対応を行っております。', 'We provide a one-stop service for financial, tax, legal, and labor due diligence.', '「財務デューデリジェンス」', '\"Financial Due Diligence\"', 'duediligence', '2025-05-31 22:01:45', '2025-05-31 22:01:45'),
(3, '国内関係', 'Domestic Relations', '「事業承継」に関して', 'Regarding \"Business Succession\"', '一般的な事業承継対策に加え、オーナー経営者様のキャッシュイン最大化を見据えた事業承継対策のサポートを行っております。', 'In addition to general business succession measures, we support strategies aiming to maximize cash-in for owner-managers.', '「事業承継支援」はこちらから', 'Click here for \"Business Succession Support\"', 'bussinessSuccession', '2025-05-31 22:01:45', '2025-05-31 22:01:45'),
(4, '海外関係', 'Overseas Relations', '「タイ進出・現地法人設立支援」に関して', 'Regarding \"Thailand Expansion and Local Subsidiary Establishment Support\"', 'タイ現地法人等設立支援や会計・税務・法務支援、マーケティングリサーチ等あらゆる面からタイ進出のサポートをいたします。', 'We provide support for establishing local subsidiaries in Thailand, including accounting, tax, legal assistance, and marketing research.', 'GCC SERVICES (THAILAND) CO., LTD.はこちら', 'Click here for GCC SERVICES (THAILAND) CO., LTD.', 'http://asia.g-c-c.jp/jp/', '2025-05-31 22:01:45', '2025-05-31 22:01:45'),
(5, '海外関係', 'Overseas Relations', '「ベトナム進出・現地法人設立支援」に関して', 'Regarding \"Vietnam Expansion and Local Subsidiary Establishment Support\"', '一般的な事業承継対策に加え、オーナー経営者様のキャッシュイン最大化を見据えた事業承継対策のサポートを行っております。', 'In addition to general business succession measures, we support strategies aiming to maximize cash-in for owner-managers.', 'ベトナム現地法人「AGS」はこちらから', 'Click here for Vietnamese local subsidiary \"AGS\"', 'http://ags-vn.com/?lang=ja', '2025-05-31 22:01:45', '2025-05-31 22:01:45'),
(6, '医療支援関係', 'Medical Support', '「医師開業支援」に関して', 'Regarding \"Physician Practice Support\"', '独立開業・医院継承をしたい医師向けのサポートサイトを運営しております。', 'We operate a support site for doctors who want to start independent practices or inherit clinics.', '医院開業支援サイト「DMS」はこちらから', 'Click here for the clinic opening support site \"DMS\"', 'https://dmsupport.jp/', '2025-05-31 22:01:45', '2025-05-31 22:01:45');

-- --------------------------------------------------------

--
-- テーブルの構造 `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- ダンプしたテーブルのインデックス
--

--
-- テーブルのインデックス `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- テーブルのインデックス `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- テーブルのインデックス `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- テーブルのインデックス `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`);

--
-- テーブルのインデックス `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- ダンプしたテーブルの AUTO_INCREMENT
--

--
-- テーブルの AUTO_INCREMENT `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- テーブルの AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '自動インクリメントのID';

--
-- テーブルの AUTO_INCREMENT `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- テーブルの AUTO_INCREMENT `topics`
--
ALTER TABLE `topics`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '主キー', AUTO_INCREMENT=7;

--
-- テーブルの AUTO_INCREMENT `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
