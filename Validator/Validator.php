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

  public static function validate_notice($word, $target, $amount){
    while(true){
      $word1 = (int)readline();
      if($word1 === null || $word1 === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      } else if($word1 > $target / $amount){
        echo "「{$word}の量が多すぎます。もう一度入れる量を入力してください。」\n";
      } else {
        break;
      }
    }
    return $word1;
  }
}