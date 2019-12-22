<?php

namespace app\index\controller;

use think\Controller;
use think\Request;
use think\View;

class RealTimeMonitoring extends Controller
{
    /**
     * 显示资源列表
     *
     * @return \think\Response
     */
    public function index()
    {
        //
    }
    public function pc()
    {
        $time_of_Null_Screen = 0;
        $time_of_Full_Screen = 0;
        $time_of_First_Screen = 0;
        $time_of_DNS = 0;
        $time_of_Connect = 0;
        $num_of_request = 0;
        $num_of_pages = 0;


        $this->assign('time_of_Null_Screen',$time_of_Null_Screen);
        $this->assign('time_of_First_Screen',$time_of_First_Screen);
        $this->assign('time_of_Full_Screen',$time_of_Full_Screen);
        $this->assign('num_of_pages',$num_of_pages);
        $this->assign('time_of_DNS',$time_of_DNS);
        $this->assign('time_of_Connect',$time_of_Connect);
        $this->assign('num_of_request',$num_of_request);
        $view = new View();
        $view->assign('pc');
        return $this->view->fetch();
        //return 1;
    }
    public function pad()
    {
        $time_of_Null_Screen = 0;
        $time_of_Full_Screen = 0;
        $time_of_First_Screen = 0;
        $time_of_DNS = 0;
        $time_of_Connect = 0;
        $num_of_request = 0;
        $num_of_pages = 0;


        $this->assign('time_of_Null_Screen',$time_of_Null_Screen);
        $this->assign('time_of_First_Screen',$time_of_First_Screen);
        $this->assign('time_of_Full_Screen',$time_of_Full_Screen);
        $this->assign('num_of_pages',$num_of_pages);
        $this->assign('time_of_DNS',$time_of_DNS);
        $this->assign('time_of_Connect',$time_of_Connect);
        $this->assign('num_of_request',$num_of_request);
        $view = new View();
        $view->assign('pad');
        return $this->view->fetch();
        //return 1;
    }
    public function mobile()
    {
        $time_of_Null_Screen = 0;
        $time_of_Full_Screen = 0;
        $time_of_First_Screen = 0;
        $time_of_DNS = 0;
        $time_of_Connect = 0;
        $num_of_request = 0;
        $num_of_pages = 0;


        $this->assign('time_of_Null_Screen',$time_of_Null_Screen);
        $this->assign('time_of_First_Screen',$time_of_First_Screen);
        $this->assign('time_of_Full_Screen',$time_of_Full_Screen);
        $this->assign('num_of_pages',$num_of_pages);
        $this->assign('time_of_DNS',$time_of_DNS);
        $this->assign('time_of_Connect',$time_of_Connect);
        $this->assign('num_of_request',$num_of_request);
        $view = new View();
        $view->assign('mobile');
        return $this->view->fetch();
        //return 1;
    }
    public function whole_view()
    {
        $time_of_Null_Screen = 0;
        $time_of_Full_Screen = 0;
        $time_of_First_Screen = 0;
        $time_of_DNS = 0;
        $time_of_Connect = 0;
        $num_of_request = 0;
        $num_of_pages = 0;


        $this->assign('time_of_Null_Screen',$time_of_Null_Screen);
        $this->assign('time_of_First_Screen',$time_of_First_Screen);
        $this->assign('time_of_Full_Screen',$time_of_Full_Screen);
        $this->assign('num_of_pages',$num_of_pages);
        $this->assign('time_of_DNS',$time_of_DNS);
        $this->assign('time_of_Connect',$time_of_Connect);
        $this->assign('num_of_request',$num_of_request);
        $view = new View();
        $view->assign('whole_view');
        return $this->view->fetch();
//        return 1;
    }
    public function distributedgraph()
    {
        $view = new View();
        $view->assign('distributedgraph');
        return $this->view->fetch();
    }
    public function analysis()
    {
        $view = new View();
        $view->assign('analysis');
        return $this->view->fetch();
    }
    public function mainframes_view()
    {
        $view = new View();
        $view->assign('mainframes_view');
        return $this->view->fetch();
    }
    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
