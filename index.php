<?php
//外部ファイル読み込み
require_once 'models/User.php';

$ikari = new User('猪狩',23);

//島さん誕生(オブジェクト）
$shima = new User('島', 18);


//ユーザー一覧を作成
$users = array();
$users[] = $ikari;
//array_push($users,$ikari);
$users[] = $shima;
$users[] = new User('伊藤',100);
//HTMLファイルを表示
include_once 'views/index_view.php';
