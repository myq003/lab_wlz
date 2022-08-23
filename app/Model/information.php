<?php

namespace App\Model;

use http\Env\Request;
use http\Message;
use Illuminate\Database\Eloquent\Model;

class information extends Model
{
    //
    protected $table = "tem_test";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];


    public static function Wrh_Find($email){
        try{
        $date = self::select('a_max','b_max','c_max','d_max')->where('email',$email)->get();
        return $date;
        }catch(\Exception $e){
            logError('操作失败',[$e->getMessage()]);
            return false;
        }

    }
}
