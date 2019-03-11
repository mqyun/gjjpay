<?php
// +----------------------------------------------------------------------
// | OneThink [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2013 http://www.onethink.cn All rights reserved.
// +----------------------------------------------------------------------
// | Author: 麦当苗儿 <zuojiazi@vip.qq.com> <http://www.zjzit.cn>
// +----------------------------------------------------------------------

namespace Home\Controller;
use OT\DataDictionary;

/**
 * 前台首页控制器
 * 主要获取首页聚合数据
 */
class IndexController extends HomeController {

	//系统首页
	public function index(){
		
		$this->display();
	}

	public function add(){
		$waterlogging = D('Waterlogging');
		$photo=D('image');
		$data['Latitude']=$_POST['Latitude'];
		$data['Longitude']=$_POST['Longitude'];
		$data['content']=$_POST['content'];
		$data['time']=strtotime(date('Y-m-d H:i:s'));
		$res=$waterlogging->add($data);

		$upload = new \Think\Upload();// 实例化上传类    
		$upload->maxSize   =     3145728 ;// 设置附件上传大小    
		$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');// 设置附件上传类型    
		$upload->savePath  =      './Public/Uploads/'; // 设置附件上传目录    // 上传文件     
		$info   =   $upload->upload();
		$num=count($info);
		for ($i=0; $i <$num ; $i++) { 
			$image['photoname']=$info[$i]['savepath'].$info[$i]['savename'];
			$image['wl_id']=$res;
			
			$result=$photo->add($image);

		}
		if($result!=null){
			$this->success('操作成功', U('Index/index'));
		}
		
	}
	public function show(){
		$waterlogging = D('Waterlogging')->select();
		$str = json_encode($waterlogging);
		$this->assign('str',$str);
		$this->display();
	}

}