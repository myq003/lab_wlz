<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Model\exercisemodel;
use Illuminate\Http\Request;

class exercise extends Controller
{
   public function yinjingjing(){
              return view();
   }
   public function zuimei(Request $request){
       $info=$request->all();
       $data=exercisemodel::LOGIN($info);
       if ($data==1){
           return redirect('shabi')->with('email','邮箱不能为空');
       }elseif ($data==2){
           return redirect('xaiogou')->with('password','密码不能为空');
       }elseif ($data==3){
           return redirect('brn')->with('LOGIN','账号不存在');
       }elseif ($data==4){
           return redirect('nonhjia')->with('passwordnot','密码不正确');
       }else{
           return redirect(('chenggong'));
       }
   }
}
