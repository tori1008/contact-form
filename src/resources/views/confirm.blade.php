<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/confirm.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                Contact Form
            </a>
        </div>
    </header>

    <main>
        <?php print_r($contact) ?>
        <div class="confirm__content">
            <div class="confirm__heading">
                <h2>内容確認</h2>
            </div>
            <form class="form">
                <form class="form" action="/contacts/confirm" method="post">
                    @csrf

                    <main class="main">
                        <div class="name">お名前
                            <input type="text" name="name" value="{{ $contact['name'] }}" readonly />
                        </div>

                        <div class="gender">性別
                            <input type="text" name="name" value="{{ $contact['gender'] }}" readonly />
                        </div>

                        <div class="mail">メールアドレス
                            <input type="text" name="name" value="{{ $contact['email'] }}" readonly />
                        </div>

                        <div class="postcode"> 郵便番号
                            <input type="text" name="name" value="{{ $contact['postcode'] }}" readonly />
                        </div>

                        <div class="address">住所
                            <input type="text" name="name" value="{{ $contact['address'] }}" readonly />
                        </div>

                        <div class="shipping">建物名
                            <input type="text" name="name" value="{{ $contact['shipping'] }}" readonly />
                        </div>

                        <div class="opinion">
                            <span class="opinion1">ご意見</span>
                            <input type="text" name="name" value="{{ $contact['opinion'] }}" readonly />
                        </div>

                        <div class="form__button">
                            <button class="form__button-submit" type="submit">送信</button>
                        </div>
                </form>
    </main>
</body>

</html>