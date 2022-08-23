<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class tem_answer extends Model
{
    protected $table='tem_answer';
    public $timestamps = true;
    protected $guarded=[];
    public static function Yjj_looked(){
        try {
            $data = self::select('answer','suitable_occ','unfit_occ')->get();
            return $data;
        } catch (\Exception $e) {
            logError('操作失败', [$e->getMessage()]);
            return false;
        }
    }
}
