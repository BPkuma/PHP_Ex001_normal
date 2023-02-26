<?php
namespace Operation;

class Cut2
{
  public function cutMeat($meat, $gram) {
    echo "「肉をカットする厚さを入力してください」\n";
    while(true){
      $thickness = (int)readline();
      if($thickness === null || $thickness === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }
    echo "「{$meat}{$gram}グラムを{$thickness}センチにカットしました」\n";
    return $thickness;
  }
}