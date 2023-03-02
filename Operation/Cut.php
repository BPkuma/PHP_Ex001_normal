<?php
namespace Operation;
require_once 'Validator/Validator.php';

use Validator\Validate;
  ///////////////////////////////////////
  // ClassName    Cut
  // Purpose      素材を切る工程と得点の積算
  // Return       なし
  // Memo         
  ///////////////////////////////////////
class Cut
{
  private $thickness;
  private $onion_gram;
  public $point;

  ///////////////////////////////////////
  // MethodName   cutMeat
  // Purpose      ユーザーが決めた厚さで肉をカット
  // Return       thickness
  // Memo         
  ///////////////////////////////////////
  public function cutMeat($meat, $gram) {
    echo "「肉をカットする厚さを入力してください」\n";

    $this->thickness = Validate::validate();

    if($this->thickness <= 1)
    {
      $this->point += -1;
    }
    else if($this->thickness > 5)
    {
      $this->point += -3;
    }
    else
    {
      $this->point += 1;
    }

    echo "「{$meat}{$gram}gを{$this->thickness}cmにカットしました」\n";
    return $this->thickness;
    }
  ///////////////////////////////////////
  // ClassName    cutOnion
  // Purpose      ユーザーが決めた量の玉ねぎを切る
  // Return       onion_gram
  // Memo         
  ///////////////////////////////////////
  public function cutOnion(){
    echo "「玉ねぎを何g使用しますか？」\n";

    $this->onion_gram = Validate::validate();
    //ユーザーの入力値をリターンする
    echo "「玉ねぎを{$this->onion_gram}gみじん切りにしました」\n";
    return $this->onion_gram;
  }
}