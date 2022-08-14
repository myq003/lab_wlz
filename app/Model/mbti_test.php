<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class mbti_test extends Model
{
    protected $table = 'mbti_test';
    public $timestamps = true;
    protected $guarded = [];

    /**
     * 查询霍兰德是否完成测评
     * @param $email
     * @return false
     */
    public static function Yjj_speeded($email){
        try{
            $cvb=self::select('mbti_state')->where('email',$email)->get();
            return $cvb;
        }catch (\Exception $e) {
            logError('操作失败', [$e->getMessage()]);
            return false;
        }
    }
}
