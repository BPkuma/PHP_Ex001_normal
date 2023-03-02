<?php
namespace Validator;

class Validate
{
  public static function validate(){
    while(true){
      $word = (int)readline();
      if($word === null || $word === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      } else {
        break;
      }
    }
    return $word;
  }

  public static function validate_notice($target, $compare, $amount){
    while(true){
      $word = (int)readline();
      if($word === null || $word === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      } else if($word > $compare / $amount){
        echo "「{$target}の量が多すぎます。もう一度入れる量を入力してください。」\n";
      } else {
        break;
      }
    }
    return $word;
  }
}