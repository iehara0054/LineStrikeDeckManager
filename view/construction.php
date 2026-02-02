<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>デッキ構築 - ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="../css/styles.css?v=30">
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

    <nav class="breadcrumb">
        <a href="../index.php">トップページ</a>
        <span class="breadcrumb-separator">></span>
        <a href="mypage.php">マイデッキ保管庫</a>
        <span class="breadcrumb-separator">></span>
        <span class="breadcrumb-current">デッキ編集</span>
    </nav>

    <main class="construction-main-new">
        <!-- 左側: カードリスト -->
        <aside class="card-list-panel-new">
            <div class="panel-header-new">
                <span class="panel-title">カードリスト</span>
            </div>
            <!-- 属性タブバー -->
            <div class="element-tabs-bar">
                <button type="button" class="grid-view-btn" title="グリッド表示">
                    <span class="grid-icon">⊞</span>
                </button>
                <button type="button" class="element-tab-wide active" data-element="fire">火</button>
                <button type="button" class="element-tab-wide" data-element="water">水</button>
                <button type="button" class="element-tab-wide" data-element="thunder">雷</button>
                <button type="button" class="element-tab-wide" data-element="wind">風</button>
                <button type="button" class="element-tab-wide" data-element="light">光</button>
                <button type="button" class="element-tab-wide" data-element="dark">闇</button>
                <button type="button" class="sort-btn" title="ソート">
                    <span class="sort-icon">🕐</span>
                </button>
            </div>
            <!-- フィルターバー -->
            <div class="filter-bar">
                <select class="filter-dropdown">
                    <option value="all">すべて</option>
                    <option value="type1">タイプ1</option>
                    <option value="type2">タイプ2</option>
                    <option value="type3">タイプ3</option>
                </select>
                <input type="text" class="search-input" placeholder="カード名で検索">
            </div>
            <div class="card-list-content">
                <div class="card-grid-new">
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード1"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード2"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード3"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード4"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード5"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード6"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード7"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード8"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード9"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード10"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード11"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード12"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード13"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード14"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード15"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード16"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード17"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード18"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード19"></div>
                    <div class="game-card-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="カード20"></div>
                </div>
            </div>
        </aside>

        <!-- 中央: カード詳細 -->
        <section class="center-panel">
            <div class="card-detail-panel">
                <div class="panel-header-new">
                    <span class="panel-title">カード詳細</span>
                </div>
                <div class="card-detail-content">
                    <div class="card-detail-image">
                        <img src="../img/card_red/幻視の巫女カレン.jpg" alt="選択中のカード" id="detail-card-img">
                    </div>
                    <div class="skill-detail-content">
                        <p class="skill-name" id="skill-name">スキル名</p>
                        <p class="skill-description" id="skill-description">スキルの説明がここに表示されます。</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- 右側: デッキリスト -->
        <aside class="deck-list-panel">
            <div class="panel-header-new">
                <span class="panel-title">デッキリスト</span>
            </div>
            <div class="deck-actions-new">
                <input type="text" class="deck-name-input-new" placeholder="デッキ名を入力">
                <button type="button" class="save-deck-button-new">保存</button>
            </div>
            <div class="deck-list-hint">
                <p>デッキリストのカードを押すとリストから外すことができます。</p>
            </div>
            <div class="deck-grid-5x5">
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
                <div class="deck-slot-new"><img src="../img/card_red/幻視の巫女カレン.jpg" alt="デッキカード"></div>
            </div>
        </aside>

        <!-- 最右側: コメント入力 -->
        <aside class="comment-input-panel">
            <div class="panel-header-new">
                <span class="panel-title">コメント</span>
            </div>
            <div class="comment-input-content">
                <textarea class="comment-textarea" placeholder="デッキの説明やコンセプトを入力してください..."></textarea>
            </div>
        </aside>
    </main>

    <footer>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>
</body>
</html>
