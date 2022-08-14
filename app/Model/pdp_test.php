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
    }
}
