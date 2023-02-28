<?php
namespace Operation;
require_once 'Validator/Validator.php';

use Validator\Validate;

class Mix
{
  public function mix($onion_gram){
    echo "「肉を何グラム使用しますか？」\n";
    $meat_gram = 0;
    $meat_gram = Validate::validate($meat_gram);

    echo "「卵を何グラム入れますか？」\n";
    $egg_gram = 0;
    $egg_gram = Validate::validate_notice($egg_gram, "卵", $meat_gram, 3);

    echo "「パン粉を何グラム入れますか？」\n";
    $bread_gram = 0;
    $bread_gram = Validate::validate_notice($bread_gram, "パン粉", $meat_gram, 5);

    echo "「塩を何グラム入れますか？」\n";
    $salt_gram = 0;
    $salt_gram = Validate::validate_notice($salt_gram, "塩", $meat_gram, 15);

    $all = $meat_gram + $egg_gram + $bread_gram + $onion_gram;

    echo "「全体重量{$all}グラムに対して塩を{$salt_gram}グラム入れました」\n";
    
    $flag = $salt_gram / $all;
    $getpoint = 0;

    if (0.005 <= $flag && $flag <= 0.015){
      $getpoint += 2;
      return array($getpoint, $all);
    } else {
      $getpoint -= 2;
      return array($getpoint, $all);
    }
    
  }
}