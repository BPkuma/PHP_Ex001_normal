<?php
namespace Operation;
require_once 'Validator/Validator.php';

use Validator\Validate;

class Saute
{
  public function Saute($food, $gram){

    echo "「{$food}を炒める時間を入力してください」\n";
    $minute = 0;
    $minute = Validate::validate($minute);

      echo "「{$food}{$gram}グラムを{$minute}分間炒めます」\n";

    $flag = $gram  / $minute;
    $getpoint = 0;

    if (7 <= $flag && $flag <= 13){
      return $getpoint += 1;
    } else {
      return $getpoint -= 1;
    }

    }
  }