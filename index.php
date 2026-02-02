<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ラインストライク デッキビルダー</title>
    <!-- TODO: ファビコンを追加する -->
    <link rel="stylesheet" href="css/styles.css?v=28">
</head>
<body class="fixed-layout page-index">
    <header>
        <a href="index.php" class="site-title">ラインストライク デッキビルダー</a>
        <nav class="header-nav">
            <a href="admin/admin_users.php" class="nav-button admin-btn">管理者ページへ</a>
            <a href="view/login.php" class="nav-button">マイデッキ保管庫</a>
            <p class="nav-note">※作成途中のため、管理者ページへのリンクを常時表示しています。</p>
        </nav>
    </header>

    <div class="hero-banner">
        <img src="img/logo/ngs_linestrike_icon.png" alt="ラインストライク アイコン" class="hero-icon">
        <img src="img/logo/ngs_title.png" alt="ラインストライク タイトル" class="hero-title">
    </div>

    <main class="index-main">
        <!-- お知らせ欄 -->
        <div class="news-panel news-panel-full">
            <div class="news-header">お知らせ</div>
            <div class="news-content">
                <ul class="news-list">
                    <li class="news-item">
                        <span class="news-date">2025/01/01</span>
                        <span class="news-text">サイトを公開しました。</span>
                    </li>
                </ul>
                <div class="news-schedule">
                    <p class="news-schedule-title">【今後の予定】</p>
                    <ul class="news-schedule-list">
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>サインアップ機能</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>ログイン機能</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>新規デッキ登録</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>デッキ閲覧</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>デッキ編集機能</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>マイデッキ保管庫機能</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>カード詳細の位置は全てのページで同じ。左側へ</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>人気デッキを掲載する（期間とこれまでのトータルのランキング）</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>常にマイデッキ保管庫から新規デッキをつくる</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>編集ページの作成中のデッキは、カードの絵柄も表示する</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>PP順にソート</span></label></li>
                        <li><label><input type="checkbox" class="schedule-checkbox"><span>編集機能は、実際のゲーム画面と同じにする</span></label></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="index-header">
            <div class="section-header-row">
                <h2 class="section-title">人気デッキ <a href="view/decklist.php" style="margin-left: 20px; font-weight: normal;">すべてのデッキ</a></h2>
                <p class="section-hint">下記デッキカードをクリックすると、デッキの構成を閲覧 / 編集できます。</p>
            </div>
        </div>
        <!-- TODO: 各デッキカードのリンクにデッキIDをパラメータとして渡す（例: deck.php?id=デッキID） -->
        <div class="deck-grid-wrapper">
            <div class="deck-grid">
            <!-- デッキカード 1 -->
            <a href="view/deck.php" class="deck-card">
                <div class="deck-card-header">デッキ名</div>
                <div class="deck-card-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード1">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード2">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード3">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード4">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード5">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード6">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード7">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード8">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード9">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード10">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード11">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード12">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード13">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード14">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード15">
                    </div>
                </div>
            </a>

            <!-- デッキカード 2 -->
            <a href="view/deck.php" class="deck-card">
                <div class="deck-card-header">デッキ名</div>
                <div class="deck-card-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード1">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード2">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード3">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード4">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード5">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード6">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード7">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード8">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード9">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード10">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード11">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード12">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード13">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード14">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード15">
                    </div>
                </div>
            </a>

            <!-- デッキカード 3 -->
            <a href="view/deck.php" class="deck-card">
                <div class="deck-card-header">デッキ名</div>
                <div class="deck-card-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード1">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード2">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード3">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード4">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード5">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード6">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード7">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード8">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード9">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード10">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード11">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード12">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード13">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード14">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード15">
                    </div>
                </div>
            </a>

            <!-- デッキカード 4 -->
            <a href="view/deck.php" class="deck-card">
                <div class="deck-card-header">デッキ名</div>
                <div class="deck-card-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード1">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード2">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード3">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード4">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード5">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード6">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード7">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード8">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード9">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード10">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード11">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード12">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード13">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード14">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード15">
                    </div>
                </div>
            </a>

            <!-- デッキカード 5 -->
            <a href="view/deck.php" class="deck-card">
                <div class="deck-card-header">デッキ名</div>
                <div class="deck-card-thumbnail">
                    <div class="thumbnail-grid">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード1">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード2">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード3">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード4">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード5">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード6">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード7">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード8">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード9">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード10">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード11">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード12">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード13">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード14">
                        <img src="img/list_cards/8a4b4aac5a19ec9801418de9113115f2.png" alt="カード15">
                    </div>
                </div>
            </a>

            <!-- 新規登録カード -->
            <a href="view/construction.php" class="deck-card index-new-deck-card">
                <div class="deck-card-header">新規登録</div>
                <div class="index-new-deck-plus">＋</div>
            </a>
            </div>
        </div>
    </main>

    <footer>
        <p class="footer-description">
            このサイトはPSO2内カードゲーム・ラインストライクのデッキ構築/他者のデッキ閲覧を補助するサイトです。デッキの閲覧、登録、編集が可能です。
        </p>
        <p class="footer-copyright">&copy; 2025 ラインストライク デッキビルダー</p>
    </footer>
</body>
</html>
