$(document).ready(function () {
    // モーダルを開く
    $(".open-topics-modal").on("click", function (e) {
        console.log("aa");
        e.preventDefault();
        $("#topicsModal").fadeIn();
    });

    // モーダルを閉じる
    $(".close-button").on("click", function () {
        $("#topicsModal").fadeOut();
    });

    // 背景クリックで閉じる
    $(window).on("click", function (e) {
        if ($(e.target).is("#topicsModal")) {
            $("#topicsModal").fadeOut();
        }
    });
});
