<?php
namespace Operation;
require_once 'Validator/Validator.php';

use Validator\Validate;

class Grill
{
  public function grilledIronPlate($food, $thickness){
    echo "「厚さ{$thickness}センチの{$food}を鉄板で焼きます」\n";
    echo "「焼き時間を設定してください」\n";
    $minute = 0;
    $minute = Validate::validate($minute);
  
    $flag = $thickness - $minute;
  
    if($flag === 0){
      echo "「ミディアムに焼きあがりました」\n";
      $bool = true;
    } if ($flag === 1){
      echo "「レアに焼きあがりました」\n";
      $bool = true;
    } if ($flag === -1){
      echo "「ウェルダンに焼きあがりました」\n";
      $bool = true;
    } if ($flag > 1) {
      echo "「生焼けです」\n";
      $bool = false;
    } if ($flag < -1) {
      echo "「焦げました」\n";
      $bool = false;
    }
    return $bool;
  }
  
  public function grilledOven($food, $gram){
    echo "「{$gram}グラムの{$food}をオーブンで焼きます」\n";
    echo "「焼き時間を設定してください」\n";
    $minute = 0;
    $minute = Validate::validate($minute);
  
    $flag = $gram / $minute;
  
    if ($flag < 10) {
      echo "「焦げました」\n";
      $bool = false;
    } else if ($flag > 20) {
      echo "「生焼けです」\n";
      $bool = false;
    } else {
      echo "「美味しく焼けました」\n";
      $bool = true;
    }
    return $bool;
  }

  public function grilledHamburgSteak($gram){
    echo "「{$gram}グラムのハンバーグをオーブンで焼きます」\n";
    echo "「焼き時間を設定してください」\n";
    $minute = 0;
    $minute = Validate::validate($minute);

    $flag = $gram / $minute;

    $getpoint = 0;
  
    if ($flag <= 10) {
      echo "「焦げました」\n";
      $getpoint -= 10;
    } else if ($flag >=15 && $flag < 20){
      echo "「もう少し焼けば完璧でした」\n";
      $getpoint += 1;
    } else if ($flag >= 20) {
      echo "「もう少し焼いても良かったですね」\n";
      $getpoint += 0;
    } else if ($flag >= 25) {
      echo "「生焼けです」\n";
      $getpoint -= 3;
    } else {
      echo "「ちょうど良く焼けました」\n";
      $getpoint += 2;
    }

    return $getpoint;
  }

}