<?php
class Helper
{
    // ========================================
    // 定数定義とヘルパー関数
    // ========================================

    /**
     * URLのバリデーション
     *
     * @param string $url バリデーションする文字列
     * @param bool バリデーションの結果
     */
    public function is_valid_url(string $url): bool
    {
        return filter_var($url, FILTER_VALIDATE_URL) !== false && preg_match('@^https?+://@i', $url) > 0;
    }
}