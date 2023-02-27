<?php
namespace Cooking;
require_once 'Operation/Saute.php';
require_once 'Operation/Cut2.php';
require_once 'Operation/Mix.php';
require_once 'Operation/Grill2.php';

use Operation\Saute;
use Operation\Cut2;
use Operation\Mix;
use Operation\Grill2;

class CookHamburgerSteak
{
  public $point = 0;

  public function cookHamburgerSteak(){
    $cutonion = new Cut2();
    $gram = $cutonion->cutOnion();

    $saute = new Saute();
    $this->point += ($saute->Saute("玉ねぎ", $gram));

    $mix = new Mix();
    list($getpoint, $all) = $mix->mix($gram);

    $this->point += $getpoint;
    
    $grill = new Grill2();
    $this->point += ($grill->grilledHamburgSteak($all));

    if($this->point <= 1){
      echo "「美味しいハンバーグが焼けました」\n";
    } else {
      echo "「このハンバーグは失敗作です」\n";
    }
    
  }

}