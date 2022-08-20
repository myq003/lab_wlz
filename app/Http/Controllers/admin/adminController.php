<?php

namespace App\Http\Controllers\admin;

use App\Model\information;
use App\Model\mbti_test;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\pdp_test;

class adminController extends Controller
{
    //
    public function WrhFind(Request $request){
        $email = $request['email'];
        $res = information::Wrh_Find($email);
        return $res?
            json_success("操作成功",$res,200):
            json_fail("操作成功",null,100);
    }
    public function WrhFind1(Request $request){
        $email = $request['email'];
        $res = mbti_test::Wrh_Find1($email);
        return $res?
            json_success("操作成功",$res,200):
            json_fail("操作成功",null,100);
    }
    public function WrhFind2(Request $request){
        $email = $request['email'];
        $res = pdp_test::Wrh_Find2($email);
        return $res?
            json_success("操作成功",$res,200):
            json_fail("操作成功",null,100);
    }
}
