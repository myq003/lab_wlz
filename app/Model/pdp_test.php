<?php

namespace App\Model;


use Illuminate\Database\Eloquent\Model;

class pdp_test extends Model
{
    protected $table = 'pdp_test';
    public $timestamps = true;
    protected $guarded = [];

    /**
     * 查询pdp是否完成测评
     * @param $email
     * @return false
     */

    public static function Yjj_examined($email)
    {
        try {
            $yjj = self::select('pdp_state')->where('email', $email)->get();
            return $yjj;
        } catch (\Exception $e) {
            logError('操作失败', [$e->getMessage()]);
            return false;
        }

/**use http\Env\Request;**/
use http\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
/**use mysql_xdevapi\Table;**/

class pdp_test extends Model
{
    //
    protected $table = "pdp_test";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];


    public static function Wrh_Find2($email){
        try{
            $sum = DB::table('pdp_test')
                ->join('pdp_answer',function ($join) {
                    $join->on('pdp_test.pdp_result','=','pdp_answer.answer');
                })
                ->select('pdp_test.pdp_result','pdp_answer.details')
                ->get();
            return $sum;
        }catch(\Exception $e){
            logError('操作失败',[$e->getMessage()]);
            return false;
        }


    }
}
