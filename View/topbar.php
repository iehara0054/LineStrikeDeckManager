<?php
// ========================================
// 全ページ共通PHPロジック
// ========================================

require_once __DIR__ . '/../class/Helper.php';

$Helper = new Helper();

session_start();

// エスケープ関数
function h($str)
{
    return htmlspecialchars($str, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}
