# dq9Asset
私がdq9の情報をまとめるためのスプレッドシートアカウントは、非課金アカウントなので[^1]私の身に変化がありアカウントにアクセスできなくなった場合、2年後にスプレッドシートにアクセスできなくなります。  
それによる情報損失を防ぐため、私がアカウントにアクセスできなくなっても、Github社が倒産するまで残るであろうGithubにdq9関連のスプレッドシートのエクスポートを掲載します。  
  
  
## ルカニ確率一覧.xlsx　　
各ボスのルカニ耐性計算式。他のモンスターはbestiary.txt[^2]の情報を元に計算すると良い。  
このスプレッドシートは独自式を使っているが、実際の計算式は`75+((攻撃魔力-50)*25/449)`である[^5]  　　
https://docs.google.com/spreadsheets/d/1j0qQ7ifj1l8LfhRkmfTZrF2uU6hPPnVO0AOWq16USOY/edit?gid=0#gid=0　　

## monster.xlsx
各モンスターの行動を手動で調べてみたスプレッドシート。bestiary.txt[^2]により不要になったけど、制限行動を理解するのに役に立った。　　
https://docs.google.com/spreadsheets/d/126xRu5T2Uil-lyGslfYEtCTEf3x9DnXKjTny8VHzIo0/edit?gid=0#gid=0　　

## 戸惑い.xlsx
戸惑い確率の式を解析[^3]したので、RTA中にどれぐらい戸惑うか試算したスプレッドシート。　　
https://docs.google.com/spreadsheets/d/1X6XoRMfxtNiLc28ND3TnSV4E4LH7_snSaD2FxBLcTzo/edit?gid=0#gid=0　　

## 会心時メタル切りダメージ.xlsx
「メタル切りの会心で(RTA中に)1ダメージしか出ない理由を知りたい」という解析依頼の結果。  
攻撃力129以下は絶対に1ダメージであり、129ダメージから直線的にダメージが増えていくというのをphpプログラムで算出して、依頼主に渡すためのスプレッドシート。  
当時攻撃演算の解析支援Luaスクリプト(t_tilyousa2.lua)なんてものは無いし、特技処理のBLXジャンプを特定してなかったので、完全に手探りで解析するという力業だった。  

https://docs.google.com/spreadsheets/d/1DYMGv3ZKsS2KOvMDNtjDwbf48oSMbD2I3adToskfrrw/edit?usp=sharing  

## 検証.xlsx
サンマロウ北の洞窟のポップ率調査(手動)   
プログラムで算出したポップ率が正しいか知りたかったので早起きして調査した。   
  
https://docs.google.com/spreadsheets/d/1AVSiORceHKUkfir9qv4c-cQ_Ycv4HOAFbRBxAJB-zD4/edit?gid=0#gid=0  

## 泉アイテム一覧.xlsx
ストーリークリア後の泉は拾得したときにBテーブルで抽選される。その確率を全て調査した。  
現在属している泉グループを変更したければ`20F8E52`(Byte)を変更してマップ移動すればよい。  
これは、ゲームは情報を読むときに、候補となるデータを全て読み込み、必要なデータだけコピーするロード方法が採用されているという知見を得た解析でもある[^4]  
  
https://docs.google.com/spreadsheets/d/1DYMGv3ZKsS2KOvMDNtjDwbf48oSMbD2I3adToskfrrw/edit?gid=0#gid=0  

## dq9 limit.xlsx

詳しくは下記の記事を読んでください。  
https://daisukedaisuke.hatenablog.com/entry/2024/06/07/120021  
   
これもスタック上に一時的に全てのモンスター情報が展開されていたので、そこから取得。  
https://docs.google.com/spreadsheets/d/17c3hLnkLsJzeM6mdtrJ-VLe7VisDU1TWzmst9RC7izU/edit?usp=sharing  
  
## dq9 limitover2.xlsx
上の制限を超えるモンスター一覧。phpプログラムで算出。  
https://docs.google.com/spreadsheets/d/1qpnbh3z3RmyfjdYNbOzirdKNRSlnT71cMUbyq6bTFsk/edit?gid=0#gid=0  
  
## monster names.xlsx   
モンスターid、英語名、日本語名の一覧。enc.luaの副産物。  
  
https://docs.google.com/spreadsheets/d/1beReMKU7WIx0MrJ7JToYAXKuV6Kg-EVcz4oehc5v_tw/edit?usp=sharing  

## エルギオス2ダメージ計算.xlsx
エルギオスのダメージを計算したかったが、実機検証で不正確と分かってしまっているスプレッドシート。

https://docs.google.com/spreadsheets/d/1Kn6ElCDuj88QhNVrDIU4BQTTZIs-slBl0TcjUWAd0iA/edit?usp=sharing


[^1]: プライマリアカウントは課金してるので一生残ります。しかし、メインで使ってるアカウントは非課金です。もしアクセスできなくなることが判明した場合は入金してアカウントを保全しますが、災害などの不可抗力によってアカウントへのアクセス権を失うかもしれません。  
[^2]: 制限行動があるかどうかは載ってない。海外の人が作ったdq9のモンスターのhp、行動(一部欠けてる)、耐性が載ってる凄いテキストファイル。ダウンロードリンクは掲載しないけど、`dq9.carrd.co`のdiscordギルド、TheQuestersRestで頑張って探してください。  
[^3]: 戸惑い確率は正面衝突及び側面衝突時は`器用さが最も高いメンバーの値 * 0.05 + 2`%、後ろからぶつかった場合この式に`*10`%    
[^4]: 私はこの仕様を利用して、アセットを解析せずに全てのエンカテーブルを取得したりしている。https://daisukedaisuke.hatenablog.com/entry/2024/04/29/072629   
[^5]: TheQuestersRestより