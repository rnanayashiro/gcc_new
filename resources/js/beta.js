$(document).ready(function() {
    // フォームの送信イベント
    $('form').on('submit', function(e) {
        e.preventDefault();  // フォームの通常の送信を防ぐ

        // フォームデータを取得
        var formData = $(this).serialize(); // すべてのフォームデータをシリアライズ

        // AJAXリクエストを送信
        $.ajax({
            url: '{{ route('submit') }}',  // 送信先URL
            type: 'POST',                  // POSTリクエスト
            data: formData,                // 送信するデータ
            success: function(response) {
                // 成功した場合
                alert('フォームが正常に送信されました。');
                console.log(response);
            },
            error: function(xhr) {
                // エラーが発生した場合
                var errors = xhr.responseJSON.errors;
                // エラーメッセージを表示
                for (var key in errors) {
                    alert(errors[key].join(', '));  // 各フィールドのエラーメッセージを表示
                }
            }
        });
    });
})
