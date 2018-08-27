<?php
namespace app\admin\controller;
use think\Controller;

class Index extends Controller{

	public function index(){
		$data = db('admin')->select();
		dump($data);
	
	}

}
