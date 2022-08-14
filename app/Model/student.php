<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
    protected $table='student';
    public $timestamps = true;
    protected $guarded=[];

    /**
     * 查询用户信息
     * @param $email
     * @return false
     */
    public static function Yjj_Finded($email){
       try{
           $yjj=self::select('email','username')->where('email',$email)->get();
           return $yjj;
       }catch(\Exception $e){
           logError('操作失败',[$e->getMessage()]);
           return false;
       }
    }
}
