<?php
namespace app\index\controller;

use \think\Controller;
use \think\Db;

class Index extends Controller
{
    public function index()
    {
    	$kinder = Db::name('幼儿园信息')->select();
    	$pinder = Db::name('游乐场信息')->select();
    	$this->assign('kinder',$kinder);
    	$this->assign('pinder',$pinder);
    	return $this->fetch();
      }
}
