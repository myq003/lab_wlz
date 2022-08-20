<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use PHPUnit\Exception;

class tem_test extends Model
{
    protected $table = 'tem_test';
    public $timestamps = true;
    protected $guarded = [];

    /**
     *查询气质测评是否完成
     * @param $email
     * @return false
     */

    public static function Yjj_seed($email)
    {
        try {
            $inf = self::select('tem_state')->where('email', $email)->get();
            return $inf;
        } catch (\Exception $e) {
            logError('操作失败', [$e->getMessage()]);
            return false;
        }
    }

//    public static function Yjj_silk($email)
//    {
//        try {
//            $vbn = self::select('a_max', 'b_max', 'c_max', 'd_max')->where('email',$email)->get();
//            return $vbn;
//        } catch (\Exception $e) {
//            logError('操作失败', [$e->getMessage()]);
//            return false;
//        }
   // }
}
