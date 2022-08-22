<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Model\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class studentController extends Controller
{
    /**
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function email(Request $request){
        $email = $request->input('email');
        Mail::raw("邮箱验证成功,现在你可以修改密码了", function ($message) use ($email) {
            $message->subject("修改密码？请点击这里");
            // 发送到哪个邮箱账号
            $message->to($email);
        });

        $res=User::change_stateZLC($email);
        // 判断邮件是否发送失败
        return $res ?
            json_success('操作成功!', $email, 200):
            json_fail('操作失败!', null, 100);
    }
}
