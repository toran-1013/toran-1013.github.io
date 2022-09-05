$('#page-top').click(function () {
    $('body,html').animate({
        scrollTop: 0//ページトップまでスクロール
    }, 200);//ページトップスクロールの速さ。数字が大きいほど遅くなる
    return false;//リンク自体の無効化
});
<script>
    window.onload = function() {
            window.location.hash = "https://toran-1013.github.io/#indisplay"
        }
    };
</script>
