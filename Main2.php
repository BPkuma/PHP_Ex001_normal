<?php
require_once 'Cooking/CookSteak2.php';

use Cooking\CookSteak2;

echo "「メニュー番号を入力してください」\n";
$number = readline();

switch($number) {
  case 1:
    echo "「ステーキを作ります」\n";
    CookSteak2::cookSteak();
    break;
  default:
    echo "「入力されたメニュー番号は用意出来ません」\n";
    break;
}