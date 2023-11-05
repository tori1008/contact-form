<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>


<header class="header">
    <h2>お問い合わせ</h2>
</header>

<body>
    <form class="form" action="/contacts/confirm" method="post">
        @csrf

        <main class="main">
            <div class="name">お名前
                <span class="form__label">※</span>
                <input type="text" class="name1" name="name" value="{{ old('name1') }}">
                <input type="text" class="name2" name="name" value="{{ old('name2') }}">
                <br />
                <span class="sub">例）山田</span>
                <span class="sub">例）太郎</span>
                <div class="form__error">
                    @error('name')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="gender">性別
                <span class="form__label">※</span>
                <input class="gender1" type="radio" name="gender" value="{{ old('gender') }}"><span class="men">男性</span>
                <input class="gender2" type="radio" name="gender" value="{{ old('gender') }}"><span class="women">女性</span>
                <br />
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="mail">メールアドレス
                <span class="form__label">※</span>
                <input type="email" class="mail1" name="email" value="{{ old('email') }}">
                <br />
                <span class="sub">例）test@example.com</span>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="postcode"> 郵便番号
                <span class="form__label">※</span>
                <span class="post">〒</span><input class="post2" type="text" id="postcode1" name="postcode" maxlength="8" value="{{ old('postcode') }}">
                <br>
                <span class="sub">例）123-4567</span>
                <div class="form__error">
                    @error('postcode')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="address">住所
                <span class="form__label">※</span>
                <input class="address1" type="text" id="address" name="address" value="{{ old('address') }}">
                <br>
                <span class="sub">例）東京都渋谷区千駄ヶ谷1-2-3</span>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="shipping">建物名
                <input class="shipping1" type="text" name="shipping" autocomplete="shipping address-line2">
                <br>
                <span class="sub">例）千駄ヶ谷マンション101</span>
            </div>

            <div class="opinion">
                <span class="opinion1">ご意見</span>
                <span class="form__label">※</span>
                <textarea name="content" value="{{ old('content') }}"></textarea>
                <div class="form__error">
                    @error('content')
                    {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">確認</button>
            </div>
    </form>
    </main>
</body>

</html>