<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class student extends Model
{
<<<<<<< HEAD
    //

=======
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
>>>>>>> 80161e34bab0b80f30cc69762dd36102dcaa3c2e
}
