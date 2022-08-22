<?php

namespace App\Http\Controllers\test;
use App\Http\Controllers\Controller;
<<<<<<< HEAD
use Carbon\Carbon;
use Carbon\Traits\Date;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Symfony\Component\VarDumper\Cloner\Data;

class temController extends Controller
{


}
=======
use App\Model\temperament;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class temController extends Controller
{
    /**
     * @author zr
     *接收数据 传递数据
     *
     */
    public  function Zr_xxx(Request $request )
    {
        $req=$request->all();//获取前端传过来的数据
        $email = auth('api')->user()->email;//从TOKEN中获取email
         $res=null;
         $con=null;//定义变量

         $account=DB::table('tem_test')->where('email',$email)->value('id');

         if($account!=null){
             return  json_fail('操作失败!该账号已经进行过测试了',null, 100 ) ;}//判断数据库里是否写入过
        for($index=0;$index<=14;$index++){

            $req[$index+1]+=$req[$index];
            $res[0]=$req[$index+1];

        }
        for($index=15;$index<=29;$index++){

            $req[$index+1]+=$req[$index];
            $res[1]=$req[$index+1];

        }
        for($index=30;$index<=44;$index++){

            $req[$index+1]+=$req[$index];
            $res[2]=$req[$index+1];

        }
        for($index=45;$index<59;$index++){

            $req[$index+1]+=$req[$index];
            $res[3]=$req[$index+1];

        }//四个FOR循环总分
       if($res[0]>$res[1]&&$res[0]>$res[2]&&$res[0]>$res[3])
       {
           $con=DB::table('tem_answer')->where('id',1)->select('answer','suitable_occ','unfit_occ')->get();
       }
       else  if($res[1]>$res[0]&&$res[1]>$res[2]&&$res[1]>$res[3]){
           $con=DB::table('tem_answer')->where('id',2)->select('answer','suitable_occ','unfit_occ')->get();
       }
       else  if($res[2]>$res[0]&&$res[2]>$res[1]&&$res[2]>$res[3]){
           $con=DB::table('tem_answer')->where('id',3)->select('answer','suitable_occ','unfit_occ')->get();
       }
       else  if($res[3]>$res[0]&&$res[3]>$res[2]&&$res[3]>$res[1]){
           $con=DB::table('tem_answer')->where('id',4)->select('answer','suitable_occ','unfit_occ')->get();
       }

//三种特殊情况
       else if($res[0]==$res[1]||$res[0]==$res[2]||$res[0]=$res[3])
        {
            $con=DB::table('tem_answer')->where('id',1)->select('answer','suitable_occ','unfit_occ')->get();
        }

       else  if($res[1]==$res[2]||$res[1]==$res[3]){
           $con=DB::table('tem_answer')->where('id',2)->select('answer','suitable_occ','unfit_occ')->get();
       }

       else  if($res[2]==$res[3]){
           $con=DB::table('tem_answer')->where('id',3)->select('answer','suitable_occ','unfit_occ')->get();
       }
        $res_zlc=temperament::Zr_Find($email,$req,$res);
        return $con?
            json_success('操作成功!',$con,  200):
            json_fail('操作失败!',null, 100 ) ;
    }}

>>>>>>> 80161e34bab0b80f30cc69762dd36102dcaa3c2e
