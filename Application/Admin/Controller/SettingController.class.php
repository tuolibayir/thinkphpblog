<?php
namespace Admin\Controller;
use Think\Controller;
class SettingController extends Controller {
    

    public function setting(){
        $setting=D('setting');

        if (IS_POST) {
           
            $data['s_id']=I('s_id');
            $data['s_name']=I('s_name');
            $data['s_description']=I('s_description');
            //dump($data);die();

            if ($setting->create($data)) {
                if ($setting->save()) {
                    $this->success('设置成功', U(setting)); 
                }else{
                    $this->error('设置失败');
                }
            }else{
                $this->error($setting->getError);
            }
            return;

        }

        $settingrs=$setting->find(1);
        $this->assign('settingrs',$settingrs);

        $this->display();
    }


}