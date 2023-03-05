<?php
namespace Operation;
require_once 'Validator/Validator.php';

use Validator\Validate;

class Mix
{
  //プロパティの宣言
  private $meat_gram;
  private $egg_gram;
  private $bread_gram;
  private $salt_gram;
  private $all;
  private $point;

  ///////////////////////////////////////
  // MethodName    mix
  // Purpose       ハンバーグに使う材料を混ぜる
  // Return        この工程の得点と総重量を配列でリターン
  // Memo          
  ///////////////////////////////////////
  public function mix(int $onion_gram){
    echo "「肉を何g使用しますか？」\n";
    $this->meat_gram += Validate::validate_meat(50);

    echo "「卵を何g入れますか？」\n";
    echo " << 今の状態 : 肉{$this->meat_gram}g / 玉ねぎ{$onion_gram}g >>\n";
    $this->egg_gram += Validate::validate_notice("卵", $this->meat_gram, 3);

    echo "「パン粉を何g入れますか？」\n";
    echo "<< 今の状態 : 肉{$this->meat_gram}g / 玉ねぎ{$onion_gram}g / 卵{$this->egg_gram}g >>\n";
    $this->bread_gram += Validate::validate_notice("パン粉", $this->meat_gram, 5);

    $this->all = $this->meat_gram + $this->egg_gram + $this->bread_gram + $onion_gram;

    echo "「塩を何g入れますか？」\n";
    echo "<< 今の状態 : 肉{$this->meat_gram}g / 玉ねぎ{$onion_gram}g / 卵{$this->egg_gram}g / パン粉{$this->bread_gram}g // 総重量{$this->all}g >>\n";
    $this->salt_gram += Validate::validate_notice("塩", $this->meat_gram, 15);


    echo "「総重量{$this->all}gに対して塩を{$this->salt_gram}g入れました」\n";
    
    $flag = $this->salt_gram / $this->all;
    $this->point = 0;

    if (0.005 <= $flag && $flag <= 0.015)
    {
      $this->point += 2;
      return array($this->point, $this->all);
    }
    else
    {
      $this->point -= 2;
      return array($this->point, $this->all);
    }
    
  }
}