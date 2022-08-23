<?php

namespace App\Model;

use Carbon\Carbon;
use http\Message;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class temperament extends Model
{
    protected $table = 'tem_test';
    public $timestamps = true;
    protected  $primaryKey ="id";
    protected $guarded = [];
    public  static  function Zr_Find($email,$req,$res){
        try{
            $date= Carbon::now();//获取当前时间
            $con = DB::table('tem_test')->insert([//将所有数据写入数据库并返回
                'email'=>$email,
                'tem_state'=>1,
                'created_at'=>$date,
                'updated_at'=>$date,
                'a_1'=>$req['0'],
                'a_2'=>$req['1'],
                'a_3'=>$req['2'],
                'a_4'=>$req['3'],
                'a_5'=>$req['4'],
                'a_6'=>$req['5'],
                'a_7'=>$req['6'],
                'a_8'=>$req['7'],
                'a_9'=>$req['8'],
                'a_10'=>$req['9'],
                'a_11'=>$req['10'],
                'a_12'=>$req['11'],
                'a_13'=>$req['12'],
                'a_14'=>$req['13'],
                'a_15'=>$req['14'],
                'a_max'=>$res['0'],
                'b_1'=>$req['15'],
                'b_2'=>$req['16'],
                'b_3'=>$req['17'],
                'b_4'=>$req['18'],
                'b_5'=>$req['19'],
                'b_6'=>$req['20'],
                'b_7'=>$req['21'],
                'b_8'=>$req['22'],
                'b_9'=>$req['23'],
                'b_10'=>$req['24'],
                'b_11'=>$req['25'],
                'b_12'=>$req['26'],
                'b_13'=>$req['27'],
                'b_14'=>$req['28'],
                'b_15'=>$req['29'],
                'b_max'=>$res['1'],
                'c_1'=>$req['30'],
                'c_2'=>$req['31'],
                'c_3'=>$req['32'],
                'c_4'=>$req['33'],
                'c_5'=>$req['34'],
                'c_6'=>$req['35'],
                'c_7'=>$req['36'],
                'c_8'=>$req['37'],
                'c_9'=>$req['38'],
                'c_10'=>$req['39'],
                'c_11'=>$req['40'],
                'c_12'=>$req['41'],
                'c_13'=>$req['42'],
                'c_14'=>$req['43'],
                'c_15'=>$req['44'],
                'c_max'=>$res['2'],
                'd_1'=>$req['45'],
                'd_2'=>$req['46'],
                'd_3'=>$req['47'],
                'd_4'=>$req['48'],
                'd_5'=>$req['49'],
                'd_6'=>$req['50'],
                'd_7'=>$req['51'],
                'd_8'=>$req['52'],
                'd_9'=>$req['53'],
                'd_10'=>$req['54'],
                'd_11'=>$req['55'],
                'd_12'=>$req['56'],
                'd_13'=>$req['57'],
                'd_14'=>$req['58'],
                'd_15'=>$req['59'],
                'd_max'=>$res['3'],

            ]);
            return $res;
        }catch(\Exception $e){}
     logError('操作失败',[$e->getMessage()]);
        return false;
    }
}
