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
class DisasterinfoController extends HomeController {

	//系统首页
	public function index(){
		$info = M("disaster")->field('type')->select();
		$this->assign("info",$info);
		$this->display();

	}
	public function add(){
		$DisasterInfo = D('Disasterinfo');
		$result = $DisasterInfo->updata();
		if($result!=null){
			$this->success('操作成功', U('Disasterinfo/index'));
		}
	}
	
}