<?php
require_once 'Cooking/CookSteak.php';
require_once 'Cooking/CookHamburgerSteak.php';

use Cooking\CookSteak;
use Cooking\CookHamburgerSteak;

class Main
{
  //プロパティの宣言
  public $score;
  public $number;

  //コンストラクタメソッドでプロパティの初期化
  function __construct(){
    $this->number = 0;
    $this->score = 0;
  }

  //ユーザーにメニュー番号入力を促し、番号毎にswitchで分岐させる。
  //1の時はcookSteakメソッド実行、2の時はcookHamburgerSteakメソッド実行。
  //メニューが増えたらcook〇〇メソッド（〇〇にはメニュー名を入れる）を作り、ここで分岐させる。
  //出来るメニュー以外の入力時はコメント文を表示してプログラム終了。
  public function process(){
    echo "「メニュー番号を入力してください」\n[ 1 ] ステーキ\n[ 2 ] ハンバーグ\n";
    $this->number = readline();

    switch($this->number) {
      case 1:
        echo "「ステーキを作ります」\n";
        $cook_steak = new CookSteak();
        $this->score += $cook_steak->cookSteak();
        break;
      case 2:
        echo "「ハンバーグを作ります」\n";
        $cook_hamburger_steak = new CookHamburgerSteak();
        $this->score += $cook_hamburger_steak->cookHamburgerSteak();
        break;
      default:
        echo "「入力されたメニュー番号は用意出来ません」\n";
        break;
    }

    if($this->score >= 5)
    {
      echo "「大成功です！！！」";
    }
    else if($this->score < 0)
    {
      echo "「上手に作れましたね！」";
    }
    else if($this->score > -2)
    {
      echo "「食べるのキツイけど、次はうまく作れますよ。」";
    }
    else
    {
      echo "「この料理は失敗作です」";
    }
  }
}

$main = new Main();
$main->process();