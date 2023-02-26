<?php
namespace Cooking;
require_once 'Operation/Cut.php';
require_once 'Operation/Grill.php';

use Operation\Cut, Operation\Grill;

class CookSteak
  {
    const BEEF = "牛肉";
    const PORK = "豚肉";
    const CHICKEN = "鶏肉";

    public function cookSteak():void {
      echo "「肉番号を入力してください」\n";
      $number = (int)readline();
      if ($number % 2 === 0) {
        $meat = self::BEEF;
      } else if ($number % 3 === 0) {
        $meat = self::CHICKEN;
      } else {
        $meat = self::PORK;
      }

      echo "「グラム数を入力してください」\n";
      $gram = readline();
      $thickness = Cut::cutMeat($meat, $gram);

      if ($meat === self::BEEF || $meat === self::PORK) {
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