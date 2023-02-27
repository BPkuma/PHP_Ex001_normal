<?php
namespace Cooking;
require_once 'Operation/Cut2.php';
require_once 'Operation/Grill2.php';

use Operation\Cut2, Operation\Grill2;

const BEEF = "牛肉";
const PORK = "豚肉";
const CHICKEN = "鶏肉";
class CookSteak2
{
  

  public function cookSteak():void {
    echo "「肉番号を入力してください」\n";
    while(true){
      $number = (int)readline();
      if($gram === null || $gram === 0){
        break;
      } else {
        echo "「正しい入力を行ってください。文字列や小数点、数字の０、入力なしでエンターは正しくありません」\n";
      }
    }
    if ($number % 2 === 0) {
      $meat = BEEF;
    } else if ($number % 3 === 0) {
      $meat = CHICKEN;
    } else {
      $meat = PORK;
    }
  
    echo "「グラム数を入力してください」\n";
    while(true){
      $gram = (int)readline();
      if($gram === null || $gram === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }
    $thickness = Cut2::cutMeat($meat, $gram);
  
    if ($meat === BEEF || $meat === PORK) {
      $bool = Grill2::grilledIronPlate($meat, $thickness);
    } else {
      $bool = Grill2::grilledOven($meat, $gram);
    }
  
    if($bool) {
      echo "「美味しいステーキが出来ました」\n";
    } else {
      echo "「このステーキは失敗作です」\n";
    }
  }
}