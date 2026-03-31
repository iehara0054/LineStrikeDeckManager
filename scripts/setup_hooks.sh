#!/bin/bash
# 2台目のPCでクローン後に一度だけ実行するスクリプト
cp scripts/hooks/pre-push .git/hooks/pre-push
cp scripts/hooks/post-merge .git/hooks/post-merge
chmod +x .git/hooks/pre-push .git/hooks/post-merge
echo "Git hooks installed!"
