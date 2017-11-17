<?php
namespace Admin\Controller;
use Think\Controller;
class ArticleController extends Controller {
    public function article(){

        $article=D('article');
        $articles=$article->select();
        
        $this->assign('articles',$articles);

        $this->display();
    }


    public function add(){
        $article=D('article');

        if (IS_POST) {
            $data['a_title']=I('a_title');
            $data['a_content']=I('a_content','htmlspecialchars');
            $data['time']=time();
            // dump($data);die();

            if ($article->create($data)) {
                if ($article->add()) {
                    $this->success('新增文章成功', U(article)); 
                }else{
                    $this->error('新增文章失败');
                }
            }else{
                $this->error($article->getError);
            }
            return;

        }

        $this->display();
    }


    public function del(){
        $article=D('article');
        if ($article->delete(I('id'))) {
            $this->success("删除文章成功", U(article));
        }else{
            $this->error('删除文章失败');
        }
       
    }


    public function edit(){

        $article=D('article');

        if (IS_POST) {
            $data['a_id']=I('a_id');
            $data['a_title']=I('a_title');
            $data['a_content']=I('a_content');
            $data['time']=time();
            // dump($data);die();

            if ($article->create($data)) {
                if ($article->save()) {
                    $this->success('修改文章成功', U(article)); 
                }else{
                    $this->error('修改文章失败');
                }
            }else{
                $this->error($article->getError);
            }
            return;

        }


        $articleid=I('id');
        $articles=$article->find($articleid);
        $this->assign('articles',$articles);


        $this->display();

    }


}