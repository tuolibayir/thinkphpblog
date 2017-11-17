<?php
namespace Home\Controller;
use Think\Controller;
class ArticleController extends CommonController {
    public function index(){
        $article=D('article');
        $articles=$article->select();
        $this->assign('articles',$articles);

        $this->display();
    }


    public function post(){
        $article=D('article');
        $articleid=I('id');
        $articles=$article->find($articleid);
        $this->assign('articles',$articles);
        $this->display();
    }
}