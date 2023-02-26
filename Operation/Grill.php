<?php
namespace Operation;
require_once 'Cooking/CookSteak.php';
require_once 'Operation/Cut.php';

class Grill
{
  public $bool = null;

  public function grilledIronPlate($food, $thickness){
    echo "「厚さ{$thickness}センチの{$food}を鉄板で焼きます」\n";
    echo "「焼き時間を設定してください」\n";
    $minute = readline();

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
    $minute = readline();

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
}
