<?php
namespace Cooking;
require_once 'Operation/Cut.php';
require_once 'Operation/Grill.php';
require_once 'Validator/Validator.php';

use Operation\Cut, Operation\Grill;
use Validator\Validate;

const BEEF = "牛肉";
const PORK = "豚肉";
const CHICKEN = "鶏肉";
class CookSteak
{
  public function cookSteak():void {
    echo "「肉番号を入力してください」\n";
    $number = 0;
    $number = Validate::validate($number);

    if ($number % 2 === 0) {
      $meat = BEEF;
    } else if ($number % 3 === 0) {
      $meat = CHICKEN;
    } else {
      $meat = PORK;
    }
  
    echo "「グラム数を入力してください」\n";
    $gram = 0;
    $gram = Validate::validate($gram);

    $thickness = Cut::cutMeat($meat, $gram);
  
    if ($meat === BEEF || $meat === PORK) {
      $bool = Grill::grilledIronPlate($meat, $thickness);
    } else {
      $bool = Grill::grilledOven($meat, $gram);
    }
  
    if($bool) {
      echo "「美味しいステーキが出来ました」\n";
    } else {
      echo "「このステーキは失敗作です」\n";
    }
  }
}