<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デッキ構築 - ラインストライク デッキビルダー</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <a href="../index.php" class="site-title">ラインストライク デッキビルダー</a>
        <h1 class="page-title">編集ページ</h1>
        <nav class="header-nav">
            <a href="../index.php" class="nav-button">みんなのデッキ閲覧</a>
            <a href="mypage.php" class="nav-button">マイページ</a>
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
                <!-- カード1 -->
                <div class="game-card" data-cost="4">
                    <span class="card-cost">4</span>
                    <div class="card-image">
                        <img src="../images/cards/sample.jpg" alt="カード名">
                    </div>
                </div>
                <!-- カード2 -->
                <div class="game-card" data-cost="4">
                    <span class="card-cost">4</span>
                    <div class="card-image">
                        <img src="../images/cards/sample.jpg" alt="カード名">
                    </div>
                </div>
                <!-- カード3 -->
                <div class="game-card" data-cost="4">
                    <span class="card-cost">4</span>
                    <div class="card-image">
                        <img src="../images/cards/sample.jpg" alt="カード名">
                    </div>
                </div>
                <!-- カード4 -->
                <div class="game-card" data-cost="4">
                    <span class="card-cost">4</span>
                    <div class="card-image">
                        <img src="../images/cards/sample.jpg" alt="カード名">
                    </div>
                </div>
                <!-- カード5 -->
                <div class="game-card" data-cost="4">
                    <span class="card-cost">4</span>
                    <div class="card-image">
                        <img src="../images/cards/sample.jpg" alt="カード名">
                    </div>
                </div>
                <!-- カード6 -->
                <div class="game-card" data-cost="4">
                    <span class="card-cost">4</span>
                    <div class="card-image">
                        <img src="../images/cards/sample.jpg" alt="カード名">
                    </div>
                </div>
                <!-- カード7 -->
                <div class="game-card" data-cost="4">
                    <span class="card-cost">4</span>
                    <div class="card-image">
                        <img src="../images/cards/sample.jpg" alt="カード名">
                    </div>
                </div>
                <!-- カード8 -->
                <div class="game-card" data-cost="4">
                    <span class="card-cost">4</span>
                    <div class="card-image">
                        <img src="../images/cards/sample.jpg" alt="カード名">
                    </div>
                </div>
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
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード2</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード3</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード4</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード5</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード6</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード7</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード8</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード9</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード10</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード11</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード12</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード13</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード14</span>
                        <span class="slot-count">×1</span>
                    </li>
                    <li class="deck-slot">
                        <span class="slot-name">カード15</span>
                        <span class="slot-count">×1</span>
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
        <p>&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>
</body>
</html>
