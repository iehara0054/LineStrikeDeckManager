<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="page-signup">
    <header>
        <a href="../index.php" class="site-title">ラインストライク デッキビルダー</a>
        <h1 class="page-title">ユーザー登録</h1>
        <nav class="header-nav">
            <a href="../admin/admin_users.php" class="nav-button admin-btn">管理者ページへ</a>
            <a href="../index.php" class="nav-button">トップページ</a>
            <a href="mypage.php" class="nav-button">マイデッキ保管庫</a>
        </nav>
    </header>
    <div class="login-container">
        <h1 class="login-title">ユーザー登録</h1>

        <!-- TODO: action属性にPHP処理ファイルを指定する -->
        <form class="login-form" action="" method="post">
            <div class="form-group">
                <label for="login_id">ログインID</label>
                <div class="input-wrapper">
                    <input type="text" id="login_id" name="login_id" maxlength="14" required>
                    <p class="form-hint">ご希望のログインIDを14文字以内で入力してください</p>
                    <div class="error-messages">
                        <span class="error-message">これはエラーメッセージです</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="password">パスワード</label>
                <div class="input-wrapper">
                    <input type="password" id="password" name="password" maxlength="14" required>
                    <p class="form-hint">ご希望のパスワードを14文字以内で入力してください</p>
                    <p class="form-hint">パスワードには、大文字アルファベット、数字を必ず使用してください</p>
                    <div class="error-messages">
                        <span class="error-message">これはエラーメッセージです</span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="password_confirm">確認用パスワード</label>
                <div class="input-wrapper">
                    <input type="password" id="password_confirm" name="password_confirm" maxlength="14" required>
                    <p class="form-hint">確認のためパスワードを再入力してください</p>
                    <div class="error-messages">
                        <span class="error-message">これはエラーメッセージです</span>
                    </div>
                </div>
            </div>

            <div class="form-group signup-button-row">
                <label></label>
                <div class="signup-button-area">
                    <!-- TODO: <button type="submit" class="login-button">送信</button> に変更する -->
                    <a href="complete.php" class="login-button">送信</a>
                </div>
            </div>
        </form>
    </div>

    <footer>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>
</body>
</html>
