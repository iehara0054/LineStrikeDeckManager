<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>管理者ページ - デッキ管理 - ラインストライク デッキビルダー</title>
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
            <a href="admin_users.php" class="admin-tab">ユーザー</a>
            <a href="admin_decks.php" class="admin-tab active">デッキ</a>
        </div>

        <!-- コンテンツエリア -->
        <div class="admin-content">
            <table class="admin-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>デッキ名</th>
                        <th>作成者</th>
                        <th>作成日</th>
                        <th>操作</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- サンプルデータ -->
                    <tr>
                        <td>1</td>
                        <td>火属性デッキ</td>
                        <td>user001</td>
                        <td>2025-01-01</td>
                        <td>
                            <a href="admin_deck_desc.php?id=1" class="action-btn">詳細</a>
                            <button type="button" class="action-btn delete-btn">削除</button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>水属性デッキ</td>
                        <td>user002</td>
                        <td>2025-01-05</td>
                        <td>
                            <a href="admin_deck_desc.php?id=2" class="action-btn">詳細</a>
                            <button type="button" class="action-btn delete-btn">削除</button>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>雷属性デッキ</td>
                        <td>user003</td>
                        <td>2025-01-10</td>
                        <td>
                            <a href="admin_deck_desc.php?id=3" class="action-btn">詳細</a>
                            <button type="button" class="action-btn delete-btn">削除</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </main>

    <footer>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>
</body>
</html>
