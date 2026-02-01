<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デッキ構築 - ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body class="fixed-layout page-construction">
    <header>
        <a href="../index.php" class="site-title">ラインストライク デッキビルダー</a>
        <h1 class="page-title">編集ページ</h1>
        <nav class="header-nav">
            <a href="../admin/admin_users.php" class="nav-button admin-btn">管理者ページへ</a>
            <a href="../index.php" class="nav-button">トップページ</a>
            <a href="mypage.php" class="nav-button">マイデッキ保管庫</a>
        </nav>
    </header>

    <main class="construction-main">
        <!-- 左側: 検索ボックス＆プレビュー -->
        <aside class="search-panel">
            <div class="panel-header">検索ボックス</div>
            <div class="panel-content">
                <input type="text" class="search-input" placeholder="カード名で検索">
                <div class="element-filter">
                    <label class="element-checkbox">
                        <input type="checkbox" name="element" value="fire" checked>
                        <span class="element-label element-fire">火</span>
                    </label>
                    <label class="element-checkbox">
                        <input type="checkbox" name="element" value="water" checked>
                        <span class="element-label element-water">水</span>
                    </label>
                    <label class="element-checkbox">
                        <input type="checkbox" name="element" value="thunder" checked>
                        <span class="element-label element-thunder">雷</span>
                    </label>
                    <label class="element-checkbox">
                        <input type="checkbox" name="element" value="wind" checked>
                        <span class="element-label element-wind">風</span>
                    </label>
                    <label class="element-checkbox">
                        <input type="checkbox" name="element" value="light" checked>
                        <span class="element-label element-light">光</span>
                    </label>
                    <label class="element-checkbox">
                        <input type="checkbox" name="element" value="dark" checked>
                        <span class="element-label element-dark">闇</span>
                    </label>
                </div>
            </div>
            <!-- カードプレビュー -->
            <div class="card-preview">
                <div class="preview-image">
                    <img src="../images/cards/sample.jpg" alt="選択中のカード" id="preview-img">
                </div>
                <div class="preview-info">
                    <p class="preview-name" id="preview-name">カード名</p>
                </div>
            </div>
        </aside>

        <!-- 中央: カード一覧 -->
        <section class="card-list-panel">
            <div class="card-grid">
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード1"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード2"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード3"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード4"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード5"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード6"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード7"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード8"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード9"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード10"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード11"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード12"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード13"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード14"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード15"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード16"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード17"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード18"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード19"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード20"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード21"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード22"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード23"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード24"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード25"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード26"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード27"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード28"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード29"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード30"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード31"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード32"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード33"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード34"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード35"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード36"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード37"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード38"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード39"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード40"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード41"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード42"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード43"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード44"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード45"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード46"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード47"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード48"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード49"></div></div>
                <div class="game-card"><div class="card-image"><img src="../images/cards/sample.jpg" alt="カード50"></div></div>
            </div>
        </section>

        <!-- 右側: デッキ編集 -->
        <aside class="deck-panel">
            <div class="panel-header">
                <span>デッキ名:</span>
                <input type="text" class="deck-name-input" placeholder="デッキ名を入力">
            </div>
            <div class="panel-content">
                <ul class="deck-slot-list">
                    <li class="deck-slot">
                        <span class="slot-name">カード1</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード2</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード3</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード4</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード5</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード6</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード7</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード8</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード9</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード10</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード11</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード12</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード13</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード14</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード15</span>
                        <div class="slot-count-controls">
                            <button type="button" class="count-btn count-minus">－</button>
                            <span class="slot-count">1</span>
                            <button type="button" class="count-btn count-plus">＋</button>
                        </div>
                    </li>
                </ul>
                <div class="deck-actions">
                    <!-- TODO: フォーム送信またはJavaScriptでデッキデータをPHPへ送信する処理を実装 -->
                    <button type="button" class="save-deck-button">保存</button>
                </div>
            </div>
        </aside>
    </main>

    <footer>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>
</body>
</html>
