<?php
require_once 'Cooking/CookSteak2.php';
require_once 'Cooking/CookHamburgerSteak.php';

use Cooking\CookSteak2;
use Cooking\CookHamburgerSteak;

class Main
{
  public $point = 0;

  public static function process(){
    echo "「メニュー番号を入力してください」\n";
    $number = readline();

    switch($number) {
      case 1:
        echo "「ステーキを作ります」\n";
        $cook_steak = new CookSteak();
        $cook_steak->cookSteak();
        break;
      case 2:
        echo "「ハンバーグを作ります」\n";
        $cook_hamburger_steak = new CookHamburgerSteak();
        $cook_hamburger_steak->cookHamburgerSteak();
        break;
      default:
        echo "「入力されたメニュー番号は用意出来ません」\n";
        break;
    }
  }
}

$main = new Main();
$main->process();