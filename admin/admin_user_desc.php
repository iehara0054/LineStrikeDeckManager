<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ページ - ユーザー詳細 - ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="page-admin">
    <header>
        <a href="../index.php" class="site-title">ラインストライク デッキビルダー</a>
        <h1 class="page-title">管理者ページ</h1>
        <nav class="header-nav">
            <a href="../index.php" class="nav-button">トップページ</a>
        </nav>
    </header>

    <main class="admin-main">
        <!-- タブナビゲーション -->
        <div class="admin-tabs">
            <a href="admin_users.php" class="admin-tab active">ユーザー</a>
            <a href="admin_decks.php" class="admin-tab">デッキ</a>
        </div>

        <!-- コンテンツエリア -->
        <div class="admin-content">
            <h2 class="admin-section-title">ユーザー詳細</h2>

            <!-- サンプルデータ -->
            <table class="admin-detail-table">
                <tr>
                    <th>ID</th>
                    <td>1</td>
                </tr>
                <tr>
                    <th>ユーザー名</th>
                    <td>user001</td>
                </tr>
                <tr>
                    <th>メールアドレス</th>
                    <td>user001@example.com</td>
                </tr>
                <tr>
                    <th>登録日</th>
                    <td>2025-01-01</td>
                </tr>
            </table>

            <div class="admin-actions">
                <a href="admin_users.php" class="action-btn">戻る</a>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>
</body>
</html>
