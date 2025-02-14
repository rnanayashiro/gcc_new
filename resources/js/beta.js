$(document).ready(function () {
    // 保存されたフォームデータを取得
    var formValues = JSON.parse(localStorage.getItem("formValues"));

    if (formValues) {
        var detailsHtml = "";

        // データを確認画面に表示
        $.each(formValues, function (key, value) {
            detailsHtml += "<p><strong>" + key + ":</strong> " + value + "</p>";
        });

        $("#confirm-details").html(detailsHtml);
    }

    $("#submit-confirm").on("click", function () {
        // 最終的にサーバーにデータを送信
        // サーバー送信のコードを追加できます
        alert("送信完了!");
        localStorage.removeItem("formValues"); // 送信後はデータを削除
    });
});
