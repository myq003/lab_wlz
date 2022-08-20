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

use http\Env\Request;
use http\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class mbti_test extends Model
{
    //
    protected $table = "mbti_test";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];


    public static function Wrh_Find1($email){
        try{
            $sum = DB::table('mbti_test')
                ->join('mbti_answer',function ($join) {
                    $join->on('mbti_test.mbti_result','=','mbti_answer.answer');
                })
                ->select('mbti_test.mbti_result','mbti_answer.details')
                ->get();
            return $sum;
        }catch(\Exception $e){
            logError('操作失败',[$e->getMessage()]);
            return false;
        }


    }
}
