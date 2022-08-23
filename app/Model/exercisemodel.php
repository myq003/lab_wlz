<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class exercisemodel extends Model
{
    public static function LOGIN($request){
        $info=DB::table('admin')->where('email',$request['email'])->first();
        if(empty($request['email'])){
            $status=1;
            return $status;
        }//判断邮箱是否为空
       if(empty($request['password'])){
           $status=2;
           return $status;
       }//判断密码是否为空
        if (!$info){
            $status=3;
        }else{
            if ($info->password==$request['password']){
                $status=5;//判断密码是否相等
            }else{
                $status=4;//密码错误
            }
        }
        return $status;
    }
}
