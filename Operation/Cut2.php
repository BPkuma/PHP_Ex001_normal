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

  public function cutOnion(){
    echo "「玉ねぎを何グラムみじん切りにしますか？」\n";
    while(true){
      $onion_gram = (int)readline();
      if($onion_gram === null || $onion_gram === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }
    echo "「玉ねぎを{$onion_gram}グラムみじん切りにしました」\n";
    return $onion_gram;
  }
}