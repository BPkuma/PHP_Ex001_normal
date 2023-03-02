<?php
namespace Cooking;
require_once 'Operation/Cut.php';
require_once 'Operation/Grill.php';
require_once 'Validator/Validator.php';

use Operation\Cut, Operation\Grill;
use Validator\Validate;

const BEEF = "牛肉";
const PORK = "豚肉";
const CHICKEN = "鶏肉";
  ///////////////////////////////////////
  // ClassName    CookSteak
  // Purpose      ステーキの調理と得点の積算
  // Return       なし
  // Memo         
  ///////////////////////////////////////
class CookSteak
{
  //プロパティ宣言
  private int $point;    //この工程での得点。pointメソッドでMainインスタンスのscoreプロパティに加算する
  private int $number;   //肉の種類を紐付ける
  private string $meat;  //肉の種類を文字出力するための文字列
  private int $gram;     //肉の量
  private int $thickness;//肉の厚さ

  ///////////////////////////////////////
  // MethodName    CookSteak::__construct
  // Purpose       プロパティの初期化
  // Return        なし
  // Memo          
  ///////////////////////////////////////
  function __construct(){
    $this->point = 0;
    $this->number = 0;
    $this->meat = "";
    $this->gram = 0;
    $this->thickness = 0;
  }

  ///////////////////////////////////////
  // MethodName    CookSteak::cookSteak
  // Purpose       ステーキの調理
  // Return        point
  // Memo          
  ///////////////////////////////////////
  public function cookSteak(){
    echo "「どの肉を使いますか？」\n";
    //validateメソッドから返ってきたユーザー入力をnumberプロパティに代入
    $this->number = Validate::validate();

    if ($this->number % 2 === 0)
    {
      //偶数が入力されたらBEEFをmeatプロパティに代入
      $this->meat = BEEF;
    } 
    else if ($this->number % 3 === 0)
    {
      //偶数以外の３の倍数だったらCHICKENをmeatプロパティに代入
      $this->meat = CHICKEN;
    } 
    else 
    {
      //上記のどちらでも無い場合はPORKをmeatプロパティに代入
      $this->meat = PORK;
    }
  
    echo "「グラム数を入力してください」\n";
    $this->gram = Validate::validate();

      //使用する肉の量で得点判定
    if ($this->gram >= 100 && $this->gram <= 300)
    { 
      //100-300なら適正量で＋１点
      $this->point += 2;
    }
    else if($this->gram < 100)
    { 
      //100以下だと少なすぎてうまく焼けないので－１点
      $this->point -= 1;
    }
    else if($this ->gram > 500)
    { 
      //500以上でも多すぎてうまく焼けないので－１点
      $this->point -= 1;
    }

    $cut = new Cut();
    //cutMeatメソッドを実行して、返り値をthicknessに代入
    $this->thickness = $cut->cutMeat($this->meat, $this->gram);
    //Cutインスタンスのpointプロパティの値をpointへ加算
    $this->point += $cut->point;
  
    //牛肉か豚肉を選択した場合はgrilledIronPlateメソッドを実行して
    //鶏肉を選択した場合はgrilledOvenメソッドを実行
    if ($this->meat === BEEF || $this->meat === PORK)
    {
      $grill = new Grill();
      $this->point += $grill->grilledIronPlate($this->meat, $this->thickness);
    }
    else
    {
      $grill = new Grill();
      $this->point += $grill->grilledOven($this->meat, $this->gram);
    }

    return $this->point;
  }
}