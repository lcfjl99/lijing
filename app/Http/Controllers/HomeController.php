<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    //cookie 设置
    public function set()
    {
        \Cookie::queue('name','abc',10);
    }

    //写入闪存
    public function flash()
    {
        //\Session::flash('week','monday');
        return redirect('/get-flash')->with('info','添加成功');
    }

    //读取闪存
    public function getFlash()
    {
        //echo \Session::get('week');
        return view('admin');
    }

    public function user()
    {
        return view('user');
    }

    public function insert()
    {
       if(empty($_POST['username']) || strlen($_POST['username']) < 6 || strlen($_POST['username']) > 20) {
        \Session::flash('error','用户名格式不正确');
        //\Session::flash('username',$_POST['username']);
        return back()->withInput();
       } 
    }

    //视图
    public function views()
    {
        return view('user.add',['title'=>'第一次接触视图','content'=>'山东发大水了 香菜涨到了39一斤']);
    }

    //创建页面
    public function page1()
    {
        return view('page1');
    }

    public function page2()
    {
        return view('page2');
    }

}
