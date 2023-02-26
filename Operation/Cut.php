<?php
namespace Operation;
require_once 'Cooking/CookSteak.php';

  class Cut
  {
    public function cutMeat($meat, $gram) {
      echo "「肉をカットする厚さを入力してください」\n";
      $thickness = readline();

      echo "「{$meat}{$gram}グラムを{$thickness}センチにカットしました」\n";
      return $thickness;
    }
  }