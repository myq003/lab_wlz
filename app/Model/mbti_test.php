<?php

namespace App\Model;

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
