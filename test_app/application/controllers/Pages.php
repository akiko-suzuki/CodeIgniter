<?php
//静的なページを表示する「Pages」クラスを実装したコントローラー「Pages.php」を作成

//「Pages」クラスで「CI_Controller」クラスを継承
//（「system/core/Controller.php」にあるメソッドや変数をアクセスできるということ）
class Pages extends CI_Controller {
    
    ////Pages.phpに、ヘッダー、フッダー、本文を表示する処理を記載////
    public function view($page = 'home')//view() メソッドを持ったコントローラを準備。引数がない場合は「home.php」
    {
        if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php') )//引数がある場合は、(引数).php
        {
            show_404();//指定されたファイルがなければapplication/views/errors/html/error_404.php を表示する
        }

        //$data['title']はビュー内の$titleと同等
        $data['title'] = ucfirst($page);//ucfirst=頭文字を大文字にする

        $this->load->view('templates/header', $data);
        $this->load->view('pages/'.$page, $data);
        $this->load->view('templates/footer', $data);
    }
}