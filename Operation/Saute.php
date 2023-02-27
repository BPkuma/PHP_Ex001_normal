<?php
namespace Operation;

class Saute
{
  public function Saute($food, $gram){
    echo "「{$food}を炒める時間を入力してください」";
    while(true){
      $minute = (int)readline();
      if($minute === null || $minute === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }
      echo "「{$food}{$gram}グラムを{$minute}分間炒めます」\n";

    $flag = $gram  / $minute;
    global $point;
    $point = 0;

    if (7 <= $flag && $flag <= 13){
      return $point += 1;
    } else {
      return $point -= 1;
    }

    }
  }

  Saute::Saute("玉ねぎ", 5);