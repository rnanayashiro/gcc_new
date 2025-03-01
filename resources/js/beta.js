$(document).ready(function () {
    // フォーム送信時の処理
    $("form").on("submit", function (event) {
        event.preventDefault(); // 通常のフォーム送信をキャンセル

        // フォームデータを取得
        var formData = $(this).serialize(); // フォームのデータをURLエンコード形式で取得

        // AJAXリクエスト
        $.ajax({
            url: "{{ route('submit') }}", // /contact/submit のルートを指定
            type: "POST", // POSTメソッド
            data: formData, // 送信するデータ
            success: function (response) {
                // サーバーからの成功レスポンス
                alert(response.message); // 送信完了メッセージ
                // 必要に応じてページ遷移など
                // window.location.href = "{{ route('contact') }}";
            },
            error: function (xhr) {
                // サーバーからのエラーレスポンス
                var errors = xhr.responseJSON.errors;

                // エラーメッセージをフォームの各項目に表示
                $(".error").remove(); // 既存のエラーメッセージを削除

                $.each(errors, function (field, messages) {
                    var errorElement = $("#" + field).next(".error");
                    if (errorElement.length === 0) {
                        $("#" + field).after(
                            "<div class='error'>" + messages[0] + "</div>"
                        );
                    } else {
                        errorElement.text(messages[0]);
                    }
                });
            },
        });
    });
});
