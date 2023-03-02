<?php
namespace Cooking;
require_once 'Operation/Saute.php';
require_once 'Operation/Cut.php';
require_once 'Operation/Mix.php';
require_once 'Operation/Grill.php';

use Operation\Saute;
use Operation\Cut;
use Operation\Mix;
use Operation\Grill;

class CookHamburgerSteak
{
  public $point;

  public function cookHamburgerSteak(){
    $cutonion = new Cut();
    $gram = $cutonion->cutOnion();

    $saute = new Saute();
    $this->point += ($saute->Saute("玉ねぎ", $gram));

    $mix = new Mix();
    list($point, $all) = $mix->mix($gram);

    $this->point += $point;
    
    $grill = new Grill();
    $this->point += $grill->grilledHamburgSteak($all);

    return $this->point;
    
  }

}