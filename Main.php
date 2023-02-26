<?php
require_once 'Cooking/CookSteak.php';
use Cooking\CookSteak;

  echo "「メニュー番号を入力してください」\n";
  $number = readline();

  switch($number) {
    case 1:
      echo "「ステーキを作ります」\n";
      CookSteak::cookSteak();
      break;
    default:
      echo "「入力されたメニュー番号は用意出来ません」\n";
      break;
  }