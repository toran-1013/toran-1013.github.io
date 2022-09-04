# toran-1013.github.io
<form action="submit.php" method="post">
            <input type="hidden" id="token" name="token" value="7654321">
            <dl>
                <div class="alert alert-danger">
                <dt>氏名</dt>
                <dt class="badge-1">必須</dt>
                <dd><?php print(htmlspecialchars($_POST['name'],ENT_QUOTES));?></dd>
                <dt class="email">メールアドレス</dt>
                <dt class="badge-2">必須</dt>
                <dd><?php print(htmlspecialchars($_POST['mail'],ENT_QUOTES));?></dd>
                <dt class="phone">
                <dt for="phone">電話番号</dt>
                <dd><?php print(htmlspecialchars($_POST['phone'],ENT_QUOTES));?></dd>
                </dt>
                <dt class="content">
                <dt class="contet-label">
                <dt for="content">お問い合わせ内容</dt>
                <dt class="badge-2">必須</dt>
                <dd><?php print(htmlspecialchars($_POST['contents'],ENT_QUOTES));?></dd>
                </dt>
                <textarea class="contact-textarea" id="content" name="content"></textarea>
                </dt>
                <dt class="button">
                <button type="submit">送信</button>
                </dt>
            </dl>
            <input type="hidden" name="name" value="<?php print(htmlspecialchars($_POST['name'],ENT_QUOTES));?>">
            <input type="hidden" name="mail" value="<?php print(htmlspecialchars($_POST['mail'],ENT_QUOTES));?>">
            <input type="hidden" name="contents" value="<?php print(htmlspecialchars($_POST['contents'],ENT_QUOTES));?>">
        </form>
