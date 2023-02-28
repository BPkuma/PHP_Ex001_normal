<?php
namespace Operation;
require_once 'Validator/Validator.php';

use Validator\Validate;

class Mix
{
  public $meat_gram;
  public $egg_gram;
  public $bread_gram;
  public $salt_gram;
  public $all;

  public function mix($onion_gram){
    echo "「肉を何グラム使用しますか？」\n";
    $this->meat_gram += Validate::validate();

    echo "「卵を何グラム入れますか？」\n";
    $this->egg_gram += Validate::validate_notice("卵", $this->meat_gram, 3);

    echo "「パン粉を何グラム入れますか？」\n";
    $this->bread_gram += Validate::validate_notice("パン粉", $this->meat_gram, 5);

    echo "「塩を何グラム入れますか？」\n";
    $this->salt_gram += Validate::validate_notice("塩", $this->meat_gram, 15);

    $this->all = $this->meat_gram + $this->egg_gram + $this->bread_gram + $onion_gram;

    echo "「全体重量{$this->all}グラムに対して塩を{$this->salt_gram}グラム入れました」\n";
    
    $flag = $this->salt_gram / $this->all;
    $getpoint = 0;

    if (0.005 <= $flag && $flag <= 0.015){
      $getpoint += 2;
      return array($getpoint, $this->all);
    } else {
      $getpoint -= 2;
      return array($getpoint, $this->all);
    }
    
  }
}