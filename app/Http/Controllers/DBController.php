<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DBController extends Controller
{
    //
    public function select()
    {
    	$mvs = DB::select('select * from goods_1 limit 10');
    	echo $mvs;

    	return view('page1');
    }

    //join 使用
    public function join()
    {
    	$res = DB::table('goods_1')
    		->join('cates','goods_1.cate_id','=','cates.id')
    		->take(10)
    		->get();

    	dd($res);
    }

}
  