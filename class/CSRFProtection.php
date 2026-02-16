<?php

// ========================================
// セッション管理とCSRF対策
// ========================================

class CSRFProtection {

    // CRSFトークン生成
    public static function generateToken() {
        if (empty($_SESSION['csrf_token'])) {
            $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
        }
        return $_SESSION['csrf_token'];
    }

    // HTMLフォーム用の隠しフィールドを生成
    public static function getTokenField()
    {
        $token = self::generateToken();
        return '<input type="hidden" name="csrf_token" value="' . $token . '">';
    }

    // POSTされたトークンがセッションと一致するか検証
    public static function validateToken()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST')
        {
            if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== $_SESSION['csrf_token'])
            {
                // トークンが不一致の場合、処理を中断
                header('HTTP/1.1 403 Forbidden');
                exit('CSRFトークンが無効です。');
            }
        }
    }
}