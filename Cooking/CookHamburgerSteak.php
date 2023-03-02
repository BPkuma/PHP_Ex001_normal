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
  ///////////////////////////////////////
  // ClassName    CookHamburgerSteak
  // Purpose      ハンバーグの制作と得点の積算
  // Return       なし
  // Memo         
  ///////////////////////////////////////
class CookHamburgerSteak
{
  //プロパティ宣言
  public $point;

  //コンストラクトメソッドでプロパティを初期化
  function __construct(){
    $this->point = 0;
  }
  ///////////////////////////////////////
  // MethodName   cookHamburgerSteak
  // Purpose      素材を切る工程と得点の積算
  // Return       なし
  // Memo         
  ///////////////////////////////////////
  public function cookHamburgerSteak(){
    //Cutクラスのインスタンスを生成
    $cutonion = new Cut();
    
    //Cutインスタンス内のcutOnionメソッドを実行して返り値（玉ねぎの重量）を$gramに代入
    $gram = $cutonion->cutOnion();

    //Sauteクラスのインスタンスを生成
    $saute = new Saute();

    //Sauteインスタンス内のSauteメソッドを実行して返り値（ソテー工程の得点）をpointプロパティに代入
    $this->point += $saute->Saute("玉ねぎ", $gram);

    //Mixクラスのインスタンスを生成
    $mix = new Mix();

    //Mixインスタンス内のmixメソッドを実行して返り値（Mix工程の得点と総重量の配列）を受け取り、それぞれ$pointと$allへ代入
    list($point, $all) = $mix->mix($gram);

    //Mix工程の得点をpointプロパティに加算
    $this->point += $point;
    
    //Grillクラスのインスタンスを生成
    $grill = new Grill();

    //Grillインスタンス内にあるgrilledHamburgSteakメソッドに$allを引数で渡して実行。返り値をpointプロパティへ加算。
    $this->point += $grill->grilledHamburgSteak($all);

    //この工程のpointをリターン
    return $this->point;
    
  }

}