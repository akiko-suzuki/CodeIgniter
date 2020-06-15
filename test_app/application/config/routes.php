<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['news/create'] = 'news/create';
$route['news/(:any)'] = 'news/view/$1';
$route['news'] = 'news';

////ワイルドカード (:any) 任意の文字に対するルーティングを設定。$1＝読み込まれた URL を受け取る////
$route['(:any)'] = 'pages/view/$1';
// http://localhost/test_app/index.php/about でaboutにアクセスできる
// ちなみに http://localhost/test_app/about は Object not found になる

////ルート URL を読み込むと pages クラスの views メソッドが呼び出されるという設定////
$route['default_controller'] = 'pages/view';
// http://localhost/test_app/index.php/ で home にアクセスできる
// ちなみに http://localhost/test_app/ でもアクセスできる