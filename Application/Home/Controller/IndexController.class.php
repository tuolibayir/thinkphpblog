<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends CommonController { 
    public function index(){

        $article=D('article');
        $articles=$article->select();
        $this->assign('articles',$articles);

        $this->display();

    }
}