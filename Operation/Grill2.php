<?php
namespace Operation;

class Grill2
{
  public function grilledIronPlate($food, $thickness){
    echo "「厚さ{$thickness}センチの{$food}を鉄板で焼きます」\n";
    echo "「焼き時間を設定してください」\n";
    while(true){
      $minute = (int)readline();
      if($minute === null || $minute === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }
  
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
    while(true){
      $minute = (int)readline();
      if($minute === null || $minute === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }
  
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
    while(true){
      $minute = (int)readline();
      if($minute === null || $minute === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }

    $flag = $gram / $minute;

    $getpoint = 0;
  
    if ($flag <= 10) {
      echo "「焦げました」\n";
      $getpoint -= 2;
    } else if ($flag >= 20) {
      echo "「生焼けです」\n";
      $getpoint -= 2;
    } else {
      echo "「美味しく焼けました」\n";
      $getpoint += 2;
    }

    return $getpoint;
  }

}