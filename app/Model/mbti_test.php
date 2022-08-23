<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Table;

class mbti_test extends Model
{
    protected $table = "mbti_test";
    public $timestamps = true;
    protected $primaryKey = "id";
    protected $guarded = [];

    public static function MyqCreateR($email,$req1,$req2,$res,$mbti_zlc_zlc){

         $created_at =Carbon::now()->toDateTimeString();
        $account=DB::table('mbti_test')->where('email',$email)->value('id');
        if($account!=null){
            return  false;}
            $data1 = DB::table("mbti_test")->insert([
                 "email"=>$email,
              "one_1"=>$req1,
               "one_2"=>$req2,
                "two_r" => $res[0],
                "three_r" =>$res[1],
                "four_r" => $res[2],
                "five_r" => $res[3],

                "two_a" => $res[4],
                "three_a" =>$res[5],
                "four_a" => $res[6],
                "five_a" => $res[7],

                "two_i" => $res[8],
                "three_i" =>$res[9],
                "four_i" => $res[10],
                "five_i" => $res[11],

                "two_s" => $res[12],
                "three_s" =>$res[13],
                "four_s" => $res[14],
                "five_s" => $res[15],

                "two_e" => $res[16],
                "three_e" =>$res[17],
                "four_e" => $res[18],
                "five_e" => $res[19],

                "two_c" => $res[20],
                "three_c" =>$res[21],
                "four_c" => $res[22],
                "five_c" => $res[23],

                    "mbti_result"=>$mbti_zlc_zlc,
                "mbti_state"=>1,
                "created_at"=>$created_at,
                "updated_at"=>$created_at
            ]);

            return $data1;

    }

}
