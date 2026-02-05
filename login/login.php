<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン - ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="../css/styles.css">
</head>

<body class="page-login">
    <header>
        <a href="../index.php" class="site-title">ラインストライク デッキビルダー</a>
        <h1 class="page-title">ログインページ</h1>
        <nav class="header-nav">
            <a href="../admin/admin_users.php" class="nav-button admin-btn">管理者ページへ</a>
            <a href="../index.php" class="nav-button">トップページ</a>
        </nav>
    </header>

    <nav class="breadcrumb">
        <a href="../index.php">トップページ</a>
        <span class="breadcrumb-separator">></span>
        <span class="breadcrumb-current">ログイン</span>
    </nav>

    <div class="login-container">
        <h1 class="login-title">ログイン</h1>

        <!-- TODO: action属性にPHP処理ファイルを指定する（現在は仮でindex.phpへ遷移） -->
        <form class="login-form" action="mypage.php" method="post">
            <div class="form-group">
                <label for="login-id">ログインID</label>
                <input type="text" id="login-id" name="login_id" value="test@example.com" required>
            </div>

            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" value="gS3FWVK4" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="login-button">ログイン</button>
                <a href="signup.php" class="register-link">ユーザー登録</a>
                <!-- TODO: パスワードリセットページを作成する -->
                <a href="#" class="register-link">パスワードを忘れた方はこちらをクリックしてください</a>
            </div>
        </form>
    </div>

    <footer>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>
</body>

</html>