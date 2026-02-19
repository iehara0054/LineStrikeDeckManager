<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デッキ詳細 - ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="../css/styles.css?v=30">
</head>
<body class="fixed-layout page-deck">
    <header>
        <a href="../index.php" class="site-title">ラインストライク デッキビルダー</a>
        <h1 class="page-title">デッキ閲覧</h1>
        <nav class="header-nav">
            <a href="../admin/admin_users.php" class="nav-button admin-btn">管理者ページへ</a>
            <a href="../index.php" class="nav-button">トップページ</a>
            <a href="../my_page/my_page.php" class="nav-button">マイデッキ保管庫</a>
        </nav>
    </header>

    <nav class="breadcrumb">
        <a href="../index.php">トップページ</a>
        <span class="breadcrumb-separator">></span>
        <a href="deck_list.php">すべてのデッキ</a>
        <span class="breadcrumb-separator">></span>
        <span class="breadcrumb-current">デッキ詳細</span>
    </nav>

    <main class="construction-main-new">
        <!-- 左側：デッキ編成エリア -->
        <aside class="card-list-panel-new">
            <div class="panel-header-new">
                <span class="panel-title">デッキ名 ー 制作者：制作者名</span>
                <a href="construction.php" class="copy-deck-button">コピーして編集画面へ</a>
            </div>
            <div class="card-list-content">
                <!-- 5x3 カードグリッド -->
                <div class="formation-grid">
                        <!-- 1行目 -->
                        <div class="formation-slot" data-slot="1-1">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="1-2">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="1-3">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="1-4">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="1-5">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <!-- 2行目 -->
                        <div class="formation-slot" data-slot="2-1">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="2-2">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="2-3">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="2-4">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="2-5">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <!-- 3行目 -->
                        <div class="formation-slot" data-slot="3-1">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="3-2">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="3-3">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="3-4">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="3-5">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </aside>

        <!-- 中央：カード詳細 -->
        <section class="center-panel">
            <div class="card-detail-panel">
                <div class="panel-header-new">
                    <span class="panel-title">カード詳細</span>
                </div>
                <div class="card-detail-content">
                    <div class="card-detail-image">
                        <img src="../img/card_green/英雄の妹ルミア.jpg" alt="カード拡大">
                    </div>
                    <div class="skill-detail-content">
                        <p class="skill-name">スキル名</p>
                        <p class="skill-description">スキルの説明がここに表示されます。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 右側：コメント -->
        <aside class="deck-list-panel">
            <div class="panel-header-new">
                <span class="panel-title">コメント</span>
            </div>
            <div class="deck-list-hint">
                <p>デッキに対するコメントが表示されます。</p>
            </div>
            <div class="comment-display-area">
                <p>コメントを出力...</p>
            </div>
        </aside>

    </main>

    <footer>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>

    <script>
        // 編成スロットクリック時の処理
        document.querySelectorAll('.formation-slot').forEach(slot => {
            slot.addEventListener('click', function() {
                document.querySelectorAll('.formation-slot').forEach(s => s.classList.remove('selected'));
                this.classList.add('selected');
            });
        });
    </script>
</body>
</html>
