<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン - ラインストライク デッキビルダー</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <div class="login-container">
        <h1 class="login-title">ラインストライク デッキビルダー</h1>

        <form class="login-form" action="../index.php" method="post">
            <div class="form-group">
                <label for="login-id">ログインID</label>
                <input type="text" id="login-id" name="login_id" required>
            </div>

            <div class="form-group">
                <label for="password">パスワード</label>
                <input type="password" id="password" name="password" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="login-button">ログイン</button>
                <a href="signup.php" class="register-link">ユーザー登録</a>
            </div>
        </form>
    </div>
</body>
</html>
