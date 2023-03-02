<?php
namespace Operation;
require_once 'Validator/Validator.php';

use Validator\Validate;
  ///////////////////////////////////////
  // ClassName    Grill
  // Purpose      加工した肉を焼く工程と得点の積算
  // Return       なし
  // Memo         
  ///////////////////////////////////////
class Grill
{
  //プロパティの宣言
  private int $minute;  //焼き時間
  private int $point;   //この工程での得点

  ///////////////////////////////////////
  // MethodName    Cut::__construct
  // Purpose       プロパティの初期化
  // Return        なし
  // Memo          
  ///////////////////////////////////////
  function __construct(){
    $this->minute = 0;
    $this->point = 0;
  }
  
  public function grilledIronPlate($food, $thickness){
    echo "「厚さ{$thickness}cmの{$food}を鉄板で焼きます」\n";
    echo "「焼き時間を設定してください」\n";

    //validateメソッドから返ってきたユーザー入力をminuteプロパティに代入
    $this->minute = Validate::validate();
  
    //thicknessからminuteを引いた値を判定用変数flagに代入
    $flag = $thickness - $this->minute;
  
    if($flag === 0)
    {
      //thicknessとminuteが同じ値だったら
      echo "「ミディアムに焼きあがりました」\n";
      $this->point += 3;
    }
    if ($flag === 1)
    {
      echo "「レアに焼きあがりました」\n";
      $this->point += 2;
    }
    if ($flag === -1)
    {
      echo "「ウェルダンに焼きあがりました」\n";
      $this->point += 1;
    }
    if ($flag > 1)
    {
      echo "「生焼けです」\n";
      $this->point += -2;
    }
    if ($flag < -1)
    {
      echo "「焦げました」\n";
      $this->point += -4;
    }
    return $this->point;
  }
  
  public function grilledOven($food, $gram){
    echo "「{$gram}gの{$food}をオーブンで焼きます」\n";
    echo "「焼き時間を設定してください」\n";

    $this->minute = Validate::validate();
  
    //gramをminuteで割った値を判定用変数flagに代入
    $flag = $gram / $this->minute;
  
    if ($flag < 10)
    {
      echo "「焦げました」\n";
      $this->point += -4;
    }
    else if($flag > 20)
    {
      echo "「生焼けです」\n";
      $this->point += -2;
    }
    else {
      echo "「美味しく焼けました」\n";
      $this->point += 2;
    }
    return $this->point;
  }

  public function grilledHamburgSteak($gram){
    echo "「{$gram}gのハンバーグをオーブンで焼きます」\n";
    echo "「焼き時間を設定してください」\n";

    $minute = Validate::validate();

    $flag = $gram / $minute;
  
    if ($flag <= 10)
    {
      echo "「焦げました」\n";
      $this->point += 4;
    }
    else if ($flag >=15 && $flag < 20)
    {
      echo "「もう少し焼けば完璧でした」\n";
      $this->point += 1;
    }
    else if ($flag >= 20)
    {
      echo "「もう少し焼いても良かったですね」\n";
      $this->point += 0;
    }
    else if ($flag >= 25)
    {
      echo "「生焼けです」\n";
      $this->point += -2;
    }
    else
    {
      echo "「ちょうど良く焼けました」\n";
      $this->point += 3;
    }

    return $this->point;
  }

}