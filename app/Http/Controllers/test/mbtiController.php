<?php

namespace App\Http\Controllers\test;

use App\Http\Controllers\Controller;
use App\Model\mbti_test;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Scalar\String_;

class mbtiController extends Controller
{

    public function  SumR(Request $request){
        $req1=$request['a'];
        $req2=$request['b'];
        $req= $request['c'];

        $email = auth("api")->user()->email;

        //R
        for ($index = 0;$index < 10;$index++){
            $req[$index+1] += $req[$index];
            $res[0] = $req[$index+1];
        }

        for ($index = 60;$index < 70;$index++){
            $req[$index+1] += $req[$index];
            $res[1] = $req[$index+1];
        }

        for ($index = 120;$index < 130;$index++){
            $req[$index+1] += $req[$index];
            $res[2] = $req[$index+1];
        }

        for ($index = 180;$index < 190;$index++){
            $req[$index+1] += $req[$index];
            $res[3] = $req[$index+1];
        }



        //A
        for ($index = 10;$index < 20;$index++){
            $req[$index+1] += $req[$index];
            $res[4] = $req[$index+1];
        }

        for ($index = 70;$index < 80;$index++){
            $req[$index+1] += $req[$index];
            $res[5] = $req[$index+1];
        }

        for ($index = 130;$index < 140;$index++){
            $req[$index+1] += $req[$index];
            $res[6] = $req[$index+1];
        }

        for ($index = 190;$index < 200;$index++) {
            $req[$index+1] += $req[$index];
            $res[7] = $req[$index+1];
        }

        //I
        for ($index = 20;$index < 30;$index++){
            $req[$index+1] += $req[$index];
            $res[8] = $req[$index+1];
        }

        for ($index = 80;$index < 90;$index++){
            $req[$index+1] += $req[$index];
            $res[9] = $req[$index+1];
        }

        for ($index = 140;$index < 150;$index++){
            $req[$index+1] += $req[$index];
            $res[10] = $req[$index+1];
        }

        for ($index = 200;$index < 210;$index++){
            $req[$index+1] += $req[$index];
            $res[11] = $req[$index+1];
        }

        //S
        for ($index = 30;$index < 40;$index++){
            $req[$index+1] += $req[$index];
            $res[12] = $req[$index+1];
        }

        for ($index = 90;$index < 100;$index++){
            $req[$index+1] += $req[$index];
            $res[13] = $req[$index+1];
        }

        for ($index = 150;$index < 160;$index++){
            $req[$index+1] += $req[$index];
            $res[14] = $req[$index+1];
        }

        for ($index = 210;$index < 220;$index++){
            $req[$index+1] += $req[$index];
            $res[15] = $req[$index+1];
        }


        //E
        for ($index = 40;$index < 50;$index++){
            $req[$index+1] += $req[$index];
            $res[16] = $req[$index+1];
        }

        for ($index = 100;$index < 110;$index++){
            $req[$index+1] += $req[$index];
            $res[17] = $req[$index+1];
        }

        for ($index = 160;$index < 170;$index++){
            $req[$index+1] += $req[$index];
            $res[18] = $req[$index+1];
        }

        for ($index = 220;$index < 230;$index++){
            $req[$index+1] += $req[$index];
            $res[19] = $req[$index+1];
        }


        //C
        for ($index = 50;$index < 60;$index++){
            $req[$index+1] += $req[$index];
            $res[20] = $req[$index+1];
        }

        for ($index = 110;$index < 120;$index++){
            $req[$index+1] += $req[$index];
            $res[21] = $req[$index+1];
        }

        for ($index = 170;$index < 180;$index++){
            $req[$index+1] += $req[$index];
            $res[22] = $req[$index+1];
        }

        for ($index = 230;$index < 240;$index++){
            $req[$index+1] += $req[$index];
            $res[23] = $req[$index+1];
        }

        $resr = 0;
        for ($i = 0;$i < 4;$i++){
            $resr += $res[$i];
        }

        $resa = 0;
        for ($i = 4;$i < 8;$i++){
            $resa += $res[$i];
        }

        $resi = 0;
        for ($i = 8;$i < 12;$i++){
            $resi += $res[$i];
        }

        $ress = 0;
        for ($i = 12;$i < 16;$i++){
            $ress += $res[$i];
        }

        $rese = 0;
        for ($i = 16;$i < 20;$i++){
            $rese += $res[$i];
        }

        $resc = 0;
        for ($i = 20;$i < 24;$i++){
            $resc += $res[$i];
        }

        $resarr = array("R" => $resr, "A" => $resa, "I" => $resi, "S" => $ress, "E" => $rese, "C" => $resc);
        $res_zlc['R']=$resr;
        $res_zlc['A']=$resa;
        $res_zlc['I']=$resi;
        $res_zlc['S']=$ress;
        $res_zlc['E']=$rese;
        $res_zlc['C']=$resc;
       arsort($res_zlc);
       $mbti= array_keys($res_zlc);

        $mbti_zlc =$mbti[0].$mbti[1].$mbti[2];
        $mbti_zlc=(array)$mbti_zlc;
        $mbti_zlc_zlc=$mbti_zlc[0];

       $result = mbti_test::MyqCreateR($email,$req1,$req2,$res,$mbti_zlc_zlc);

        $data2 = DB::table("mbti_answer")->where("answer", "=", $mbti_zlc)->select("details")->get();

        return $result?
            json_success("操作成功",$data2,200):
            json_fail("操作失败,该用户已经测试过了",null,100);

    }




}
