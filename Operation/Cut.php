<?php
namespace Operation;
require_once 'Validator/Validator.php';

use Validator\Validate;

class Cut
{
  public function cutMeat($meat, $gram) {
    echo "「肉をカットする厚さを入力してください」\n";
    $thickness = 0;
    $thickness = Validate::validate($thickness);

    echo "「{$meat}{$gram}グラムを{$thickness}センチにカットしました」\n";
    return $thickness;
    }

  public function cutOnion(){
    echo "「玉ねぎを何グラムみじん切りにしますか？」\n";
    $onion_gram = 0;
    $onion_gram = Validate::validate($onion_gram);

    echo "「玉ねぎを{$onion_gram}グラムみじん切りにしました」\n";
    return $onion_gram;
  }
}