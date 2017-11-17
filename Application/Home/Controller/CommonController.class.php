<?php
namespace Home\Controller;
use Think\Controller;
class CommonController extends Controller {
    public function __construct(){
        parent::__construct();
        $this->nav();
        $this->header();
    }

    public function nav(){
        $cate=D('cate');
        $navers=$cate->select();
        $this->assign('navers',$navers);
      
    }

    public function header(){
        $setting=D('setting');
        $settingrs=$setting->find(1);
        $this->assign('settingrs',$settingrs);

    }

}