
## 最優先ルール

- **このファイルをチャット開始時に必ず読むこと。**
- **依頼された問題だけを解決すること。余計な作業をしない。**
  ただしクリエイティブなタスクでは、依頼以外の機能を実装しても構わない。
- **すべてのファイル書き込みは `apply_patch` を使うこと。**
- コマンドベースの置換（`sed -i` 等による行置換）は使わない。部分編集のみ行う。
- 既存のコメントを削除しない。
- 明確な理由がない限り、大きなファイルを読まない。
- 検索は最小限の関連パスに絞る。
- ファイルを読む価値があるか不明なら、まず先頭100〜280行だけ読んでから判断する。
- `apply_patch` 使用時、全行削除して同じ内容で書き直すことは可能な限り避ける（ファイルの置き換え自体は否定しない）。
- `apply_patch` で日本語を書いても文字化けしない。文字化けはPowerShellの問題。文字化けが発生した場合はユーザーが通知する。
- 文字化けを理由にすべてを英語化しない。`apply_patch` を使う限り文字化けは起きない。
- 循環参照はできる限り避ける。
- 編集した行番号を最終提出時に報告しなくてよい。Gitがあればファイル名だけで十分。
- `rg` コマンドが使用可能。
- 編集時の差分を最小化する。難しければ小さな単位に分割する。
- 可能な限りファイル1件ずつ差分を提出する。
- `git diff` で全差分を確認して行番号を報告するのはトークンの無駄。行わない。
- **許可なしに追加ソフトウェアをインストールしない。**
  許可とはメッセージ表示だけでなく、処理を中断してユーザーにインストール許可を求め、確認を得てからタスクを完了することを意味する。
- ファイル読むときはかならず長さ制限をすること

## ユーザー変更の扱い

- PLEASE DO NOT RESTORE the differences that I deleted for my own convenience.
  - These deletions were intentional. Do not attempt to restore them, assuming that "THE CHAT HISTORY IS CORRECT BUT WAS DELETED!!!!!"
  - Restoring this would be a waste of time for both parties.
- ユーザー由来の未追跡ファイルや削除を勝手に戻さない。

## PowerShellでUTF-8を読む

```powershell
[Console]::InputEncoding = [Console]::OutputEncoding = [System.Text.Encoding]::UTF8; Get-Content -Encoding UTF8 file.txt
[Console]::InputEncoding = [Console]::OutputEncoding = [System.Text.Encoding]::UTF8; $i=1; Get-Content -Encoding UTF8 file.txt | % { "$i: $_"; $i++ }
```
