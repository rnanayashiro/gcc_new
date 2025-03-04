<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>お問い合わせ内容</title>
</head>

<body>
    <h1>お問い合わせフォームの内容</h1>

    <p><strong>会社名:</strong> {{ $data['company-name'] ?? '未入力' }}</p>
    <p><strong>業種:</strong> {{ $data['industry'] ?? '未入力' }}</p>
    <p><strong>部署名:</strong> {{ $data['department'] ?? '未入力' }}</p>
    <p><strong>役職名:</strong> {{ $data['position'] ?? '未入力' }}</p>
    <p><strong>担当者名:</strong> {{ $data['contact-name'] ?? '未入力' }}</p>
    <p><strong>担当者名（かな）:</strong> {{ $data['contact-name-kana'] ?? '未入力' }}</p>

    <h3>住所</h3>
    <p><strong>都道府県:</strong> {{ $data['prefecture'] ?? '未入力' }}</p>
    <p><strong>市区町村:</strong> {{ $data['city'] ?? '未入力' }}</p>
    <p><strong>町名・番地:</strong> {{ $data['street'] ?? '未入力' }}</p>
    <p><strong>ビル名等:</strong> {{ $data['building'] ?? '未入力' }}</p>

    <p><strong>電話番号:</strong> {{ $data['phone'] ?? '未入力' }}</p>
    <p><strong>Email:</strong> {{ $data['email'] ?? '未入力' }}</p>

    <h3>国・地域</h3>
    @if (!empty($data['country']))
        @foreach ($data['country'] as $country)
            <p>{{ $country }}</p>
        @endforeach
    @else
        <p>未入力</p>
    @endif

    <h3>お問い合わせ内容</h3>
    @if (!empty($data['inquiry-item']))
        @foreach ($data['inquiry-item'] as $item)
            <p>{{ $item }}</p>
        @endforeach
    @else
        <p>未入力</p>
    @endif

    <h3>その他の内容</h3>
    <p>{{ $data['inquiry'] ?? '未入力' }}</p>

</body>

</html>
