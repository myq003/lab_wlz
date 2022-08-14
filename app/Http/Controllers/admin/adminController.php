<?php

namespace App\Http\Controllers\admin;
use App\Model\mbti_test;
use App\Model\pdp_test;
use App\Model\student;
use App\Http\Controllers\Controller;
use App\Model\tem_answer;
use App\Model\tem_test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class adminController extends Controller
{
    public  function Yjj_Find(Request $request){
        $email=$request['email'];
        $abc=student::Yjj_Finded($email);
        return $abc?
            json_success('操作成功!',$abc,200):
            json_fail('操作失败!',null,100);
    }
//    public function Yjj_look(){
//        $bcd=tem_answer::Yjj_looked();
//        return $bcd?
//            json_success('操作成功!',$bcd,200):
//            json_fail('操作失败!',null,100);
//    }
    public  function Yjj_examine(Request $request){
        $email=$request['email'];
        $def=pdp_test::Yjj_examined($email);
        return $def?
            json_success('操作成功!',$def,200):
            json_fail('操作失败!',null,100);
    }
    public function Yjj_see(Request $request){
        $email=$request['email'];
        $fgh=tem_test::Yjj_seed($email);
        return $fgh?
            json_success('操作成功!',$fgh,200):
            json_fail('操作失败!',null,100);
    }
//public function YJJ_lianbiao(){
//        $data=DB::table('mbti_test as mt')
//         ->select('mt.mbti_result','mt.email','mbti_answer.details')
//         ->leftJoin('mbti_answer','mt.mbti_result','=','mbti_answer.answer')
//         ->get();
//    return $data?
//        json_success('操作成功!',$data,200):
//           json_fail('操作失败!',null,100);
//    }

    public  function Yjj_speed(Request $request){
        $email=$request['email'];
        $klz=mbti_test::Yjj_speeded($email);
        return $klz?
            json_success('操作成功!',$klz,200):
            json_fail('操作失败!',null,100);
    }
//    public function Yjj_run(){
//        $key=DB::table('pdp_test as pdt')
//            ->select('pdt.email','pdt.pdp_result','pdt.pdp_grade','pdp_answer.details')
//            ->leftJoin('pdp_answer','pdt.pdp_result','=','pdp_answer.answer')
//            ->get();
//        return $key?
//            json_success('操作成功!',$key,200):
//            json_fail('操作失败!',null,100);
//    }
//    public function Yjj_sad(Request $request){
//        $email=$request['email'];
//        $fgh=tem_test::Yjj_silk($email);
//        return $fgh?
//            json_success('操作成功!',$fgh,200):
//            json_fail('操作失败!',null,100);
//    }
}
