<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>マイページ - ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="page-mypage">
    <header>
        <a href="../index.php" class="site-title">ラインストライク デッキビルダー</a>
        <h1 class="page-title">マイページ</h1>
        <nav class="header-nav">
            <a href="../admin/admin_users.php" class="nav-button admin-btn">管理者ページへ</a>
            <a href="../index.php" class="nav-button">トップページ</a>
        </nav>
    </header>

    <main class="mypage-main">
        <div class="mypage-deck-grid">
            <!-- デッキカード1 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=1" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(1)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(1)">コピー</button>
                </div>
            </div>
            <!-- デッキカード2 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=2" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(2)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(2)">コピー</button>
                </div>
            </div>
            <!-- デッキカード3 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=3" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(3)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(3)">コピー</button>
                </div>
            </div>
            <!-- デッキカード4 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=4" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(4)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(4)">コピー</button>
                </div>
            </div>
            <!-- デッキカード5 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=5" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(5)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(5)">コピー</button>
                </div>
            </div>
            <!-- デッキカード6 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=6" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(6)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(6)">コピー</button>
                </div>
            </div>
            <!-- デッキカード7 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=7" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(7)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(7)">コピー</button>
                </div>
            </div>
            <!-- デッキカード8 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=8" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(8)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(8)">コピー</button>
                </div>
            </div>
            <!-- デッキカード9 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=9" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(9)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(9)">コピー</button>
                </div>
            </div>
            <!-- デッキカード10 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=10" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(10)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(10)">コピー</button>
                </div>
            </div>
            <!-- デッキカード11 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=11" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(11)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(11)">コピー</button>
                </div>
            </div>
            <!-- デッキカード12 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=12" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(12)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(12)">コピー</button>
                </div>
            </div>
            <!-- デッキカード13 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=13" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(13)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(13)">コピー</button>
                </div>
            </div>
            <!-- デッキカード14 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=14" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(14)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(14)">コピー</button>
                </div>
            </div>
            <!-- デッキカード15 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=15" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(15)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(15)">コピー</button>
                </div>
            </div>
            <!-- デッキカード16 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=16" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(16)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(16)">コピー</button>
                </div>
            </div>
            <!-- デッキカード17 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=17" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(17)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(17)">コピー</button>
                </div>
            </div>
            <!-- デッキカード18 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=18" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(18)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(18)">コピー</button>
                </div>
            </div>
            <!-- デッキカード19 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=19" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(19)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(19)">コピー</button>
                </div>
            </div>
            <!-- デッキカード20 -->
            <div class="mypage-deck-card">
                <div class="mypage-deck-header">デッキ名</div>
                <div class="mypage-deck-actions">
                    <a href="construction.php?id=20" class="mypage-deck-button">編集</a>
                    <button type="button" class="mypage-deck-button" onclick="confirmDelete(20)">削除</button>
                    <button type="button" class="mypage-deck-button" onclick="copyDeck(20)">コピー</button>
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
