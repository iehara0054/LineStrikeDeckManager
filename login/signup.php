<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ユーザー登録 - ラインストライク デッキビルダー</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="login-container">
        <h1 class="login-title">ラインストライク デッキビルダー</h1>

        <form class="login-form" action="" method="post">
            <h2 class="form-subtitle">ユーザー登録</h2>

            <div class="form-group">
                <label for="login_id">ログインID</label>
                <div class="input-wrapper">
                    <input type="text" id="login_id" name="login_id" maxlength="14" required>
                    <div class="error-messages">
                        <span class="error-message">これはエラーメッセージです</span>
                    </div>
                </div>
            </div>
            <p class="form-hint">ご希望のログインIDを14文字以内で入力してください</p>

            <div class="form-group">
                <label for="password">パスワード</label>
                <div class="input-wrapper">
                    <input type="password" id="password" name="password" maxlength="14" required>
                    <div class="error-messages">
                        <span class="error-message">これはエラーメッセージです</span>
                    </div>
                </div>
            </div>
            <p class="form-hint">ご希望のパスワードを14文字以内で入力してください</p>
            <p class="form-hint">パスワードには、大文字アルファベット、数字を必ず使用してください</p>

            <div class="form-actions signup-actions">
                <a href="../index.php" class="login-button">送信</a>
            </div>
        </form>
    </div>
</body>
</html>
