<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--css-->
    <link rel="stylesheet" href="css/sanitize.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php03/index.php">
                World Clock
            </a>
        </div>
    </header>
    <main>
        <div class="search-form__content">
            <h2>日本と世界の時間を比較</h2>
        </div>
        <form action="result.php" class="search-form" method="get">
            <div class="search-form__item">
                <select name="city" class="search-form__item-select">
                    <option value="シドニー">シドニー</option>
                    <option value="上海">上海</option>
                    <option value="モスクワ">モスクワ</option>
                    <option value="ロンドン">ロンドン</option>
                    <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                    <option value="ニューヨーク">ニューヨーク</option>
                </select>
            </div>
            <div class="search-form__button">
                <button class="search-form__button-submit" type="submit">検索</button>
            </div>
        </form>
    </main>
</body>
</html>