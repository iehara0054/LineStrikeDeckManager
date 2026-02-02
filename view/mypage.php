<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ - ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="../css/styles.css?v=32">
</head>
<body class="page-mypage">
    <header>
        <a href="../index.php" class="site-title">ラインストライク デッキビルダー</a>
        <h1 class="page-title">マイデッキ保管庫</h1>
        <nav class="header-nav">
            <a href="../admin/admin_users.php" class="nav-button admin-btn">管理者ページへ</a>
            <a href="../index.php" class="nav-button">トップページ</a>
        </nav>
    </header>

    <nav class="breadcrumb">
        <a href="../index.php">トップページ</a>
        <span class="breadcrumb-separator">></span>
        <span class="breadcrumb-current">マイデッキ保管庫</span>
    </nav>

    <main class="mypage-main">
        <div class="mypage-deck-grid">
            <!-- 新規登録カード -->
            <a href="construction.php" class="mypage-deck-card new-deck-card">
                <div class="mypage-deck-header">新規登録</div>
                <div class="new-deck-plus">＋</div>
            </a>
            <!-- デッキカード2 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード1">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード2">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード3">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード4">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード5">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード6">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード7">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード8">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード9">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード10">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード11">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード12">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード13">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード14">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード15">
                    </div>
                </div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=2" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(2)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(2)">コピー</button>
                </div>
            </div>
            <!-- デッキカード3 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード1">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード2">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード3">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード4">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード5">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード6">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード7">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード8">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード9">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード10">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード11">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード12">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード13">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード14">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード15">
                    </div>
                </div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=3" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(3)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(3)">コピー</button>
                </div>
            </div>
            <!-- デッキカード4 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード1">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード2">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード3">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード4">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード5">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード6">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード7">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード8">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード9">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード10">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード11">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード12">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード13">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード14">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード15">
                    </div>
                </div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=4" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(4)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(4)">コピー</button>
                </div>
            </div>
            <!-- デッキカード5 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード1">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード2">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード3">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード4">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード5">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード6">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード7">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード8">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード9">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード10">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード11">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード12">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード13">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード14">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード15">
                    </div>
                </div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=5" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(5)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(5)">コピー</button>
                </div>
            </div>
            <!-- デッキカード6 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード1">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード2">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード3">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード4">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード5">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード6">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード7">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード8">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード9">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード10">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード11">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード12">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード13">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード14">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード15">
                    </div>
                </div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=6" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(6)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(6)">コピー</button>
                </div>
            </div>
            <!-- デッキカード7 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード1">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード2">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード3">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード4">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード5">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード6">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード7">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード8">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード9">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード10">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード11">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード12">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード13">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード14">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード15">
                    </div>
                </div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=7" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(7)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(7)">コピー</button>
                </div>
            </div>
            <!-- デッキカード8 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード1">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード2">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード3">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード4">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード5">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード6">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード7">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード8">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード9">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード10">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード11">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード12">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード13">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード14">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード15">
                    </div>
                </div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=8" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(8)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(8)">コピー</button>
                </div>
            </div>
            <!-- デッキカード9 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード1">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード2">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード3">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード4">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード5">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード6">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード7">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード8">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード9">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード10">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード11">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード12">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード13">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード14">
                        <img src="../img/list_cards/3537af89fa6f30e155e4c294ca816bb8.png" alt="カード15">
                    </div>
                </div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=9" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(9)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(9)">コピー</button>
                </div>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>

    <script>
        function confirmDelete(deckId) {
            if (confirm('このデッキを削除しますか？')) {
                // TODO: 削除処理を実装
                console.log('Delete deck:', deckId);
            }
        }

        function copyDeck(deckId) {
            // TODO: コピー処理を実装
            console.log('Copy deck:', deckId);
            alert('デッキをコピーしました');
        }
    </script>
</body>
</html>
