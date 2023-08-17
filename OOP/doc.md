# モダン OHP

- PSR-1,2,4(PHP コーデング規約)
- namespace(名前空間)
- autoload(自動クラス読み込み)
- composer(パッケージ管理+自動クラス読み込み)

## オブジェクト指向プログラミング

### オブジェクト指向プログラミングとは

> オブジェクト指向プログラミングとは、プログラムをオブジェクトとして捉え、オブジェクト間の相互作用によってプログラムを構成するプログラミングの手法である。

オブジェクト指向->役割分担
例「会社」
会社は、部門ごとに分けられて、それぞれ役割を持っている

#### オブジェクト指向の 3 要素

- カプセル化
- 継承
- ポリモーフィズム

### カプセル化

> カプセル化とは、オブジェクト指向プログラミングにおいて、オブジェクトの内部にデータや処理を隠蔽し、外部からのアクセスを制限することである。
> ざっくり言うと、外部からのアクセスを制限すること

### 継承

> 継承とは、オブジェクト指向プログラミングにおいて、あるクラスの機能を別のクラスが引き継ぐことである。
> ざっくり言うと、親クラスの機能を子クラスが引き継ぐこと

## オブジェクトの特徴

| タイプ           | 宣言                            | インスタンス化 | 利用       | アクセス修飾子                 | 特徴           |
| ---------------- | ------------------------------- | -------------- | ---------- | ------------------------------ | -------------- |
| クラス           | class クラス名 {}               | できる         | extends    | public<br>protected<br>private | 単一継承       |
| 抽象クラス       | abstract class 抽象クラス名 {}  | できない       | extends;   | public<br>protected<br>private | 継承前提       |
| インターフェース | interface インターフェース名 {} | できない       | implements | public                         | メソッド名のみ |
| トレイト         | trait トレイト名 {}             | できない       | use        | public<br>protected<br>private | 複数 use       |