<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デッキ詳細 - ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="page-deck">
    <header>
        <a href="../index.php" class="site-title">ラインストライク デッキビルダー</a>
        <h1 class="page-title">デッキ閲覧</h1>
        <nav class="header-nav">
            <a href="../admin/admin_users.php" class="nav-button admin-btn">管理者ページへ</a>
            <a href="../index.php" class="nav-button">トップページ</a>
            <a href="mypage.php" class="nav-button">マイデッキ保管庫</a>
        </nav>
    </header>

    <main class="deck-main">
        <!-- タブナビゲーション -->
        <!-- TODO: コピーしてマイページに保存ボタンにPHP処理を実装する（デッキをコピーしてマイページに保存） -->
        <!-- TODO: コピーして編集リンクにデッキIDをパラメータとして渡す（例: construction.php?copy_from=デッキID） -->
        <div class="deck-tabs">
            <a href="construction.php" class="deck-tab active">マイデッキ保管庫にコピーを保存</a>
        </div>

        <div class="deck-content-wrapper">
            <!-- 左側：デッキ編成エリア -->
            <div class="deck-formation-area">
                <!-- デッキ情報 -->
                <div class="deck-info-section">
                    <h2 class="deck-detail-name">デッキ名 <span class="deck-creator-inline">ー 制作者：制作者名</span></h2>
                </div>

                <!-- コメントとカードグリッドの横並びコンテナ -->
                <div class="formation-with-comment">
                    <!-- 5x3 カードグリッド（左側） -->
                    <div class="formation-grid">
                        <!-- 1行目 -->
                        <div class="formation-slot" data-slot="1-1">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="1-2">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="1-3">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="1-4">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="1-5">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <!-- 2行目 -->
                        <div class="formation-slot" data-slot="2-1">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="2-2">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="2-3">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="2-4">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="2-5">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <!-- 3行目 -->
                        <div class="formation-slot" data-slot="3-1">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="3-2">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="3-3">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="3-4">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                        <div class="formation-slot" data-slot="3-5">
                            <div class="slot-card filled">
                                <div class="slot-card-image">
                                    <img src="../images/placeholder.png" alt="カード">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- コメントセクション（右側） -->
                    <div class="comment-section">
                        <div class="comment-label">コメント</div>
                        <div class="comment-content">コメントを入力...</div>
                    </div>
                </div>
            </div>

            <!-- 右側：カード拡大表示パネル -->
            <div class="card-preview-panel">
                <div class="card-preview-header">カード詳細</div>
                <div class="card-preview-content">
                    <div class="card-preview-image">
                        <img src="../images/placeholder.png" alt="カード拡大">
                    </div>
                </div>
            </div>
        </div>

    </main>

    <footer>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>

    <script>
        // タブ切り替え
        document.querySelectorAll('.deck-tab').forEach(tab => {
            tab.addEventListener('click', function() {
                document.querySelectorAll('.deck-tab').forEach(t => t.classList.remove('active'));
                this.classList.add('active');
            });
        });

        // 編成スロットクリック時の処理
        document.querySelectorAll('.formation-slot').forEach(slot => {
            slot.addEventListener('click', function() {
                document.querySelectorAll('.formation-slot').forEach(s => s.classList.remove('selected'));
                this.classList.add('selected');
                // TODO: 選択中のカードを配置
            });
        });
    </script>
</body>
</html>
